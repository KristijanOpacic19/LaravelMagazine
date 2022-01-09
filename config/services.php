<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '1332381383912508',
        'client_secret' => 'cc9b2a14d9b58cf4ed5f5bbda8df00b6',
        'redirect' => 'http://localhost:8080/auth/facebook/callback',
    ],
        'google' => [
        'client_id' => '743435956968-3m3sqs6re87lrs4qrl6tdn3b6m16p9em.apps.googleusercontent.com',
        'client_secret' => 'NvXvaBx7NKgUaZmMku4y9ehJ',
        'redirect' => 'http://localhost:8080/auth/google/callback',
   ],

];
