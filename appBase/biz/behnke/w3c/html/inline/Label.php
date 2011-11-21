<?php

namespace biz\behnke\w3c\html\inline;

/**
 * Description of Li
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Label extends Inline
{

	public function __construct($attributes = array())
	{
		parent::__construct('label', $attributes);
	}

	/**
	 * get instance of div
	 *
	 * @param array $attributes
	 * @return Label
	 */
	static function getInstance($attributes = array())
	{
		$calledClass = static::getCalledClass();
		return new $calledClass($attributes);
	}

}
