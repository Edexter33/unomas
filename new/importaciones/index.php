<?php
require_once (__DIR__.'/crest.php');

$result = CRest::call(
	'crm.contact.add',
	[
		'FIELDS' => [
			'NAME' => 'Gerard',
			'LAST_NAME' => 'Butler',
			'EMAIL' => ['0' => ['VALUE' => 'mail@example.com', 'VALUE_TYPE' => 'WORK', ], ],
			'PHONE' => ['0' => ['VALUE' => 'mail@example.com', 'VALUE_TYPE' => 'WORK', ], ],
		],
	]
);

echo '<pre>';
	print_r($result);
echo '</pre>';