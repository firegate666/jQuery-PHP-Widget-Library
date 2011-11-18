<?php
namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\ui\jQueryUI;

/**
 * Description of Progressbar
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/progressbar/
 */
class Progressbar extends jQueryUI {

	const METHOD = 'progressbar';

	protected $defConfig = array(

		'disabled' => false,
		'value' => 0,
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
