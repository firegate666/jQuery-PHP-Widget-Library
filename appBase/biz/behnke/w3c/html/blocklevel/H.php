<?php
namespace biz\behnke\w3c\html\blocklevel;

/**
 * Description of P
 *
 * @author behnke
 */
class H extends BlockLevel {

	/**
	 * get instance of jquery widget
	 *
	 * @param <type> $level
	 * @param <type> $attributes
	 * @return className
	 */
	static function getInstance($level = 1, $attributes = array())
	{
		$calledClass = static::getCalledClass();
		return new $calledClass($level, $attributes);
	}

    public function __construct($level = 1, $attributes = array())
	{
		parent::__construct('h'.$level, $attributes);
	}

}
