<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function (RouteCollectorProxy $group) {
    $group->get('/hello', 'ApiHelloController:HelloAction');
    
    $group->get('/paggilnama/{nama}', 'ApiHelloController:PanggilNamaAction');

    $group->get('/product', 'ApiHelloController:GetProductsAction');

    $group->post('/products', 'ApiHelloController:CreateProductAction');
});