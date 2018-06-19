<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Service Exports
    |--------------------------------------------------------------------------
    |
    | We can define interfaces to be exported here. We need to provide an
    | interface and its concrete implementation class. The Homer will bind
    | them. When the client calls the interface, it will automatically proxy
    | to the bound instance.
    |
    */

    'services' => [
        [
            'interface' => App\Services\EchoServiceInterface::class,
            'refer'     => App\Services\EchoService::class
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Client Configurations
    |--------------------------------------------------------------------------
    |
    | If multiple services are referenced by the same server, we can define
    | the address of the server through the configurations here. This can help
    | us to achieve the consistency of the call.
    |
    */

    'clients' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Service References
    |--------------------------------------------------------------------------
    |
    | Here we can reference the remote service. After we reference the remote
    | service, the Homer will register the remote service's call proxy in the
    | container. We can get it from the container through the interface.
    |
    */

    'references' => [
        [
            'interface' => App\Services\EchoServiceInterface::class,
            'url'       => 'whisper://127.0.0.1:8081',
            // 'url'    => 'http://127.0.0.1:8082'
        ],
    ],

];
