var dominio = '/registro_yair/';
$.extend($.fn.dataTable.defaults, {
    responsive: true,
    scrollY: 300,
    scrollX: true,
    scrollCollapse: true
});
function listarUsuarios() {
    tablaUsuarios = $('#tbl_users').dataTable({
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
              title: "Reporte de Usuarios",
              exportOptions: {
              columns: [ 0, 1, 2, 3, 4 ]
              },
              titleAttr: 'Excel'
            },
            {
              extend: 'pdfHtml5',
              text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
              className: 'btn btn-danger',
              title: "Reporte de Usuarios",
              exportOptions: {
                columns: [ 0, 1, 2, 3, 4 ]
              },
              titleAttr: 'PDF'
            }
        ],

        "ajax":
        {
            url: dominio+'controllers_ajax/users.php?op=listar',
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
listarUsuarios();

function crear(e,form) {
  e.preventDefault();
  console.log('ejecuto');
  datos = new FormData($(form)[0]);
  $.ajax({
      url: dominio+'controllers_ajax/users.php?op=create',
      type: 'post',
      dataType: 'json',
      encode: true,
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {
        tablaUsuarios.ajax.reload();
          setTimeout(function(){
            if (data.success) {
              $("#new_user").modal("hide");
              swal({
                position: 'top-end',
                type: 'success',
                title: data.msg,
                showConfirmButton: false,
                timer: 2500
              })
            }else{
              swal({
                position: 'top-end',
                type: 'error',
                title: data.msg,
                showConfirmButton: false,
                timer: 2500
              })
            }
          },500);
          $("#frm_new_user")[0].reset();
      }
  })
}



// edit
function edit(id)
{
  $("#edit_user #frm_edit_user")[0].reset();
  $.post(dominio+'controllers_ajax/users.php?op=edit', {id: id}, function(data) {
    /*optional stuff to do after success */
      data = JSON.parse(data);
      // console.log(data);
      $("#edit_user #id").val(data.id);
      $("#edit_user #nombre_edit").val(data.name);
      $("#edit_user #apellidos_edit").val(data.last_name);
      $("#edit_user #email_edit").val(data.email);
      $("#edit_user #telefono_edit").val(data.phone);
      $("#edit_user #password_edit").val(data.password);
      $("#edit_user").modal('show');
  });
}

// Update
function update(e,form_upd) {
  e.preventDefault();
  datos = new FormData($(form_upd)[0]);
  $.ajax({
      url: dominio+'controllers_ajax/users.php?op=update',
      type: 'post',
      dataType: 'json',
      encode: true,
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {
        tablaUsuarios.ajax.reload();
          setTimeout(function(){
            if (data.success) {
              swal({
                position: 'top-end',
                type: 'success',
                title: data.msg,
                showConfirmButton: false,
                timer: 2500
              })
            }else{
              swal({
                position: 'top-end',
                type: 'error',
                title: data.msg,
                showConfirmButton: false,
                timer: 2500
              })
            }
          },500);
          $("#frm_edit_user")[0].reset();
      }
  })
}

// Delete
function eliminar(id)
{
      swal({
        title: 'Estas seguro de eliminar este Usuario?',
        text: "esta accion no se puede revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminarlo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          $.post(dominio+'controllers_ajax/users.php?op=delete', {id: id}, function(data) {
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
                  tablaUsuarios.ajax.reload();
                }else{
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

function login(e,frm_login) {
  e.preventDefault();
  datos = new FormData($(frm_login)[0])
  e.preventDefault();
  $.ajax({
      url: dominio+'controllers_ajax/users.php?op=login',
      type: 'post',
      dataType: 'json',
      encode: true,
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {
          setTimeout(function(){
            if (data.success) {
              // console.log(data);
              $(location).attr('href','./index.php');
            }else{
              swal({
                position: 'top-end',
                type: 'error',
                title: data.msg,
                showConfirmButton: false,
                timer: 2500
              })
            }
          },500);
      }
  })
}