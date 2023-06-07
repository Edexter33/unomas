<?php
require_once (__DIR__.'/crest.php');

/*
$result = CRest::call(
		'imbot.message.add',
		['BOT_ID' => '', 'CLIENT_ID' => '', 'DIALOG_ID' => '1', 'MESSAGE' => 'Привет! Я чат-бот!', ]
	);

echo '<pre>';
	print_r($result);
echo '</pre>';

*/

/*
$result = CRest::call(
	'imbot.message.add',
	[
		'CODE' => 'newbot',
		'TYPE' => 'H',
		'EVENT_HANDLER' => 'https://restapi.bx24.net/lesson_13/handler.php',
		'PROPERTIES' => ['NAME' => 'NewBot123']
	]
);

3,
*/


echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
