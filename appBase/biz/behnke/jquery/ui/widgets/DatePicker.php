<?php
namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\ui\jQueryUI;

/**
 * Description of DatePicker
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://jqueryui.com/demos/datepicker/
 */
class DatePicker extends jQueryUI
{
	const CLASSNAME = 'biz\behnke\jquery\ui\widgets\DatePicker';
	const METHOD = 'datepicker';

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	public function renderUI()
	{
		print '<input type="text" id="'.$this->match.'" />';
		self::add($this);
	}

}
