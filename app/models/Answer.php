<?php
class Answer extends Eloquent
{
	protected $table="answers";



	public static function getAnswer($level,$query)
	{
		return DB::table('answers')->where('level',$level)->pluck($query);
	}
}