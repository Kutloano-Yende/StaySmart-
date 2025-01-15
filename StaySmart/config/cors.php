<?php

return [

/*
|--------------------------------------------------------------------------
| Laravel CORS Options
|--------------------------------------------------------------------------
|
| The settings here are applied when responding to CORS requests.
|
*/
'paths' => ['api/*', 'sanctum/csrf-cookie'],
'allowed_methods' => ['*'],
'allowed_origins' => ['*'],
'allowed_headers' => ['*'],
'supports_credentials' => true,


'supports_credentials' => false,

'allowed_origins' => ['*'], // Specify your allowed domains here like ['https://example.com']

'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization'],

'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],

'exposed_headers' => ['Authorization'],

'max_age' => 0,

'allowed_origins_patterns' => [],
];
?>