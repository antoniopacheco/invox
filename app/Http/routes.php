<?php

Route::get('/', function () {
    return view('welcome');
});

$api = app('api.router');

$api->version('v1', function($api) {
    $api->get('encuestas', function() {
        return ['encuestas' => 'Todas las encuestas'];
    });
});

//v1 es default si quiere ver api v2 hay que enviar headers:
//Accept: application/vmd.invox.v2+json 

//app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('encuestas');c

