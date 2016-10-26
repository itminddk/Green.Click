<?php

	ini_set("display_errors","off");

	define('API_KEY', '80693559f0d6b45f470590f51fbffc0c0be9e9a7');
	define('SUBJECT', 'Modtaget email fra website');
	define('SENDER_NAME', 'GreenClickMedia Website');
	define('SENDER_EMAIL', 'website@greenclickmedia.dk');
	define('RECIPIENT_NAME', 'GreenClickMedia Webmaster');
	define('RECIPIENT_EMAIL', 'info@greenclickmedia.dk');

	require 'vendor/autoload.php';
	use SparkPost\SparkPost;
	use Ivory\HttpAdapter\CurlHttpAdapter;

	$httpAdapter = new CurlHttpAdapter();
	$sparky = new SparkPost($httpAdapter, ['key'=> API_KEY ]);

	$htmlbody = nl2br(print_r($_POST,true));
	$plainbody = print_r($_POST,true);

	try {
		$results = $sparky->transmission->send([
			'from'=>[
				'name' => SENDER_NAME,
				'email' => SENDER_EMAIL,
			],
			'html'=> $htmlbody,
			'text'=> $plainbody,
			'subject'=> SUBJECT,
			'recipients'=>[
				[
					'address'=>[
						'name'=> RECIPIENT_NAME,
						'email'=>RECIPIENT_EMAIL,
					]
				]
			]
		]);
		echo 'OK';
	}
	catch (\Exception $err) {
		echo 'ERROR';
	}
