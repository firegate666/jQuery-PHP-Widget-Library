<?php

namespace biz\behnke\jquery;

use biz\behnke\Base;
use biz\behnke\RenderUI;

/**
 * Description of jQuery
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
abstract class jQuery extends Base implements RenderUI
{
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
	protected $rendered = false;

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
	 * @param String $match
	 * @param null $scope
	 * @return jQuery
	 */
	static function getInstance($match, $scope = null)
	{
		$calledClass = static::getCalledClass();
		return new $calledClass($match, $scope);
	}

	public function __construct($match, $scope = null)
	{
		$this->match = $match;
		$this->scope = $scope;
		$this->config = jQueryConfig::getInstance($this->defConfig);
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
			if (!$widget->rendered)
			{
				print $widget . ';' . PHP_EOL;
			}
		}
	}

	/**
	 * transform widget to javascript
	 * 
	 * @return String
	 */
	public function __toString()
	{
		$widget->rendered = true;
		$config = json_encode($this->config);
		return 'jQuery('
		. self::quote('#' . $this->match) . ').'
		. static::METHOD . '(' . $config . ')'
		;
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
