<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
 */

Route::get('/', function () {
	return view('index');
});

Route::group(['prefix' => 'api'], function () {
	Route::get('pessoas', 'PessoaController@lista');
	Route::post('pessoas', 'PessoaController@novo');
	Route::put('pessoa/{id}', 'PessoaController@editar');
	Route::delete('pessoa/{id}', 'PessoaController@excluir');
});