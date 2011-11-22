<?php
/**************************************************************************
 *
 * Copyright 2011 Marco Behnke <marco@behnke.biz>
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 **************************************************************************/

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
