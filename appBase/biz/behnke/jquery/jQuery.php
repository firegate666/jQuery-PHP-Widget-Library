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

namespace biz\behnke\jquery;

use biz\behnke\Base;
use biz\behnke\RenderUI;
use biz\behnke\w3c\html\blocklevel\Div;

/**
 * Description of jQuery
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
abstract class jQuery extends Base implements RenderUI
{
	/**
	 * keep track of all created objects
	 * 
	 * @var array
	 */
	static $objectRegistry = array();

	/**
	 * inner tag type
	 *
	 * @var \biz\behnke\w3c\html\Tag
	 */
	protected $type = null;

	/**
	 *
	 * @param \biz\behnke\w3c\html\Tag $type
	 * @return jQuery
	 */
	public function type($type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * jQuery version for this build
	 */
	const VERSION = '1.6.2';

	/**
	 * matcher for this object, in this case it is id
	 *
	 * @todo can this ever be something else than id?
	 * @var String
	 */
	protected $match = '';

	/**
	 *
	 * @todo unused yet. Will it ever be used?
	 * @var null
	 */
	protected $scope = null;

	/**
	 * true if this widget was printed
	 *
	 * @var boolean
	 */
	protected $jsRendered = false;

	/**
	 * true if this widget ui was printed
	 *
	 * @var boolean
	 */
	protected $uiRendered = false;

	/**
	 * config container
	 *
	 * @var biz\behnke\jquery\jQueryConfig
	 */
	protected $config;

	/**
	 * key value pairs for default configuration
	 *
	 * @var String
	 */
	protected $defConfig = array();

	/**
	 * widgets to be rendered
	 * 
	 * @var array
	 */
	protected static $CallStack = array();

	/**
	 * get instance of jquery widget
	 *
	 * @param String $match unique identifier
	 * @param null $scope
	 * @return jQuery
	 */
	static function getInstance($match, $scope = null)
	{
		if (empty(self::$objectRegistry[$match]))
		{
			$calledClass = static::getCalledClass();
			self::$objectRegistry[$match] = new $calledClass($match, $scope);
		}
		return self::$objectRegistry[$match];
	}

	protected function __construct($match, $scope = null)
	{
		$this->match = $match;
		$this->scope = $scope;
		$this->config = jQueryConfig::getInstance($this->defConfig);
		$this->type(Div::getInstance());
	}

	/**
	 * escape value, quote '
	 *
	 * @param String $value
	 * @return String
	 */
	static function quote($value)
	{
		return "'" . str_replace("'", "\\'", $value) . "'";
	}

	/**
	 * append widget to call stack
	 * 
	 * @param Object $object
	 */
	static function add($object)
	{
		self::$CallStack[] = $object;
	}

	/**
	 * render out call stack to javascript
	 */
	static function renderJS()
	{
		foreach (self::$CallStack as $widget)
		{
			if (!$widget->jsRendered)
			{
				print $widget . ';' . PHP_EOL;
			}
		}
	}

	/**
	 * render widget by rendering its containing tag container
	 * 
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		$this->uiRendered = true;

		foreach ($this->attributes as $k => $v)
		{
			$this->type->attr($k, $v);
		}
		$this->type->id($this->match);

		$this->type->before($this->renderBeforeHtml());
		$this->type->append($this->renderInnerHtml());
		$this->type->after($this->renderAfterHtml());

		print $this->type . PHP_EOL;

		self::add($this);
	}

	/**
	 * transform widget to javascript
	 * 
	 * @return String
	 */
	public function __toString()
	{
		$widget->jsRendered = true;
		$config = json_encode($this->config);
		return 'jQuery('
		. self::quote('#' . $this->match) . ').'
		. $this->getJSName() . '(' . $config . ')'
		;
	}

	protected function getJSName()
	{
		$classname = strtolower(get_class($this));
		$pos = \strrpos($classname, '\\') + 1;
		return \substr($classname, $pos);
	}

	/**
	 *
	 * @param String $name
	 * @param array $arguments
	 * @return jQuery
	 */
	public function __call($name, $arguments)
	{
		if (array_key_exists($name, $this->config) && count($arguments) == 0) // getter
		{
			return $this->config->$name;
		}
		else if (array_key_exists($name, $this->config) && count($arguments) == 1) // setter
		{
			$this->config->$name = array_pop($arguments);
		}
		else
		{
			throw new \Exception(sprintf('Invalid method "%s" called in %s:%d', $name, __FILE__, __LINE__), 500);
		}
		return $this;
	}

}
