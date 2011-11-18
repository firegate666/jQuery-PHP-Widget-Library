<?php
if (defined('DEBUG') && DEBUG)
{
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
}
else
{
	ini_set('display_errors', 'Off');
	error_reporting(E_ERROR);
}

use biz\behnke\jquery\jQuery;
require_once __DIR__.'/biz/Helper.php';

function jQuery($match, $scope = null)
{
	return new jQuery($match, $scope);
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
