<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

// para usar a classe DB

class PessoaController extends Controller {
	// Listando pessoas
	public function lista() {
		$dados = Pessoa::all();
		return response()->json($dados);
	}

	// Cadastrando Pessoa
	public function novo(Request $request) {
		$registro = $request->all();
		$dados = Pessoa::create($registro);
		return response($dados);
	}

	// Editando pessoas
	public function editar($id, Request $request) {
		$data = $request->all();
		$dados = Pessoa::find($id)->update($data);
		return ["status" => ($dados) ? 'ok' : 'erro'];
	}

	// Excluindo pessoa
	public function excluir($id) {
		$dados = Pessoa::find($id)->delete();
		return ["status" => ($dados) ? 'ok' : 'erro'];
	}
}
