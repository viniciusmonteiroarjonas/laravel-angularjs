@extends('layout/site')
	@section('conteudo')
<div class="container" ng-init="listar()">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <hr>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary" type="button" ng-click="cadastro(pessoa)">
                    <i class="fa fa-plus"></i>
                    Novo Registro
                </button>
                <button class="btn btn-default" type="button">
                    <i aria-hidden="true" class="fa fa-file-excel-o"></i>
                </button>
                <button class="btn btn-default" type="button">
                    <i aria-hidden="true" class="fa fa-file-pdf-o"></i>
                </button>
            </div>
            <div align="right" class="col-md-6 form-inline">
                <label>Buscar:</label>
                <input class="form-control" ng-model="pesquisar">
                </input>
            </div>
        </div>
        <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th ng-click="ordenar('nome')">Nome</th>
                                <th>E-mail</th>
                                <th>Login</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr dir-paginate="pessoa in pessoas | filter: pesquisar | itemsPerPage: 5 | orderBy:sortKey:reverse">
                                <td><%pessoa.id%></td>
                                <td><%pessoa.nome%></td>
                                <td><%pessoa.email%></td>
                                <td><%pessoa.login%></td>
                                <td ng-if="pessoa.status == '1'">
                                    <span class="label label-success">Ativo</span>
                                </td>
                                <td ng-if="pessoa.status == '0'">
                                    <span class="label label-danger">Inativo</span>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-xs">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-xs" ng-click="editar(pessoa)">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-default btn-xs" ng-click="excluir(pessoa)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                <!-- Se não houver nenhum regsitro na tabela -->
                                <tr ng-if="pessoas.length == 0">
                                    <td class="text-center" colspan="5">
                                        Nenhum Registro encontrado
                                    </td>
                                </tr>
                            </tr>
                        </tbody>
                    </table>
                    <dir-pagination-controls boundary-links="true" direction-links="true">
                    </dir-pagination-controls>
                </div>
            </div>
        </hr>
    </hr>
</div>
<!-- Cadastro Modal -->
<div class="modal fade" id="cadastroModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
                <h4 class="modal-title text-center">
                    Cadastro de  Pessoa
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>
                        Nome:
                    </label>
                    <input class="form-control" ng-model="pessoa.nome" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        E-mail:
                    </label>
                    <input class="form-control" ng-model="pessoa.email" type="email">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        Login:
                    </label>
                    <input class="form-control" ng-model="pessoa.login" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        Status:
                    </label>
                    <select class="form-control" ng-model="pessoa.status">
                        <option value="1">
                            Ativo
                        </option>
                        <option value="0">
                            Inativo
                        </option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-block" ng-click="salvar()" type="button">
                    Salvar
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Editar Modal -->
<div class="modal fade" id="editarModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
                <h4 class="modal-title text-center">
                    Editar Pessoa
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>
                        Nome:
                    </label>
                    <input class="form-control" ng-model="pessoa.nome" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        E-mail:
                    </label>
                    <input class="form-control" ng-model="pessoa.email" type="email">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        Login:
                    </label>
                    <input class="form-control" ng-model="pessoa.login" type="text">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        Status:
                    </label>
                    <select class="form-control" ng-model="pessoa.status">
                        <option value="1">
                            Ativo
                        </option>
                        <option value="0">
                            Inativo
                        </option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-block" ng-click="salvar()" type="button">
                    Atualizar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
