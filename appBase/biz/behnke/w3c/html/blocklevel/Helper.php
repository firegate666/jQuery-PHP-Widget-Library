<?php

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
