<?php

$router->get('/', function () {
    view('index');
});

$router->get('docs-pmint', function () {
    view('docs-pmint/index');
});

include 'api.php';