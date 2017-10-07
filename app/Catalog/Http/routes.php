<?php

Route::group(['middleware' => 'web', 'prefix' => 'catalog', 'namespace' => 'App\Catalog\Http\Controllers'], function()
{
    Route::get('/', 'CatalogController@index');
});
