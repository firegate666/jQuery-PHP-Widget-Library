<?php
namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\ui\jQueryUI;

/**
 * Description of Button
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/button/
 */
class Button extends jQueryUI {

	const CLASSNAME = 'biz\behnke\jquery\ui\widgets\Button';
	const METHOD = 'button';

	protected $defConfig = array(
		'label' => 'My Button',
		'text' => true,
		'disabled' => false,
		'icons' => array('primary' => null, 'secondary' => null),
	);

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		print '<button id="'.$this->match.'"></button>';
		self::add($this);
	}

}
