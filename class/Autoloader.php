<?php

class Autoloader
{

	/* Utiliser au choix register() + autoload() ou sinon registerShort() */

	/*
	static function register()
	{
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	static function autoload($class_name)
	{
		require 'class/' . $class_name . '.php';
	}
	*/

	static function registerShort()
	{
		spl_autoload_register(function($class_name)
		{
			include 'class/' . $class_name . '.php';
		});
	}
}