<?php

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart'{id}, [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addTocart'
]);
