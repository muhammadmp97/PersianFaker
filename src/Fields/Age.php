<?php

require_once 'Base.php';

class Age extends Base
{
	public static function generate(array $args)
	{
		return mt_Rand($args['min'], $args['max']);
	}
}