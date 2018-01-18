<div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center" id="myModalLabel">Cadastro de Pessoa</h4>
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
					<button type="button" class="btn btn-success btn-block" ng-click="salvar()">Salvar</button>
				</div>
			</div>
		</div>