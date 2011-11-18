<?php
namespace biz\behnke\jquery\ui\helper;

function Accordion($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Accordion::getInstance($match, $scope);
}

function DatePicker($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\DatePicker::getInstance($match, $scope);
}

function Button($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Button::getInstance($match, $scope);
}

function Autocomplete($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Autocomplete::getInstance($match, $scope);
}

function Slider($match, $scope = null)
{
	return \biz\behnke\jquery\ui\widgets\Slider::getInstance($match, $scope);
}
