<?php
namespace biz\behnke\w3c\html\inline;

/**
 * Description of Li
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Li extends Inline {

    public function __construct($attributes = array())
	{
		parent::__construct('li', $attributes);
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