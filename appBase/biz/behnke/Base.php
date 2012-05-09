<?php
/**************************************************************************
 *
 * Copyright 2011 Marco Behnke <marco@behnke.biz>
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 **************************************************************************/

namespace biz\behnke;

/**
 * Description of Base
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
abstract class Base
{

	/**
	 * collections of objects appended to the inner container of our element
	 *
	 * @var array
	 */
	protected $innerHtml = array();

	/**
	 * render inner html
	 *
	 * @return String
	 */
	protected function renderInnerHtml()
	{
		return $this->renderHtml($this->innerHtml);
	}

	/**
	 * collections of objects appended to the container of our element
	 *
	 * @var array
	 */
	protected $afterHtml = array();

	/**
	 * render after html
	 *
	 * @return String
	 */
	protected function renderAfterHtml()
	{
		return $this->renderHtml($this->afterHtml);
	}

	/**
	 * collections of objects prepended to the container of our element
	 *
	 * @var array
	 */
	protected $beforeHtml = array();

	/**
	 * render before html
	 *
	 * @return String
	 */
	protected function renderBeforeHtml()
	{
		return $this->renderHtml($this->beforeHtml);
	}

	/**
	 * render collection of objecs to html
	 *
	 * @param array $htmlArray
	 * @param boolean $minified
	 * @return String
	 */
	private function renderHtml($htmlArray, $minified = false)
	{
		$result = '';
		foreach ($htmlArray as $object)
		{
			if ($object instanceof Renderable)
			{
				$result .= $object->renderUI(true, false);
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

	/**
	 * render our attributes
	 *
	 * @return String
	 */
	protected function renderAttr()
	{
		$attr = array();
		foreach ($this->attributes as $k => $v)
		{
			$attr[] = sprintf('%s="%s"', $k, \htmlspecialchars($v, \ENT_COMPAT, 'UTF-8'));
		}
		return implode(' ', $attr);
	}

	/**
	 * add attribute or return value
	 * if $value != null this method is used as getter and returns the value
	 * if value is submitted, this method is used as setter and returns self
	 *
	 * @param String $key
	 * @param String $value
	 * @return Base|String
	 */
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

	/**
	 * append object to innerhtml
	 *
	 * @param Object $object
	 * @return Base this
	 */
	public function append($object)
	{
		$this->innerHtml[] = $object;
		return $this;
	}

	/**
	 * append this to object
	 * 
	 * @param Object $object
	 * @return Object
	 */
	public function appendTo($object)
	{
		$object->append($this);
		return $object;
	}

	/**
	 * add object to before html
	 *
	 * @param Object $object
	 * @return Base
	 */
	public function before($object)
	{
		$this->beforeHtml[] = $object;
		return $this;
	}

	/**
	 * add object to after html
	 *
	 * @param Object $object
	 * @return Base
	 */
	public function after($object)
	{
		$this->afterHtml[] = $object;
		return $this;
	}

	/**
	 * return innerHtml or replace content with new inner html
	 *
	 * @param mixed $innerHtml
	 * @return Base/String
	 */
	public function html($innerHtml = null)
	{
		if (is_null($innerHtml))
		{
			return $this->renderInnerHtml();
		}

		$this->innerHtml = array();
		if (is_array($innerHtml)) // check if this is really neccesary or if we can move this to renderHtml
		{
			foreach($innerHtml as $html)
			{
				$this->append($html);
			}
		}
		else
		{
			$this->append($innerHtml);
		}

		return $this;
	}

	/**
	 * returns the real name of the class we are called from
	 *
	 * @return String
	 */
	public static function getCalledClass()
	{
		return get_called_class();
	}

	/**
	 * get instance of class
	 *
	 * @return Object
	 */
	static function getInstance()
	{
		$calledClass = static::getCalledClass();
		return new $calledClass();
	}

}
