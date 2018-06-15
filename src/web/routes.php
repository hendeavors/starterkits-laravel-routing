<?php

$router = $app['router'];

/*
 | ----------------------------------
 | Some basic Routing
 | ----------------------------------
 */
$router->any('/basic/home', function() {
    echo 'basic home'; die;
});

$router->any('basic/welcome', function() {
    echo 'basic welcome'; die;
});

/*
 |-----------------------------------
 | Some Controller routing
 |-----------------------------------
 */
$router->any('advanced/welcome', ['as' => 'advanced.welcome', 'uses' => '\Endeavors\StarterKits\LaravelRouting\Http\Controllers\HomeController@welcome']);
