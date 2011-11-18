<?php

namespace biz\behnke\w3c\html\blocklevel;

/**
 * Description of Ul
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Ul extends BlockLevel
{

	public function __construct($attributes = array())
	{
		parent::__construct('ul', $attributes);
	}

	/**
	 * get instance of div
	 *
	 * @param <type> $attributes
	 * @return className
	 */
	static function getInstance($attributes = array())
	{
		$calledClass = static::getCalledClass();
		return new $calledClass($attributes);
	}

}

?>
