<?php
namespace biz\behnke\w3c\html\inline\helper;

function A($attributes = array())
{
	return \biz\behnke\w3c\html\inline\A::getInstance($attributes);
}

function Button($attributes = array())
{
	return \biz\behnke\w3c\html\inline\Button::getInstance($attributes);
}

function Input($attributes = array())
{
	return \biz\behnke\w3c\html\inline\Input::getInstance($attributes);
}
