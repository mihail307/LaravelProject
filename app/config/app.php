<?php

return array(

	

	'debug' => false,


	'url' => 'http://localhost',


	'timezone' => 'UTC',


	'locale' => 'en',


	'key' => 'Z1WZbFcYTpupnFpm0PuiV1VRJlQrlRDX',


	'providers' => array(
		'Fideloper\Proxy\ProxyServiceProvider',
		
	),


	'manifest' => storage_path().'/meta',


	'aliases' => array(

		'Linkedin'        => 'League\OAuth2\Client\Provider\LinkedIn',
	),

);
