<?php

namespace biz\behnke\w3c\html\inline;

/**
 * Description of Input
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Input extends Inline
{
	const SELF_CLOSING = true;

	public function __construct($attributes = array())
	{
		parent::__construct('input', $attributes);
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
