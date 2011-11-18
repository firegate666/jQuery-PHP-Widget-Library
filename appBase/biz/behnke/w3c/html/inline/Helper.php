<?php

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
