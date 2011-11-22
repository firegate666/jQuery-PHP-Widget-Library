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
 * Description of NoJQuery
 *
 * @author Marco Behnke <marco@behnke.biz>
 */
class NoJQuery extends jQuery {

	static $singleton;

	protected function __construct()
	{
		// do nothing
	}

	/**
	 * This class uses singleton pattern
	 *
	 * @return NoJQuery
	 */
	static function getInstance()
	{
		if (empty(self::$singleton))
		{
			self::$singleton = new NoJQuery();
		}
		return self::$singleton;
	}

	/**
	 * nothing is rendered
	 *
	 * @param boolean $returnAsString
	 * @param boolean $minified
	 * @return null/String
	 */
	function renderUI($returnAsString = false, $minified = false)
	{
		if ($returnAsString)
		{
			return '';
		}

		return null;
	}

	/**
	 * empty string
	 *
	 * @return String
	 */
	public function __toString()
	{
		return '';
	}

}
