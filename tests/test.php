<?php

include '../vendor/autoload.php';

use PersianFaker\PersianFaker;

$d1 = PersianFaker::get('FullName', ['sex' => 'm']);
$d2 = PersianFaker::get('Age', ['min' => 18, 'max' => 50]);
$d3 = PersianFaker::get('MaleName');
$d4 = PersianFaker::get('City');
$d5 = PersianFaker::get('IdentityCode');
$d6 = PersianFaker::get('Certificate');
$d7 = PersianFaker::get('Job');

echo "با سلام! من " . $d1 . " هستم، " . $d2 . " ساله، فرزند " . $d3 . "، ساکن " . $d4 . " با شماره ملی " . $d5 . ". اینجانب با مدرک " . $d6 . "، " . $d7 . " هستم و از PersianFaker بسیار راضی‌ام!";