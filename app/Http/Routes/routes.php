<?php

Route::group(['prefix' => 'sell'], function(){
    // Route::get('/',['as' => 'boleto.index', 'uses' => 'HomeController@index']);
    Route::get('/',['as' => 'boleto.exibir', 'uses' => 'Sell\SellController@index']);
	Route::post('/',['as' => 'boleto.validar', 'uses' => 'Sell\SellController@exibirSell'])->where('ident', '[0-9]+');
});