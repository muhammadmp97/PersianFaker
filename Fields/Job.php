<?php

require_once 'Base.php';

class Job extends Base
{
	protected static $jobs = array('منشی', 'حسابدار', 'برنامه‌نویس', 'پیمانکار', 'آتش‌نشان', 'پزشک', 'دانشجو', 'سرباز', 'ویزیتور', 'کارگر', 'پرستار', 'خلبان', 'فروشنده', 'معمار', 'آشپز', 'خیاط');

	public static function generate()
	{
		return static::picker(static::$jobs);
	}
}