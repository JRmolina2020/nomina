<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="index.js"></script>
<?php include'../../conexion.php';?>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">EMPRESA LTDA</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="#">Inicio</a></li>
<li><a href="../empleado/index.php">Empleados</a></li>
<li><a href="index.php">Ventas</a></li>
<li><a href="#">Nomina</a></li>
</ul>
<button class="btn btn-danger navbar-btn">Salir</button>
</div>
</nav>

<div class="container">
<?php  include'lista.php';?>
</div>
</body>
</html>
