<?php
function jQuery($match)
{
	return new biz\behnke\jquery\jQuery($match);
}

/**
 * register our namespace auto-loader
 */
spl_autoload_register(function($class_name)
{
	$class_name = __DIR__.'/'.str_replace('\\', '/', $class_name).'.php';
	if (file_exists($class_name))
	{
		require_once $class_name;
	}
});
