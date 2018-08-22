


<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                         USUARIOS <button data-toggle="modal" data-target="#new_user" class="btn bg-deep-purple waves-effect waves-light right"><i class="fa fa-user"></i> Nuevo Usuario</button>
                        </h2>
                   
                    </div>              
                </div>
                <div class="table-responsive">
                    <table class="table" id="tbl_users" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Contraseña</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="POST" id="frm_new_user" onsubmit="crear(event,this)">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <div class="form-line">
                    <input type="text" id="nombre" name="name" class="form-control" placeholder="Nombres" required>
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <div class="form-line">
                    <input type="text" id="apellidos" name="last_name" class="form-control" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <div class="form-line">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Correo" required>
                </div>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <div class="form-line">
                    <input type="number" id="telefono" name="phone" maxlength="10" minlength="10" min="0" class="form-control" placeholder="Telefono" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <div class="form-line">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn bg-cyan  waves-light">Guardar</button>
          </div>
        </div>
    </form>
  </div>
</div>


<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="POST" id="frm_edit_user" onsubmit="update(event,this)">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="">Nombre:</label>
                <div class="form-line">
                    <input type="text" id="nombre_edit" name="name" class="form-control" placeholder="Nombres" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Apellidos:</label>
                <div class="form-line">
                    <input type="text" id="apellidos_edit" name="last_name" class="form-control" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Correo:</label>
                <div class="form-line">
                    <input type="email" id="email_edit" name="email" class="form-control" placeholder="Correo" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Telefono:</label>
                <div class="form-line">
                    <input type="number" id="telefono_edit" name="phone" maxlength="10" minlength="10" min="0" class="form-control" placeholder="Telefono" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Contraseña:</label>
                <div class="form-line">
                    <input type="password" id="password_edit" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn bg-cyan waves-effect waves-light">Actualizar</button>
          </div>
        </div>
    </form>
  </div>
</div>


