<!DOCTYPE html>
<html ng-app="cdg">
<head>
	<title>Cadastro de Pessoas</title>
	<link rel="stylesheet" type="text/css" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.css')}}">
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="{{asset('node_modules/jquery/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
	<!-- Bootstrap Select -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
	<!-- Angular -->
	<script type="text/javascript" src="node_modules/angular/angular.js"></script>
	<!-- App Bootstrap JS Laravel -->
	<script type="text/javascript" src="app/app.js"></script>
	<!-- Angular paginate -->
	<script src="app/dirPagination.js"></script>
  <!-- Sweet Alert -->
  <link rel="stylesheet" src="{{asset('node_modules/sweetalert2/dist/sweetalert2.css')}}">
  <script type="text/javascript" src="{{asset('node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>
</head>
<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Laravel + AngularJS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pessoas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/">Listagem</a></li>
                <li><a href="/cadastro/pessoas">Novo Cadastro</a></li>
              </ul>
            </li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<body ng-controller="pessoaController">
@yield('conteudo')
</body>
</html>
