<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paquetes SAGC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .header {
    padding: 20px;
    text-align: center;
    background: #337AB7;
    color: white;
    }
    .header h1 {
    font-size: 50px;
    }
  </style>
</head>
<body>
  <div class="header">
  <h1>Paquetes SAGC</h1>
  <p>Gestor de paquetes RG1390.</p>
</div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}">Paquetes SAGC</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ route('paquetes.index') }}">Paquetes</a></li>
        <li><a href="{{ route('recibos.index') }}">Recibos</a></li>
        <li><a href="{{ route('personas.index') }}">Personas</a></li>
        <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nuevo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('paquetes.create') }}">Cargar Paquete</a></li>
            <li><a href="{{ route('recibos.create') }}">Cargar Recibo</a></li>
            <li><a href="{{ route('personas.create') }}">Cargar Personas</a></li>
          </ul>
        </li> -->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Empresas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('empresas.index') }}">Agregar Empresa</a></li>
            <li><a href="{{ route('domicilios.index') }}">Agregar Domicilio</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistema<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('tiposRecibos.index') }}">Tipos de Recibos</a></li>
            <li><a href="{{ route('tiposEnvios.index') }}">Tipos de Envios</a></li>
            <li><a href="{{ route('servicios.index') }}">Tipos de Servicios</a></li>
            <li><a href="{{ route('localidades.index') }}">Localidades</a></li>
          </ul>
        </li>
        <li><a href="{{ route('reportes.index') }}">Reportes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
  	<div class="container">		

  		@yield("content")  	
  	
    </div>
</body>
<footer class="page-footer font-small cyan darken-3">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Gastón Nievas Inc.</a>
    </div>
    <!-- Copyright -->
</footer>
</html>