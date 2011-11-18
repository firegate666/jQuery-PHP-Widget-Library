<?php
namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\ui\jQueryUI;

/**
 * Description of Slider
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/slider/
 */
class Slider extends jQueryUI {

	const METHOD = 'slider';

	protected $defConfig = array(

		'disabled' => false,
		'animate' => false,
		'max' => 100,
		'min' => 0,
		'orientation' => 'horizontal',
		'range' => false,
		'step' => 1,
		'value' => 0,
		'values' => null,
	);

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		print '<div id="'.$this->match.'"></div>';
		self::add($this);
	}

}
