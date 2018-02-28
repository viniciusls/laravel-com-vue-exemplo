<?php

// Routes prefix, version API
$this->group(['prefix' => 'v1'], function() {

    // Rota de autenticação
    $this->post('auth', 'Auth\ApiLoginController@authenticate');

    // Retorna o usuário autenticado pelo token
    $this->get('me', 'Auth\ApiLoginController@getAuthenticatedUser');

    // API Products
	$this->apiResource('products', 'Api\v1\ProductController');
   
});