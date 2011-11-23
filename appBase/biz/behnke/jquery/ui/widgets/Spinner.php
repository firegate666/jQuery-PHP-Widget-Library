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

namespace biz\behnke\jquery\ui\widgets;

use biz\behnke\jquery\ui\jQueryUI;
use biz\behnke\w3c\html\inline\Input;

/**
 * Description of Spinner
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see https://github.com/btburnett3/jquery.ui.spinner
 */
class Spinner extends jQueryUI
{

	protected $defConfig = array(
		'min' => null,
		'max' => null,
		'allowNull' => false,
		'group' => '',
		'point' => '.',
		'prefix' => '',
		'suffix' => '',
		'places' => null, // null causes it to detect the number of places in step
		'defaultStep' => 1, // real value is 'step', and should be passed as such.  This value is used to detect if passed value should override HTML5 attribute
		'largeStep' => 10,
		'mouseWheel' => true,
		'increment' => 'slow',
		'className' => null,
		'showOn' => 'always',
		'width' => 16,
		'upIconClass' => "ui-icon-triangle-1-n",
		'downIconClass' => "ui-icon-triangle-1-s",
	);

	protected function __construct($match, $scope = null)
	{
		parent::__construct($match, $scope = null);
		$this->type(Input::getInstance()->type('text'));
	}

}
