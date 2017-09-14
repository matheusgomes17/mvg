<?php

return [

	'foreign_key' => 'user_id',
	'reference' => 'id',
	'table' => 'users',
	'password_resets_table' => 'password_resets',

	'accounts' => [
		'foreign_key' => 'account_id',
		'reference' => 'id',
		'table' => 'accounts',
	],
];