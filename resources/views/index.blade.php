<!DOCTYPE html>
<html ng-app="cdg">
<head>
	<title>Cadastro de Pessoas</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="node_modules/jquery/jquery.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<!-- Bootstrap Select -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
	<!-- Angular -->
	<script type="text/javascript" src="node_modules/angular/angular.js"></script>
	<!-- App Bootstrap JS Laravel -->
	<script type="text/javascript" src="app/app.js"></script>
	<!-- Angular paginate -->
	<script src="app/dirPagination.js"></script>
</head>
<body ng-controller="pessoaController">
	<div class="container" ng-init="listar()">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-plus"></i> Novo Registro
			</button>
				<button type="button" class="btn btn-default">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
			</button>
			<button type="button" class="btn btn-default">
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
			</button>
			</div>
			<div align="right" class="col-md-6 form-inline">
				<label>Buscar:</label>
				<input class="form-control" ng-model="pesquisar">
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
							<td ng-if="pessoa.status == '1'"><span class="label label-success">Ativo</span></td>
							<td ng-if="pessoa.status == '0'"><span class="label label-danger">Inativo</span></td>
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
			                    <td colspan="5" class="text-center">Nenhum Registro encontrado</td>
			                </tr>
						</tr>
					</tbody>
				</table>
				<dir-pagination-controls
					boundary-links="true"
					direction-links="true" >
				</dir-pagination-controls>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Cadastro de Pessoa</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nome:</label>
						<input type="text" class="form-control" ng-model="pessoa.nome">
					</div>
					<div class="form-group">
						<label>E-mail:</label>
						<input type="email" class="form-control" ng-model="pessoa.email">
					</div>
					<div class="form-group">
						<label>Login:</label>
						<input type="text" class="form-control" ng-model="pessoa.login">
					</div>
					<div class="form-group">
						<label>Status:</label>
						<select class="form-control" ng-model="pessoa.status">
							<option value="1">Ativo</option>
							<option value="0">Inativo</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" ng-click="pessoa = {}">Cancelar</button>
					<button type="button" class="btn btn-primary" ng-click="salvar()">Salvar</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
