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

/**
 * Description of Accordion
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/tabs/
 */
class Tabs extends jQueryUI
{

	protected $defConfig = array(
		'disabled' => array(), // can be array as well
		'ajaxOptions' => null,
		'cache' => false,
		'collapsible' => false,
		'cookie' => null,
		'deselectable' => false,
		'event' => 'click',
		'fx' => null,
		'idPrefix' => 'ui-tabs-',
		'panelTemplate' => '<div></div>',
		'selected' => 0,
		'spinner' => '<em>Loading&#8230;</em>',
		'tabTemplate' => '<li><a href="#{href}"><span>#{label}</span></a></li>',
	);

}
