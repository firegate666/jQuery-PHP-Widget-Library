<?php

namespace biz\behnke\jquery;

/**
 * Description of jQueryConfig
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class jQueryConfig
{

	public function __construct(array $properties = array())
	{
		foreach ($properties as $name => $value)
		{
			$this->$name = $value;
		}
	}

	static function getInstance(array $properties = array())
	{
		return new jQueryConfig($properties);

	}

}
