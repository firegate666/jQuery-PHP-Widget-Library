<?php
namespace biz\behnke\w3c\html\blocklevel;

/**
 * Description of Div
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class Div extends BlockLevel {

    public function __construct($attributes = array())
	{
		parent::__construct('div', $attributes);
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
