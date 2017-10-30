<?php
include'../../conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$cedula=$con->real_escape_string(htmlentities($_POST['cedula']));
$nombre=$con->real_escape_string(htmlentities($_POST['nombre']));
$apellido=$con->real_escape_string(htmlentities($_POST['apellido']));
$sexo=$con->real_escape_string(htmlentities($_POST['sexo']));
$tipo=$con->real_escape_string(htmlentities($_POST['tipo']));
$sueldo=$con->real_escape_string(htmlentities($_POST['sueldo']));
//foto
$extension='';
$ruta='../../view/fotos/';
$archivo=$_FILES['foto']['tmp_name'];
$nombrearchivo=$_FILES['foto']['name'];
$info=pathinfo($nombrearchivo); 
if($archivo !=''){
$extension =$info['extension'];
if($extension =="png"||$extension=="PNG"||$extension=="jpg"||$extension=="JPG"){
move_uploaded_file($archivo,'../../view/fotos/'.$cedula.'.'.$extension);
$ruta=$ruta."/".$cedula.'.'.$extension;
}else{
header('location:../../view/componentes/alert/alerta_error.php');
}
}else{
$ruta="../../view/fotos/avatar.png";	
}
$ins=$con->query("INSERT INTO trabajador VALUES('','$cedula','$nombre','$apellido','$sexo','$tipo','$sueldo','$ruta')");
if($ins){
header("location:../../view/empleado/index.php");
}else{

}
$con->close();
}else{
header('location:../../view/src/404.html');
}
?>










