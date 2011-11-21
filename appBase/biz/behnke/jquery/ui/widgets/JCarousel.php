<?php

namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\jQuery;
use biz\behnke\w3c\html\blocklevel\Ul;

/**
 * Description of JCarousel
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://sorgalla.com/jcarousel/
 */
class JCarousel extends jQuery
{

	protected $defConfig = array(
		'vertical' => false,
		'rtl' => false,
		'start' => 1,
		'offset' => 1,
		'size' => null,
		'scroll' => 3,
		'visible' => null,
		'animation' => 'fast',
		'easing' => null,
		'auto' => 0,
		'wrap'=> null,
		'initCallback' => null,
		'setupCallback' => null,
		'itemLoadCallback' => null,
		'itemFirstInCallback' => null,
		'itemFirstOutCallback' => null,
		'itemLastInCallback' => null,
		'itemLastOutCallback' => null,
		'itemVisibleInCallback' => null,
		'itemVisibleOutCallback' => null,
		'animationStepCallback' => null,
		'buttonNextCallback' => null,
		'buttonPrevCallback' => null,
		'buttonNextHTML' => '<div></div>',
		'buttonPrevHTML' => '<div></div>',
		'buttonNextEvent' => 'click',
		'buttonPrevEvent' => 'click',
		'itemFallbackDimension' => null,
	);

	public function __construct($match, $scope = null)
	{
		parent::__construct($match, $scope = null);
		$this->type(Ul::getInstance());
	}

}
