<?php

namespace biz\behnke\jquery\ui\helper;

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\Accordion
 */
function Accordion($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Accordion::getInstance($match, $scope);
}

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\Tabs
 */
function Tabs($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Tabs::getInstance($match, $scope);
}

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\DatePicker
 */
function DatePicker($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\DatePicker::getInstance($match, $scope);
}

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\Button
 */
function Button($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Button::getInstance($match, $scope);
}

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\Autocomplete
 */
function Autocomplete($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Autocomplete::getInstance($match, $scope);
}

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\Slider
 */
function Slider($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Slider::getInstance($match, $scope);
}

/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\Progressbar
 */
function Progressbar($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Progressbar::getInstance($match, $scope);
}


/**
 *
 * @param String $match
 * @param null $scope
 * @return \biz\behnke\jquery\ui\widgets\JCarousel
 */
function JCarousel($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\JCarousel::getInstance($match, $scope);
}
