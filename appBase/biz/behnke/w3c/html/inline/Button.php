<?php
namespace biz\behnke\w3c\html\inline;

/**
 * Description of Button
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Button extends Inline {

    public function __construct($attributes = array())
	{
		parent::__construct('button', $attributes);
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
