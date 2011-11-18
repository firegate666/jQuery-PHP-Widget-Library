<?php
namespace biz\behnke\w3c\html\blocklevel;

/**
 * Description of P
 *
 * @author behnke
 */
class P extends BlockLevel {

    public function __construct($attributes = array())
	{
		parent::__construct('p', $attributes);
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
