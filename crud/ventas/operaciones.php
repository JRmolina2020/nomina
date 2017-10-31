<?php 

include'../../conexion.php';
$funcion=$_REQUEST["funcion"];
$p=$_GET["p"];
if($funcion=="eliminarventa"){
$del =$con->query("DELETE FROM ventas WHERE idventas='$p'");
header("location:../../view/ventas/index.php");
}

?>