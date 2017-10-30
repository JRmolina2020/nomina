<?php 
require '../../conexion.php';
$sel =$con->query("SELECT * FROM trabajador  ORDER BY idtrabajador DESC");
?>