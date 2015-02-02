<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'user_id';
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getRememberToken()
	{
    	return $this->user_remember_token;
	}
	public function setRememberToken($value)
	{
    	$this->user_remember_token = $value;
	}

	public function getRememberTokenName()
	{
    	return 'user_remember_token';
	}
	public function getReminderEmail()
	{
		return $this->user_email;
	}
	public function getAuthPassword()
	{
		return $this->password;
	}

}
