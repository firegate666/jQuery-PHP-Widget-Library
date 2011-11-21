<?php

namespace biz\behnke\jquery\ui\widgets;

use biz\behnke\jquery\ui\jQueryUI;
use biz\behnke\w3c\html\inline\A;

/**
 * Description of Button
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/button/
 */
class Button extends jQueryUI
{

	protected $defConfig = array(
		'label' => 'My Button',
		'text' => true,
		'disabled' => false,
		'icons' => array('primary' => null, 'secondary' => null),
	);

	public function __construct($match, $scope = null)
	{
		parent::__construct($match, $scope = null);
		$this->type(A::getInstance());
	}

}
