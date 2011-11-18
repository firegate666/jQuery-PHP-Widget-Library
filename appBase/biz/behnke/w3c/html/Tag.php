<?php
namespace biz\behnke\w3c\html;
use biz\behnke\Base;

/**
 * Description of Tag
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
abstract class Tag extends Base {

	const SELF_CLOSING = false;

	protected $name = null;

	protected $attributes = array();

	protected $innerHtml = array();

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

	public function renderUI()
	{
		print $this;
	}

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
}
