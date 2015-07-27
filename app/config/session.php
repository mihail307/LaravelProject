<?php

return array(

	

	'driver' => 'redis',

	

	'lifetime' => 120,

	

	'files' => storage_path().'/sessions',

	

	'connection' => null,

	

	'table' => 'sessions',

	

	'lottery' => array(2, 100),

	

	'cookie' => 'laravel_session',

	
	'path' => '/',


	'domain' => null,

);