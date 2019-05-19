<?php

require_once 'Base.php';
require_once 'MaleName.php';
require_once 'FemaleName.php';
require_once 'LastName.php';

class FullName extends Base
{
	protected static $lastNames = array('فرهادی', 'مرادی', 'سعیدی', 'شاه‌مرادی', 'بلوریان', 'فرهادیان', 'محمدی', 'ناصری', 'ناصریان', 'حسینی', 'حسنی', 'طباطبایی', 'مستوفی', 'حسن‌زاده', 'مشکینی', 'زمانی', 'ظاهری', 'دماوندی', 'شایسته', 'کریمی', 'یغموری', 'سبحانی', 'محمدیان', 'لاجوردی', 'زارعی', 'قریشی', 'زاهدی', 'صالحی');

	public static function generate(array $args)
	{
		$map = ['m' => 'Male', 'f' => 'Female'];
		$firstNameClass = $map[$args['sex']] . 'Name';
		return $firstNameClass::generate() . ' ' . LastName::generate();
	}
}