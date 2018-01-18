<?php
/*
|--------------------------------------------------------------------------
| SITE
|--------------------------------------------------------------------------
 */

//Listagem de Pessoas
Route::get('/', function () {
	return view('web/pessoa/index');
});
Route::get('cadastro/pessoas', function () {
	return view('web/pessoa/cadastro');
});

/*
|--------------------------------------------------------------------------
| API
|--------------------------------------------------------------------------
 */
Route::group(['prefix' => 'api'], function () {
	Route::get('pessoas', 'PessoaController@lista');
	Route::post('pessoas', 'PessoaController@novo');
	Route::put('pessoa/{id}', 'PessoaController@editar');
	Route::delete('pessoa/{id}', 'PessoaController@excluir');
});