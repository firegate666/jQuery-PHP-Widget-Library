<?php

namespace biz\behnke\w3c\html\inline;

/**
 * Description of A
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class A extends Inline
{

	public function __construct($attributes = array())
	{
		parent::__construct('a', $attributes);
	}

	/**
	 * set attribute href and target in one step
	 *
	 * @param String $href
	 * @param String $target
	 * @return A
	 */
	public function link($href, $target = null)
	{
		$this->attr('href', $href);
		if (!is_null($target))
		{
			$this->attr('target', $target);
		}
		return $this;
	}

	/**
	 * get instance of div
	 *
	 * @param array $attributes
	 * @return A
	 */
	static function getInstance($attributes = array())
	{
		$calledClass = static::getCalledClass();
		return new $calledClass($attributes);
	}

}
