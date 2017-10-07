<?php

Route::group(['middleware' => 'web', 'prefix' => 'system', 'namespace' => 'App\System\Http\Controllers'], function()
{
    Route::get('/', 'SystemController@index');
});
