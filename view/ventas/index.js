$(document).ready(function() {
$('#formuventa') .bootstrapValidator({
message: 'This value is not valid',
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
excluded: [':disabled'],
fields: {
codigo: {
message: 'el codigo no es valido por favor rectifique',
validators: {
notEmpty: {
message: 'el codigo de la venta es obligatoria ,no puede estar vacio.'
},
stringLength: {
min: 4,
max: 8,
message: 'Minimo 4 caracteres y Maximo 8 '
},
regexp: {
regexp: /^[a-zA-Z0-9_\.]+$/,
message: 'No se permiten espacios'
}
}
},

desc: {
message: 'La descripcion es obligatoria',
validators: {
notEmpty: {
message: 'La descripcion es obligatoria , no puede estar vacia'
},
stringLength: {
min: 3,
max: 100,
message: 'Minimo 3 caracteres y Maximo 15 '
}
}
},
}
})
.on('success.form.bv', function(e) {
e.preventDefault();
var f = $(this);
var formData = new FormData(document.getElementById("formuventa"));
formData.append("dato", "valor");
$.ajax({
url: "../../crud/empleado/insert.php",
type: "post",
dataType: "html",
data: formData,
cache: false,
contentType: false,
processData: false
})
.done(function(res){
swal(
'Usuario Registrado!',
'correctamente!',
'success'
)
$('#modalventas').modal('hide')
readRecordsVentas() 
$('#formuventa')[0].reset();
$('#formuventa').bootstrapValidator("resetForm",true); 
});
});

$('#modalventas')
.on('shown.bs.modal', function () {
$('#formuventa').find('[name="codigo"]').focus();
})
});

function readRecordsVentas() {
$.get("lista.php", {}, function (data, status) {
$(".lista_empleado").html(data);
});
}
// end delete
// delete from individual
function DeleteV(id) {
swal({
title: 'Deseas Eliminar el Registro?',
text: "Recueda,Una vez eliminado no se puede Recuperar",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si,Eliminarlo!'
}).then(function () {
$.post("../../crud/empleado/operaciones.php?p="+id+"&funcion=eliminar", {
id: id
},
function (data, status) {
readRecordsVentas() 
}
);
})
}
// end delete
$(document).ready(function () {
readRecordsVentas() 
});
