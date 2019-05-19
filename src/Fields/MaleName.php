<?php

namespace PersianFaker\Fields;

class MaleName extends Base
{
	protected static $names = array('محمد', 'سعید', 'رضا', 'جواد', 'فرهاد', 'پارسا', 'محمدعلی', 'بابک', 'بهرام', 'کیوان', 'محسن', 'خالد', 'حسین', 'حسن', 'مسلم', 'حمید', 'ناصر', 'رسول', 'محمدحسین', 'علیرضا', 'محمدباقر', 'عبدالرحمن', 'خداداد', 'یحیی', 'پوریا', 'پویا', 'پیمان', 'فرزاد');

	public static function generate()
	{
		return static::picker(static::$names);
	}
}