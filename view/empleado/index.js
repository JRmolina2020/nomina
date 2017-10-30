$(document).ready(function() {
$('#formuempleado') .bootstrapValidator({
message: 'This value is not valid',
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
excluded: [':disabled'],
fields: {
cedula: {
message: 'La cedula  no es valida por favor rectifique',
validators: {
notEmpty: {
message: 'la cedula es obligatoria y no puede estar vacia.'
},
stringLength: {
min: 4,
max: 12,
message: 'Minimo 4 caracteres y Maximo 12 '
},
regexp: {
regexp: /^[a-zA-Z0-9_\.]+$/,
message: 'No se permiten espacios'
}
}
},

nombre: {
message: 'El nombre no es valido',
validators: {
notEmpty: {
message: 'El nombre es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 3,
max: 15,
message: 'Minimo 3 caracteres y Maximo 15 '
}
}
},
apellido: {
message: 'El apellido no es valido',
validators: {
notEmpty: {
message: 'El apellido es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 3,
max: 15,
message: 'Minimo 3 caracteres y Maximo 15 '
}
}
},
sueldo: {
message: 'El sueldo no es valido',
validators: {
notEmpty: {
message: 'El sueldo es obligatorio.'
},
stringLength: {
min: 3,
max: 7,
message: 'Minimo 3 caracteres y Maximo 7 '
}
}
},

}
})
.on('success.form.bv', function(e) {
e.preventDefault();
var f = $(this);
var formData = new FormData(document.getElementById("formuempleado"));
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
$('#modalempleado').modal('hide')
readRecords();
$('#formuempleado')[0].reset();
$('#formuempleado').bootstrapValidator("resetForm",true); 
});
});

$('#modalempleado')
.on('shown.bs.modal', function () {
$('#formuempleado').find('[name="cedula"]').focus();
})
});

function readRecords() {
$.get("lista.php", {}, function (data, status) {
$(".lista_empleado").html(data);
});
}
// end delete
// delete from individual
function DeleteE(id) {
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
readRecords();
}
);
})
}
// end delete
// end bloqueo
// mostrar datos individual de los trabajadores para la venta
function Ventas(id) {
$("#hidden_trabajador_id").val(id);
$.post("../../crud/ventas/alone_info.php", {
id: id
},
function (data, status) {
var dato = JSON.parse(data);
$("#empleado").val(dato.nombre_e);
$("#tipo2").val(dato.tipo_e);
$("#idtrabajador").val(dato.idtrabajador);
}
);
$("#modalventas").modal("show");
$('#modalventas')
.on('shown.bs.modal', function () {
$('#formuventa').find('[name="codigo"]').focus();
})
}
// end mostrar datos individual

$(document).ready(function () {
readRecords(); 
});
