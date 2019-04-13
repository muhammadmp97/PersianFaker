<?php

require_once 'Base.php';

class FemaleName extends Base
{
	protected static $names = array('دریا', 'روژان', 'سارا', 'مهری', 'ماریه', 'صبا', 'شیدا', 'شادی', 'فریبا', 'لاله', 'شراره', 'بهاره', 'باران', 'زهرا', 'زهره', 'شیوا', 'شهلا', 'مرضیه', 'درسا', 'آتوسا', 'آنیتا', 'نیوشا', 'نازنین', 'نگار', 'نسترن', 'روژین', 'زینب', 'سعیده', 'سوسن', 'نرگس', 'تارا', 'مریم', 'مستانه', 'مارال');

	public static function generate()
	{
		return static::picker(static::$names);
	}
}