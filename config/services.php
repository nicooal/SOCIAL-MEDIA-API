<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

     'google' => [ //change it to any provider
        'client_id' => '658379441443-7bc8fpu5psonjivm3i8lekedkv9r2fpk.apps.googleusercontent.com',
        'client_secret' => 'gNEaWVqgS6OFIFwmyzqSu4Xj',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    
    'github' => [ //change it to any provider
        'client_id' => '871287bb56ae0f99fcb3',
        'client_secret' => 'be3109a31b449e09bc032359ffdc3633dd0bb0df',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],

    'twitter' => [ //change it to any provider
        'client_id' => '9N2mj0QGiqAksD8LiVRVFpQHN',
        'client_secret' => 'slH3yoKuLvQJHBcTgrm0aDaHvNW2ZoWpMOTOkuDSylqBMcCsWI',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

];
