<?php

namespace PersianFaker;

class PersianFaker
{
	public static function get(string $field, array $args = null)
	{
		$field = ucfirst($field);
		$classFile = "fields/{$field}";
		require_once("./{$classFile}.php");
		return $field::generate($args);
	}
}