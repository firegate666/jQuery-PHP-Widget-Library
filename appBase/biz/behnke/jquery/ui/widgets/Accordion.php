<?php

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
	const METHOD = 'accordion';

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
