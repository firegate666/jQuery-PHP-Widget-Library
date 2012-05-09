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
use biz\behnke\Renderable;
use biz\behnke\w3c\html\blocklevel\Div;

/**
 * Description of jQuery
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
abstract class jQuery extends Base implements Renderable
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
	 * fetch instance from registry by id
	 *
	 * @param String $match
	 * @return jQuery/false
	 */
	static function fetchInstance($match)
	{
		if (empty(self::$objectRegistry[$match]))
		{
			return NoJQuery::getInstance();
		}
		return self::$objectRegistry[$match];
	}

	/**
	 * get instance of jquery widget
	 *
	 * @param String $match unique identifier
	 * @param null $scope
	 * @return jQuery
	 */
	static function getInstance($match, $scope = null)
	{
		$object = self::fetchInstance($match);
		if ($object instanceof NoJQuery)
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
	 * @param boolean $returnAsString
	 * @param boolean $minified
	 * @return null/String
	 */
	function renderUI($returnAsString = false, $minified = false)
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

		self::add($this);

		if ($returnAsString)
		{
			return $this->type->renderUI(true);
		}
		else
		{
			print $this->type->renderUI(false, $minified);
			return null;
		}
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
	 * @throws BadMethodCallException
	 * @return jQuery
	 */
	public function __call($name, $arguments)
	{
		if (array_key_exists($name, $this->config) && count($arguments) == 0) // getter
		{
			return $this->config->get($name);
		}
		else if ($this->config->hasConfig($name) && count($arguments) == 1) // setter
		{
			$this->config->set($name, array_pop($arguments));
		}
		else
		{
			throw new \BadMethodCallException(sprintf('Invalid method "%s" called on %s', $name, static::getCalledClass()), 500);
		}
		return $this;
	}

}
