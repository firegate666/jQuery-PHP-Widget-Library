<?php
namespace biz\behnke\w3c\html\blocklevel\helper;

function Div($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\Div::getInstance($attributes);
}

function Ul($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\Ul::getInstance($attributes);
}

function H($level = 1, $attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance($level, $attributes);
}

function H1($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(1, $attributes);
}

function H2($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(2, $attributes);
}

function H3($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(3, $attributes);
}

function H4($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(4, $attributes);
}

function H5($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\H::getInstance(5, $attributes);
}

function P($attributes = array())
{
	return \biz\behnke\w3c\html\blocklevel\P::getInstance($attributes);
}
