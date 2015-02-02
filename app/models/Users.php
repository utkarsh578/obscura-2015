<?php
class Users extends Eloquent
{
	protected $table="users";
	protected $primaryKey = 'user_id';
	protected $fillable = ['first_name','last_name','email','uid','mobno','password','user_access_token','user_remember_token','college','level','signup_type'];

	public static $rulesSignup=array(
		'email'=>'required|unique:users,email',
		'password'=>'required|confirmed|min:6',
		'g-recaptcha-response' => 'required|recaptcha',
	);
	public static $rules_login=[
		'email'=>'required',
		'password'=>'required',
	];

	public static $rulesfbgoole=array(
		'email'=>'required|unique:users,email',
	);

	public static function getData($id)
	{
		return DB::select('select * from users');
	}
	public static function getUserId($uid)
	{
		return DB::table('users')->where('uid',$uid)->pluck('user_id');
	}
	public static function getFirstName($userId)
	{
		return DB::table('users')->where('user_id',$userId)->pluck('first_name');
	}
	public static function getLevel($id)
	{
		return DB::table('users')->where('user_id',$id)->pluck('level');
	}
	public static function getUserMaxLevel($userId)
	{
		return DB::table('users')->where('user_id',$userId)->pluck('level');
	}

	public static function updateLevel()
	{
		DB::table('users')->increment('level');
	}
}