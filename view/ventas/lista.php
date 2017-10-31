
<?php 
include("../../crud/ventas/lista.php");
$data='
<br><br>
<h5>AUDITORIA DE VENTAS</h5>
<br>          
<table class="table table-hover">
<thead>
<tr>
<th>Cedula</th>
<th>Nombre</th>
<th>Tipo de empleado</th>
<th>Codigo venta</th>
<th>Descripcion</th>
<th>Valor</th>
<th>Fecha realizada</th>
<th>Comision</th>
<th>Modificar</th>
<th>Eliminar</th>
</tr>
</thead>
<tbody>
';
 while($fila = $sel->fetch_assoc()){     
$data .= '    
<tr>
<td>'.$fila['cedula'].'</td>
<td>'.$fila['nombre_e'].'</td>
<td>'.$fila['tipo_e'].'</td>
<td>'.$fila['codigo_v'].'</td>
<td>'. $fila['descrip'].'</td>
<td>'. $fila['valor_v'].'</td>
<td>'. $fila['fecha'].'</td>
<td>'. $fila['comision'] .'</td>
<td> <button type="button" Onclick=""  class="btn btn-primary btn-xs">MODIFICAR</button></td>
<td> <button type="button" onclick="DeleteV('.$fila['idventas'].')" class="btn btn-danger btn-xs">ELIMINAR</button></td>
</tr>
';
 }
 $data .= '    
</tbody>
</table>';
echo $data;
?>