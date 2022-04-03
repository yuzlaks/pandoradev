<?php

    use MiladRahimi\PhpRouter\Router;

    $router->group(['prefix'=>'api'], function(Router $router){

        // api's
        $router->get('update-pmint', [Controllers\UpdatePmint::class, 'download_pmint']);
        $router->get('get-command', [Controllers\UpdatePmint::class, 'download_command']);
        $router->get('users', [Controllers\Api::class, 'index']);
    });