<?php

namespace PersianFaker\Fields;

class FullName extends Base
{
	protected static $lastNames = array('فرهادی', 'مرادی', 'سعیدی', 'شاه‌مرادی', 'بلوریان', 'فرهادیان', 'محمدی', 'ناصری', 'ناصریان', 'حسینی', 'حسنی', 'طباطبایی', 'مستوفی', 'حسن‌زاده', 'مشکینی', 'زمانی', 'ظاهری', 'دماوندی', 'شایسته', 'کریمی', 'یغموری', 'سبحانی', 'محمدیان', 'لاجوردی', 'زارعی', 'قریشی', 'زاهدی', 'صالحی');

	public static function generate(array $args)
	{
		$map = ['m' => 'MaleName', 'f' => 'FemaleName'];
		$firstNameClass = "PersianFaker\\Fields\\" . $map[$args['sex']];
		return $firstNameClass::generate() . ' ' . LastName::generate();
	}
}