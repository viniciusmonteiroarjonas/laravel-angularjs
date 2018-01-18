'use strict';
var app = angular.module('cdg', ['angularUtils.directives.dirPagination'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
// Service
app.factory('pessoaService', function($http) {
    return {
        lista: function() {
            return $http.get('/api/pessoas');
        },
        cadastra: function(data) {
            return $http.post('/api/pessoas', data);
        },
        edita: function(data) {
            var id = data.id;
            delete data.id;
            return $http.put('/api/pessoa/' + id, data);
        },
        exclui: function(id) {
            return $http.delete('/api/pessoa/' + id)
        }
    }
});
// Controller
app.controller('pessoaController', function($scope, pessoaService) {
    $scope.listar = function() {
        pessoaService.lista().success(function(data) {
            $scope.pessoas = data;
        });
        $scope.ordenar = function(keyname) {
            $scope.sortKey = keyname;
            $scope.reverse = !$scope.reverse;
        };
    }
    $scope.editar = function(data) {
        $scope.pessoa = data;
        $('#editarModal').modal('show');
    }
    $scope.cadastro = function(data) {
        delete $scope.pessoa;
        $('#cadastroModal').modal('show');
    }
    $scope.salvar = function() {
        if ($scope.pessoa.id) {
            pessoaService.edita($scope.pessoa).success(function(res) {
                $('#editarModal').modal('hide');
                swal({
                    type: "success",
                    title: "Registro atualizado com sucesso !",
                    confirmButtonText: "Fechar",
                    timer: 5000
                });
                $scope.listar();
            });
        } else {
            pessoaService.cadastra($scope.pessoa).success(function(res) {
                $('#cadastroModal').modal('hide');
                swal({
                    type: "success",
                    title: "Cadastro realizado com sucesso !",
                    confirmButtonText: "Fechar",
                    timer: 5000
                });
                $scope.listar();
            });
        }
    }
    $scope.excluir = function(data) {
        swal({
            title: 'Deseja deletar este registro?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
               swal({
                    type: "success",
                    title: "Regsitro removido com sucesso !",
                    confirmButtonText: "Fechar",
                    timer: 5000
                });
                pessoaService.exclui(data.id).success(function(res) {
                    $scope.listar();
                });
            }
        })
    }
    /*
    $scope.excluir = function(data) {
        if (confirm("Tem certeza que deseja excluir?")) {
            pessoaService.exclui(data.id).success(function(res) {
                $scope.listar();
            });
        }
    }*/
});