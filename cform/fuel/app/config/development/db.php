<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type' => 'mysqli',		
		'connection'  => array(
			'hostname' => '',
			'database' => '',
			'username' => '',
			'password' => '',
			'persistent' => false,
			'compress' => false,
		),
		'identifier' => '`',
		'table_prefix' => '',
		'charset' => 'utf8',
		'enable_cache' => true,
		'profiling' => false,
	),
);
