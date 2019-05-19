<?php

class Base
{
	public static function picker(array $array)
	{
		$key = array_rand($array, 1);
		return $array[$key];
	}
}