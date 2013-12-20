<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => '123456',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
	 'admin' => '7cb684805e2c6ffdaaa2bb4cd7d60c13f36cb48c20212e95a75bf90184fc19e4',
     'dima' => '86e822729b78fb193c1544845a1a529db985a70c69a902d96a95fc4678f8ba2c',
     'alex' => '86e822729b78fb193c1544845a1a529db985a70c69a902d96a95fc4678f8ba2c',
     'sveta' =>'434261d80587b4c4bf5ac3e84495142ada0f0051438780a9b2917513445c7221'
	),

);
