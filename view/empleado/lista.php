
<?php 
include("../../crud/empleado/lista.php");
$data='
<br><br>
<h5>Empleados registrados</h5>
<br>          
<table class="table table-hover">
<thead>
<tr>
<th>Cedula</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Sexo</th>
<th>Tipo</th>
<th>Sueldo</th>
<th>Modificar</th>
<th>Eliminar</th>
<th>Ventas</th>
</tr>
</thead>
<tbody>
';
 while($fila = $sel->fetch_assoc()){     
$data .= '    
<tr>
<td>'.$fila['cedula'].'</td>
<td>'. $fila['nombre_e'].'</td>
<td>'. $fila['apellido_e'].'</td>
<td>'. $fila['sexo'] .'</td>
<td>'. $fila['tipo_e'] .'</td>
<td>'. $fila['sueldo'] .'</td>
<td> <button type="button" Onclick=""  class="btn btn-primary btn-xs">MODICIAR</button></td>
<td> <button type="button" onclick="DeleteE('.$fila['idtrabajador'].')"  class="btn btn-danger btn-xs">ELIMINAR</button></td>
<td>
<button type="button" onclick="Ventas('.$fila['idtrabajador'].')"  class="btn btn-primary btn-xs">Realizar</button>
</td>
</tr>
';
 }
 $data .= '    
</tbody>
</table>';
echo $data;
?>