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

namespace biz\behnke\w3c\html\inline\helper;

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\inline\A
 */
function A($attributes = array())
{
	return \biz\behnke\w3c\html\inline\A::getInstance($attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\inline\Button
 */
function Button($attributes = array())
{
	return \biz\behnke\w3c\html\inline\Button::getInstance($attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\inline\Li
 */
function Li($attributes = array())
{
	return \biz\behnke\w3c\html\inline\Li::getInstance($attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\inline\Input
 */
function Input($attributes = array())
{
	return \biz\behnke\w3c\html\inline\Input::getInstance($attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\inline\Label
 */
function Label($attributes = array())
{
	return \biz\behnke\w3c\html\inline\Label::getInstance($attributes);
}
