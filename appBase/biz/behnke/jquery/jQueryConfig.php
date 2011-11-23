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
use biz\behnke\jquery\exceptions\NoSuchPropertyException;

/**
 * Description of jQueryConfig
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class jQueryConfig
{

	/**
	 * default config to determine valied config keys
	 *
	 * @var array
	 */
	protected $defConfig = array();

	/**
	 * get config value
	 * 
	 * @param String $key
	 * @param mixed $value
	 * @throws NoSuchPropertyException
	 */
	public function set($key, $value)
	{
		if (!$this->hasConfig($key))
		{
			throw NoSuchPropertyException(sprintf('Property "%s" is invalid and can not be set', $key));
		}
		$this->$key = $value;
	}

	/**
	 * get config value
	 *
	 * @param String $key
	 * @throws NoSuchPropertyException
	 * @return mixed
	 */
	public function get($key)
	{
		if (!$this->hasConfig($key))
		{
			throw NoSuchPropertyException(sprintf('Property "%s" is invalid and can not be get', $key));
		}
		return $this->$key;
	}

	/**
	 * test if config key is valid
	 *
	 * @param String $key
	 * @return boolean
	 */
	public function hasConfig($key)
	{
		return array_key_exists($key, $this->defConfig);
	}

	public function __construct(array $defConfig = array())
	{
		$this->defConfig = $defConfig;
	}

	/**
	 *
	 * @param array $defConfig default config to determine valied config keys
	 * @return jQueryConfig
	 */
	static function getInstance(array $defConfig = array())
	{
		return new jQueryConfig($defConfig);

	}

}
