<?php

namespace biz\behnke\jquery;

/**
 * Description of jQueryConfig
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class jQueryConfig
{

	static function getInstance(array $properties = array())
	{
		$config = new jQueryConfig();
		foreach ($properties as $name => $value)
		{
			$config->$name = $value;
		}
		return $config;
	}

}
