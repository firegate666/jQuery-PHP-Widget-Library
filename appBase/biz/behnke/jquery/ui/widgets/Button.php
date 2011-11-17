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

	const TYPE_BUTTON = 0;
	const TYPE_INPUT = 1;
	const TYPE_LINK = 2;

	/**
	 * button type
	 *
	 * @var integer
	 */
	protected $type = self::TYPE_BUTTON;

	protected $defConfig = array(
		'label' => 'My Button',
		'text' => true,
		'disabled' => false,
		'icons' => array('primary' => null, 'secondary' => null),
		'href' => '', /** @todo move to view/layouts someday */
		'value' => '', /** @todo move to view/layouts someday */
	);

	/**
	 *
	 * @param String $type
	 * @return Button
	 */
	public function type($type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		switch ($this->type)
		{
			case self::TYPE_INPUT:
				print '<input id="'.$this->match.'" />';
				break;
			case self::TYPE_LINK:
				print '<a href="'.$this->config->href.'" id="'.$this->match.'"></a>';
				break;
			case self::TYPE_BUTTON:
			default:
				print '<button id="'.$this->match.'"></button>';
				break;
		}
		self::add($this);
	}

}
