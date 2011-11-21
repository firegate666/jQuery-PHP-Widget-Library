<?php

namespace biz\behnke\jquery\ui\widgets;
use biz\behnke\jquery\jQuery;

/**
 * Description of JCarousel
 *
 * @author Marco Behnke <marco@behnke.biz>
 * @see http://sorgalla.com/jcarousel/
 */
class JCarousel extends jQuery
{
	const METHOD = 'jcarousel';

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

	/**
	 * @see biz\behnke\jquery\jQuery#renderUI()
	 */
	function renderUI()
	{
		print sprintf('<ul %s id="%s">%s</ul>', $this->renderAttr(), $this->match, $this->renderInnerHtml());
		self::add($this);
	}

}
