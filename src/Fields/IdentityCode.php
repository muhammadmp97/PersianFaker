<?php

require_once 'Base.php';

class IdentityCode extends Base
{
	public static function generate()
	{
		$idCode = '';
		for ($i=0; $i<10; $i++) {
			$idCode .= mt_rand(0, 9);
		}
		return $idCode;
	}
}