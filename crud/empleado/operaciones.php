<?php 

include'../../conexion.php';
$funcion=$_REQUEST["funcion"];
$p=$_GET["p"];
if($funcion=="eliminar"){
$del =$con->query("DELETE FROM trabajador WHERE idtrabajador='$p'");
header("location:../../view/empleado/index.php");
}

?>