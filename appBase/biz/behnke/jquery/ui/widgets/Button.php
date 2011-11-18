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
	const METHOD = 'button';

	/**
	 * button type
	 *
	 * @var \biz\behnke\w3c\html\Tag
	 */
	protected $type = null;

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

	/**
	 *
	 * @param \biz\behnke\w3c\html\Tag $type
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

		foreach ($this->attributes as $k => $v)
		{
			$this->type->attr($k, $v);
		}
		$this->type->attr('id', $this->match);
		print $this->type;

		self::add($this);
	}

}
