<?php

namespace biz\behnke\jquery\ui\widgets;

use biz\behnke\jquery\ui\jQueryUI;
use biz\behnke\w3c\html\inline\Input;

/**
 * Description of Autocomplete
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/autocomplete/
 */
class Autocomplete extends jQueryUI
{

	protected $defConfig = array(
		'disabled' => false,
		'appendTo' => 'body',
		'autoFocus' => false,
		'delay' => 300,
		'minLength' => 1,
		'position' => array('my' => 'left top', 'at' => 'left bottom', 'collision' => 'none'),
		'source' => array(),
	);

	public function __construct($match, $scope = null)
	{
		parent::__construct($match, $scope = null);
		$this->type(Input::getInstance());
	}

}
