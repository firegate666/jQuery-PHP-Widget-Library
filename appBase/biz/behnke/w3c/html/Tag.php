<?php

namespace biz\behnke\w3c\html;

use biz\behnke\Base;

/**
 * Description of Tag
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
abstract class Tag extends Base
{
	const SELF_CLOSING = false;

	/**
	 * our tag identifier, e.g. div
	 *
	 * @var String
	 */
	protected $name = null;

	/**
	 * html attributes
	 *
	 * @var array
	 */
	protected $attributes = array();

	/**
	 * get instance of tag
	 *
	 * @param <type> $name
	 * @param <type> $attributes
	 * @return className
	 */
	static function getInstance($name, $attributes = array())
	{
		$calledClass = static::getCalledClass();
		return new $calledClass($name, $attributes);
	}

	public function __construct($name, $attributes = array())
	{
		$this->name = $name;
		$this->attributes = $attributes;
	}

	/**
	 * print object
	 */
	public function renderUI()
	{
		print $this;
	}

	/**
	 * build string for tag
	 *
	 * @return String
	 */
	public function __toString()
	{
		$result = sprintf('<%s %s', $this->name, $this->renderAttr());

		if (!static::SELF_CLOSING)
		{
			$result .= '>';
		}

		if (!empty($this->innerHtml))
		{
			$result .= $this->renderInnerHtml();
		}

		if (empty($this->innerHtml) && static::SELF_CLOSING)
		{
			$result .= ' />';
		}
		else
		{
			$result .= sprintf('</%s>', $this->name);
		}
		return $result;
	}

	/**
	 * append item to or fetch from attributes
	 * this is a shortcut for biz\behnke\Base::attr(key, value)
	 *
	 * @example $label->for('mylabelname'): <label for="mylabelname"></label>
	 * @param String $name
	 * @param array $arguments
	 * @return Tag
	 */
	public function __call($name, $arguments)
	{
		if (array_key_exists($name, $this->attributes) && count($arguments) == 0) // getter
		{
			return $this->attributes[$name];
		}
		else if (count($arguments) == 1) // setter
		{
			$this->attributes[$name] = array_pop($arguments);
		}
		else
		{
			throw new \Exception(sprintf('Invalid method "%s" called in %s:%d', $name, __FILE__, __LINE__), 500);
		}
		return $this;
	}

}
