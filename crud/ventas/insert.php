<?php
include'../../conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$codigo=$con->real_escape_string(htmlentities($_POST['codigo']));
$desc=$con->real_escape_string(htmlentities($_POST['desc']));
$valor=$con->real_escape_string(htmlentities($_POST['valor']));
$comision=$con->real_escape_string(htmlentities($_POST['comision']));
$idtrabajador=$con->real_escape_string(htmlentities($_POST['idtrabajador']));

$ins=$con->query("INSERT INTO ventas VALUES('','$codigo','$desc','$valor',curdate(),'$comision','$idtrabajador')");
if($ins){
header("location:../../view/ventas/index.php");
}else{
}
$con->close();
}else{
header('location:../../view/src/404.html');
}
?>










