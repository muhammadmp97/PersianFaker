<?php

require_once 'Base.php';

class Email extends Base
{
	protected static $domains = array('gmail.com', 'hotmail.com', 'ymail.com', 'aol.com');

	public static function generate()
	{
		$length = mt_rand(7, 15);
		return static::generateRandomString($length) . '@' . static::picker(static::$domains);
	}

	private static function generateRandomString($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}