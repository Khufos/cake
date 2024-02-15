<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;


return static function (RouteBuilder $routes) {

$routes->setRouteClass(DashedRoute::class);

$routes->scope('/',function(RouteBuilder $routes){
    $routes->connect('/',['controller'=> 'Home','action'=>'index'])->setMethods(['get']);
    $routes->connect('/about',['controller' => 'About', 'action' =>'index'])->setMethods(['get']);
    $routes->get('/product/{id}',['controller'=>'Product','action'=> 'show'],'product.show')
    ->setPatterns(['id'=> '[0-9]+'])->setMethods(['get']);
});
   
$routes->connect('/clube/*',['controller' => 'Clube', 'aciton'=> 'index']);

// $routes->get('/',['controller' =>'Home', 'action'=> 'index'],'home.index');
// $routes->get('/about',['controller'=> 'About','action'=>'index'],'about.index');
// $routes->get('/product/{id}',['controller'=>'Product','action'=> 'show'],'product.show')->setPatterns(['id'=> '[0-9]+']);
$routes->scope('/admin',function(RouteBuilder $routes){
    $routes->connect('/',['controller' =>'Admin','action'=> 'index'],['_name' =>'admin.index'])->setMethods(['get']);
    $routes->connect('/users',['controller' =>'AdminUsers','action'=> 'users'],['_name' =>'adminusers.index'])->setMethods(['get']);
    $routes->connect('/users/{id}',['controller' => 'AdminUsers','action'=> 'show'],
    ['_name'=> 'adminusers.show','pass'=>['id'],'id'=> '[0-9]+'])->setMethods(['get']);
});

$routes->fallbacks();
};
