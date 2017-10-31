<?php 
require '../../conexion.php';
$sel =$con->query("SELECT * FROM trabajador inner join ventas on ventas.idtrabajador=trabajador.idtrabajador  ORDER BY idventas DESC");
?>