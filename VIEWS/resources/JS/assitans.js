var dominio = '/registro_yair/';
$.extend($.fn.dataTable.defaults, {
    responsive: true,
    scrollY: 300,
    scrollX: true,
    scrollCollapse: true
});
function listarAsistentes() {
    tablaAsistentes = $('#tbl_assitans').dataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginacion y filtrado realizados por el servidor
        dom: "<'row'<'text-center ' <''B>>>" +
            "<'row'<'col-sm-6'><'col-sm-6'f>>" +
            "<'row'<'col-lg-12'tr>>" +
            "<'row'<'col-sm-5'><'col-sm-7'p>>",
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                className: 'btn btn-success',
                title: "Reporte de Invitados",
                exportOptions: {
                columns: [ 0, 1, 2, 3, 4, 5, 6,7,8 ]
                },
                titleAttr: 'Excel'
            },
            {
                extend: 'pdfHtml5',
                text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                className: 'btn btn-danger',
                title: "Reporte de Invitados",
                exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5, 6,7,8 ]
                },
                titleAttr: 'PDF'
            }
        ],

        "ajax":
        {
            url: dominio + 'controllers_ajax/assitans.php?op=listar',
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        // "columns":[
        // 	{"data":"0"},
        // 	{"data":"1"},
        // 	{"data":"2"},
        // 	{"data":"3"},
        // 	{"data":"4"},
        // 	{"data":"5"}
        // ],
        "language": idioma_español,
        "bDestroy": true,
        // "iDisplayLength": 25,//Paginacion
        "order": [[0, "asc"]]//Ordenar (columna,orden)
    }).DataTable();
}
listarAsistentes();

function crear_assitan(e, form) {
    e.preventDefault();
    datos = new FormData($(form)[0]);
    $.ajax({
        url: dominio + 'controllers_ajax/assitans.php?op=create',
        type: 'post',
        dataType: 'json',
        encode: true,
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            tablaAsistentes.ajax.reload();
            setTimeout(function () {
                if (data.success) {
                    $("#new_assitan").modal("hide");
                    swal({
                        position: 'top-end',
                        type: 'success',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 2500
                    })
                } else {
                    swal({
                        position: 'top-end',
                        type: 'error',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 2500
                    })
                }
            }, 500);
            $("#frm_new_assitan")[0].reset();
        }
    })
}



// edit
function edit_assitan(id) {
    $("#edit_assitan #frm_edit_assitan")[0].reset();
    $.post(dominio + 'controllers_ajax/assitans.php?op=edit', { id: id }, function (data) {
        /*optional stuff to do after success */
        data = JSON.parse(data);
        // console.log(data);
        $("#edit_assitan #id").val(data.id);
        $("#edit_assitan #nombre_edit").val(data.name);
        $("#edit_assitan #apellidos_edit").val(data.last_name);
        $("#edit_assitan #email_edit").val(data.email);
        $("#edit_assitan #telefono_edit").val(data.phone);
        $("#edit_assitan #gender_edit").val(data.gender);
        $("#edit_assitan #description_edit").val(data.description);
        $("#edit_assitan").modal('show');
    });
}

// Update
function update_assitan(e, form_upd) {
    e.preventDefault();
    datos = new FormData($(form_upd)[0]);
    $.ajax({
        url: dominio + 'controllers_ajax/assitans.php?op=update',
        type: 'post',
        dataType: 'json',
        encode: true,
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            tablaAsistentes.ajax.reload();
            setTimeout(function () {
                if (data.success) {
                    swal({
                        position: 'top-end',
                        type: 'success',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 2500
                    })
                } else {
                    swal({
                        position: 'top-end',
                        type: 'error',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 2500
                    })
                }
            }, 500);
            $("#frm_edit_assitan")[0].reset();
        }
    })
}

// Delete
function eliminar_assitan(id) {
    swal({
        title: 'Estas seguro de eliminar este Invitado?',
        text: "esta accion no se puede revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminarlo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $.post(dominio + 'controllers_ajax/assitans.php?op=delete', { id: id }, function (data) {
                /*optional stuff to do after success */
                data = JSON.parse(data);
                if (data.success) {
                    swal({
                        position: 'top-end',
                        type: 'success',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    tablaAsistentes.ajax.reload();
                } else {
                    swal({
                        position: 'top-end',
                        type: 'error',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        } else if (
            // Read more about handling dismissals
            result.dismiss === swal.DismissReason.cancel
        ) {
            // swal(
            //   'Cancelado',
            //   'Your imaginary file is safe :)',
            //   'error'
            // )
        }
    })
}


function states() {
    $.ajax({
        type: "POST",
        url: dominio + "controllers_ajax/assitans.php?op=procedencia",
        data: { estados: "Mexico" },
        success: function (data) {
            $("#estado").html(data);
            $("#estado").selectpicker('refresh');
            $("#estado_edit").html(data);
            $("#estado_edit").selectpicker('refresh');
        }
    }).done(function (data) {
        $("#estado").html(data);
        $("#estado").selectpicker('refresh');
        $("#estado_edit").html(data);
        $("#estado_edit").selectpicker('refresh');
    });
}
states();
// Obtener municipios
$("#estado").change(function () {
    var estado = $("#estado option:selected").val();
    $.ajax({
        type: "POST",
        url: dominio + "controllers_ajax/assitans.php?op=procedencia",
        data: { estado: estado }
    }).done(function (data) {
        $("#municipio").html(data);
        $("#municipio").selectpicker('refresh');
    });
});

$("#estado_edit").change(function () {
    var estado = $("#estado_edit option:selected").val();
    $.ajax({
        type: "POST",
        url: dominio + "controllers_ajax/assitans.php?op=procedencia",
        data: { estado: estado }
    }).done(function (data) {
        $("#municipio_edit").html(data);
        $("#municipio_edit").selectpicker('refresh');
    });
});