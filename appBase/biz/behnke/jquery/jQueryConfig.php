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

/**
 * Description of jQueryConfig
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class jQueryConfig
{

	public function __construct(array $properties = array())
	{
		foreach ($properties as $name => $value)
		{
			$this->$name = $value;
		}
	}

	static function getInstance(array $properties = array())
	{
		return new jQueryConfig($properties);

	}

}
