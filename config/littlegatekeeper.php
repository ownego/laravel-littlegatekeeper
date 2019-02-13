<?php

return [
    'enabled' => env('SITE_LOGIN_ENABLED', true),
    // Login credentials
    'username' => env('SITE_USERNAME', 'username'),
    'password' => env('SITE_PASSWORD', 'password'),

    // The key as which the littlegatekeeper session is stored
    'sessionKey' => 'littlegatekeeper.loggedin',

    // The route to which the middleware redirects if a user isn't authenticated
    'authRoute' => url('login'),
];
