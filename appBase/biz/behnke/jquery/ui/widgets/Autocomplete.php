<?php
namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\ui\jQueryUI;

/**
 * Description of Autocomplete
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/autocomplete/
 */
class Autocomplete extends jQueryUI {

	const METHOD = 'autocomplete';

	protected $defConfig = array(
		'disabled' => false,
		'appendTo' => 'body',
		'autoFocus' => false,
		'delay' => 300,
		'minLength' => 1,
		'position' => array('my' => 'left top', 'at' => 'left bottom', 'collision' => 'none' ),
		'source' => array(),
	);

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		print '<input id="'.$this->match.'" />';
		self::add($this);
	}

}
