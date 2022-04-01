<?php

    use MiladRahimi\PhpRouter\Router;

    $router->group(['prefix'=>'api'], function(Router $router){

        // api's
        $router->get('update-pmint', [Controllers\UpdatePmint::class, 'download_pmint']);
    });
    $router->get('update-pmint', [Controllers\UpdatePmint::class, 'download_pmint']);