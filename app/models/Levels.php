<?php
class Levels extends Eloquent
{
	protected $table="levels";
	public static function getLevel($levelName)
	{
		return DB::select('select level from levels where levelName=?',array($levelName));
	}

	public static function getLevelName($level)
	{
		return DB::select('select levelName from levels where level=?',array($level));
	}

}
