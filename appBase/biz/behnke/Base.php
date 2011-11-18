<?php
namespace biz\behnke;

/**
 * Description of Base
 *
 * @author behnke
 */
abstract class Base {

	protected $innerHtml = array();

	protected function renderInnerHtml()
	{
		$result = '';
		foreach($this->innerHtml as $object)
		{
			if ($object instanceof RenderUI)
			{
				$result .= $object->renderUI();
			}
			else
			{
				$result .= $object;
			}
		}
		return $result;
	}

	/**
	 * object wrapped inside this one
	 *
	 * @var <type>
	 */
	protected $attributes = array();

	protected function renderAttr()
	{
		$attr = array();
		foreach($this->attributes as $k=>$v)
		{
			$attr[] = sprintf('%s="%s"', $k, \htmlspecialchars($v, \ENT_COMPAT, 'UTF-8'));
		}
		return implode(' ', $attr);
	}

	public function attr($key, $value = null)
	{
		if (is_null($value) && \array_key_exists($key, $this->attributes))
		{
			return $this->attributes[$key];
		}
		else if (!is_null($value))
		{
			$this->attributes[$key] = $value;
			return $this;
		}
		return null;
	}

	public function append($object)
	{
		$this->innerHtml[] = $object;
		return $this;
	}

	public function appendTo($object)
	{
		$object->append($this);
		return $object;
	}
}
