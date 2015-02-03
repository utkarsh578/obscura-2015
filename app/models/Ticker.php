<?php
class Ticker extends Eloquent
{
	protected $table="ticker";
	
	public static function getTicker()
	{
		return DB::table('ticker')->where('id','1')->pluck('message');
	}

}
