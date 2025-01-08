<?php

return [

/*
|--------------------------------------------------------------------------
| Passport Guard
|--------------------------------------------------------------------------
|
| This option controls the default authentication guard that will be used
| while authenticating incoming API requests. You are free to modify
| this value as required.
|
*/

'guard' => 'api',

/*
|--------------------------------------------------------------------------
| Keys Path
|--------------------------------------------------------------------------
|
| This option allows you to specify the location of the private and public
| keys used to sign and verify access tokens. By default, Passport will
| look for these keys in the "storage/oauth" directory.
|
*/

'private_key' => env('PASSPORT_PRIVATE_KEY', storage_path('oauth-private.key')),
'public_key' => env('PASSPORT_PUBLIC_KEY', storage_path('oauth-public.key')),

/*
|--------------------------------------------------------------------------
| Client Uuids
|--------------------------------------------------------------------------
|
| This value enables the use of UUIDs for client IDs instead of auto-
| incrementing primary keys. This feature helps to keep your client IDs
| unique and non-guessable, adding an extra layer of security.
|
*/

'client_uuids' => false,

/*
|--------------------------------------------------------------------------
| Personal Access Client
|--------------------------------------------------------------------------
|
| The personal access client is used to generate tokens for personal use
| without requiring a client ID or secret key. You may change the client
| ID and secret here if needed.
|
*/

'personal_access_client' => [
    'id' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_ID'),
    'secret' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET'),
],

/*
|--------------------------------------------------------------------------
| Cache Expirations
|--------------------------------------------------------------------------
|
| Here you may define the number of minutes that tokens, clients, and
| scopes will be cached. If you want to disable caching, set it to null.
|
*/

'cache' => [
    'tokens' =>  null,
    'clients' => null,
    'scopes' => null,
],

];
