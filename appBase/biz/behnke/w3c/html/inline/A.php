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
