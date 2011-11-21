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
