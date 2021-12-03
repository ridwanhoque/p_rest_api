<?php

use App\Http\Controllers\MyController;

$router->get('/', function() use($router){
    return $router->app->version();
});

// $router->get('/get', function () use ($router) {
//     return "I am get";
// });

// $router->post('/post', function() use($router){
//     return "I am post";
// });

// $router->put('/put', function() use($router){
//     return "I am put";
// });

// $router->delete('/delete', function() use($router){
//     return "I am delete ";
// });

//required parameter
$router->post('/name/{value}', function($value){
    return $value;
});

//optional parameter using []
$router->get('/user/{name}/{age}[/{city}]', function($name, $age, $city = null){
    return $name.$age.$city;
});


$router->get('/my/{name}', 'MyController@my');
$router->get('/jsonResponse', 'MyController@jsonResponse');
