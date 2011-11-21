<?php

namespace biz\behnke\jquery\ui\widgets;

use biz\behnke\jquery\ui\jQueryUI;
use biz\behnke\w3c\html\inline\Input;

/**
 * Description of DatePicker
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/datepicker/
 */
class DatePicker extends jQueryUI
{

	public function __construct($match, $scope = null)
	{
		parent::__construct($match, $scope = null);
		$this->type(Input::getInstance());
	}

}
