<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cookie Path
    |--------------------------------------------------------------------------
    |
    | The cookie path determines the path for which the cookie will be regarded
    | as available. Typically, this will be the root path of your application
    | but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used in your application.
    | This will determine which domains the cookie is available to in your
    | application. A sensible default has been set.
    |
    */

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, cookies will only be sent back to
    | the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    |
    */

    'secure' => false,

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | do not enable this as other CSRF protection services are in place.
    |
    | Supported: "lax", "strict"
    |
    */

    'same_site' => null,

];
