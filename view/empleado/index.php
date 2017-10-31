<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- boostrap validator -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<!-- swett alert 2 cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.common.min.js.map"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.common.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.css">
<!-- end alerts -->
<!-- end boostrap validator -->
<script src="index.js"></script>
<script src="../ventas/index.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">EMPRESA LTDA</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="#">Inicio</a></li>
<li><a href="index.php">Empleados</a></li>
<li><a href="../ventas/">Ventas</a></li>
<li><a href="#">Nomina</a></li>
</ul>
<button class="btn btn-danger navbar-btn">Salir</button>
</div>
</nav>

<div class="container">
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-x" data-toggle="modal" data-target="#modalempleado">Registrar empleadoss</button>
<!-- Modal -->
<div id="modalempleado" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">REGISTRAR EMPLEADOS</h4>
</div>
<div class="modal-body">
<form  action="../../crud/empleado/insert.php" method="POST" id="formuempleado" name="formuempleado"  enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="cedula">Cedula:</label>
<input type="text" class="form-control" id="cedula" name="cedula" onfocus>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="nombre">Nombre:</label>
<input type="text" class="form-control" id="nombre" name="nombre">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="apellido">Apellido:</label>
<input type="text" class="form-control" id="apellido" name="apellido">
</div>

</div>
<div class="col-lg-6">
<div class="form-group">
<label for="sexo">Sexo:</label>
<select class="form-control" id="sexo" name="sexo">
<option value="H">Hombre</option>
<option value="M">Mujer</option>
</select>
</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="tipo">Tipo:</label>
<select class="form-control" id="tipo" name="tipo" onclick="calcularsueldo()">
<option value="Asistente">Asistente</option>
<option value="De Planta">De Planta</option>
<option value="Administrador">Administrador</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="sueldo">Sueldo:</label>
<input type="text" class="form-control" id="sueldo" name="sueldo">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label for="foto">Perfil:</label>
<input type="file" class="form-control" id="foto" name="foto">
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary btn-xs">GUARDAR</button>
<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">SALIR</button>
</form>
</div>
</div>
</div>
</div>
<div class="lista_empleado"></div>
</div>

<!-- VENTAS DEL EMPLEADO -->
<div id="modalventas" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">REGISTRAR VENTAS</h4>
</div>
<div class="modal-body">
<form id="formuventa" name="formuventa" method="POST">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="cedula">Codigo venta:</label>
<input type="number" class="form-control" id="codigo" name="codigo" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="nombre">Descripcion:</label>
<input type="text" class="form-control" id="desc" name="desc" required>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="valor">Valor de venta</label>
<input type="number" class="form-control" onkeyup="calcularcomision()" id="valor" name="valor">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="apellido">Empleado</label>
<input type="text" class="form-control" id="empleado" name="empleado" disabled>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for="apellido">Tipo de empleado</label>
<input type="text" class="form-control" id="tipo2" name="tipo2" disabled>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="apellido">comision de venta</label>
<input type="text" class="form-control" id="comision" name="comision">
</div>
</div>
<input type="hidden"  id="idtrabajador" name="idtrabajador">
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary btn-xs">REALIZAR</button>
<input type="hidden" id="hidden_trabajador_id">
<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">SALIR</button>
</form>
</div>
</div>
</div>
</div>
<!-- END VENTAS -->


<script>
//validar sueldo del empleado a registrar
function calcularsueldo(){
var tipo=document.formuempleado.tipo.value;
var sueldo=document.formuempleado.sueldo.value;

var pago;

switch (tipo){
case('Asistente'):
pago =40.000;
var sueldo=document.formuempleado.sueldo.value=pago.toFixed(3);
break;
case('De Planta'):
pago =70.000;
var sueldo=document.formuempleado.sueldo.value=pago.toFixed(3);
break;
case('Administrador'):
pago =90.000;
var sueldo=document.formuempleado.sueldo.value=pago.toFixed(3);
break;
default:
alert('El nombre no corresponde a ningún protagonista de «Silent Hill»');
break;
} 
}   

//end validar sueldo del empleado a registrar
//validar comision por venta y por tipo de empleado
function calcularcomision(){
var tipoempleado=document.formuventa.tipo2.value;
var venta=document.formuventa.valor.value;
var comision;
var comisionfinal;

switch (tipoempleado){
case('Asistente'):
comision = venta * 0.10;
document.formuventa.comision.value=comision.toFixed(3);
break;
case('De Planta'):
comision = venta * 0.15;
document.formuventa.comision.value=comision.toFixed(3);
break;
case('Administrador'):
comision = venta * 0.20;
document.formuventa.comision.value=comision.toFixed(3);

if(venta > 100.000 ){
document.getElementById("comision").style.color = "blue";
}
else{
document.getElementById("comision").style.color = "red";	
}
break;
default:
alert('El nombre no corresponde a ningún protagonista de «Silent Hill»');
break;
} 

}
//emd validar comision
</script>

</body>
</html>
