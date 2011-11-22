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

namespace biz\behnke\w3c\html\blocklevel\helper;

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\Div
 */
function Div($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\Div::getInstance($attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\Ul
 */
function Ul($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\Ul::getInstance($attributes);
}

/**
 *
 * @param integer $level
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\H
 */
function H($level = 1, $attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance($level, $attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\H
 */
function H1($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(1, $attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\H
 */
function H2($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(2, $attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\H
 */
function H3($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(3, $attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\H
 */
function H4($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(4, $attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\H
 */
function H5($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(5, $attributes);
}

/**
 *
 * @param array $attributes
 * @return \biz\behnke\w3c\html\blocklevel\P
 */
function P($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\P::getInstance($attributes);
}
