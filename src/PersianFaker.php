<?php

namespace PersianFaker;

class PersianFaker
{
	public static function get(string $field, array $args = null)
	{
		$field = ucfirst($field);
		$className = "PersianFaker\\Fields\\{$field}";
		return $className::generate($args);
	}
}