<?php

file_put_contents(
	'tmp/' . time() . '_' . rand(1, 9999) . '.txt',
	var_export(
		[
			'request' => $_REQUEST

		],
		true
	)
);


include_once('crest.php');

if(
	!empty($_REQUEST) &&
	in_array($_REQUEST['event'], ['ONIMBOTJOINCHAT', 'ONIMBOTMESSAGEADD'])
)
{

	// $dir = $_SERVER['DOCUMENT_ROOT'] . __DIR__ . '/tmp/'; try this depending on your server configuration
	$dir = 'tmp/';

	if(!file_exists($dir))
	{
		echo 'create: '.mkdir($dir, 0777, true);
	}

	// save event to log
	file_put_contents(
		$dir . time() . '_' . rand(1, 9999) . '.txt',
		var_export(
			[
				'request' =>
					[
						'event' => $_REQUEST['event'],
						'data' => $_REQUEST['data'],
						'ts' => $_REQUEST['ts'],
						'auth' => $_REQUEST['auth'],
					]
			],
			true
		)
	);

	// answer to user
	$result = CRest::call(
		'imbot.message.add',
		[
			'BOT_ID' => '303',  // insert yours!
			'CLIENT_ID' => '5yqk31vfadw29j8p1do5ueu2r2lqfe2k', // insert yours!
			'DIALOG_ID' => $_REQUEST['data']['PARAMS']['DIALOG_ID'],
			'MESSAGE' => "reply: '".$_REQUEST['data']['PARAMS']['MESSAGE']."'"
		]
	);



}
