<?php

namespace biz\behnke\jquery\ui\widgets;

use biz\behnke\jquery\ui\jQueryUI;
use biz\behnke\w3c\html\blocklevel\Div;

/**
 * Description of Accordion
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/tabs/
 */
class Tabs extends jQueryUI
{
	const METHOD = 'tabs';

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

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		print sprintf('%s, <div id="%s">%s</div>%s',
				$this->renderBeforeHtml(),
				$this->match,
				$this->renderInnerHtml(),
				$this->renderAfterHtml()
		);
		self::add($this);
	}

}
