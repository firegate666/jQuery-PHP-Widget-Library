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
 * @see http://jqueryui.com/demos/accordion/
 */
class Accordion extends jQueryUI
{

	protected $defConfig = array(
		'disabled' => false,
		'active' => 0,
		'animated' => 'slide',
		'autoHeight' => true,
		'clearStyle' => false,
		'collapsible' => false,
		'event' => 'click',
		'fillSpace' => false,
		'header' => '> li > :first-child,> :not(li):even',
		'icons' => array('header' => 'ui-icon-triangle-1-e', 'headerSelected' => 'ui-icon-triangle-1-s'),
		'navigation' => false,
		'navigationFilter' => '',
	);

}
