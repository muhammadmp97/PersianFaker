<?php

namespace PersianFaker\Fields;

class Phone extends Base
{
	public static function generate(array $args=null)
	{
		if ($args['withCountryCode']) {
			$phone = '+98';
		}else{
			$phone = '0';
		}
		$phone .= '992';
		for ($i=1; $i<=7; $i++)
			$phone .= mt_rand(0, 9);
		return $phone;
	}
}