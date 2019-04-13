<?php

require_once 'Base.php';

class LastName extends Base
{
	protected static $lastNames = array('فرهادی', 'مرادی', 'سعیدی', 'شاه‌مرادی', 'بلوریان', 'فرهادیان', 'محمدی', 'ناصری', 'ناصریان', 'حسینی', 'حسنی', 'طباطبایی', 'مستوفی', 'حسن‌زاده', 'مشکینی', 'زمانی', 'ظاهری', 'دماوندی', 'شایسته', 'کریمی', 'یغموری', 'سبحانی', 'محمدیان', 'لاجوردی', 'زارعی', 'قریشی', 'زاهدی', 'صالحی');

	public static function generate()
	{
		return static::picker(static::$lastNames);
	}
}