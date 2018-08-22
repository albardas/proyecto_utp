<section class="content">
    <div class="container-fluid">        
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            registro de asistentes <button data-toggle="modal" data-target="#new_assitan" class="btn bg-blue waves-effect waves-light right">+ Invitado</button>
                        </h2>
                    
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_assitans" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Sexo</th>
                                        <th>Procedencia</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Descripcion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="new_assitan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="POST" id="frm_new_assitan" onsubmit="crear_assitan(event,this)">
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
                <label for="gender">Sexo:</label>
                <div class="form-line">
                    <select name="gender" id="gender" class="form-control selectpicker" title="Sexo">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="estado">Estado:</label>
                <div class="form-line">
                    <select name="estado" id="estado" class="form-control selectpicker" data-live-search="true" title="Estado">
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="municipio">Municipio:</label>
                <div class="form-line">
                    <select name="municipio" id="municipio" class="form-control selectpicker" data-live-search="true" title="Municipio">
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label for="description">Descripcion (Opcional):</label>
                <div class="form-line">
                    <textarea name="description" id="description" class="form-control" placeholder="Descripcion aqui"></textarea>
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


<div class="modal fade" id="edit_assitan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="POST" id="frm_edit_assitan" onsubmit="update_assitan(event,this)">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Editar Invitado</h4>
          </div>
          <div class="modal-body">
          <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label>Nombre:</label>
                <div class="form-line">
                    <input type="text" id="nombre_edit" name="name" class="form-control" placeholder="Nombres" required>
                </div>
            </div>
            <div class="form-group">
                <label>Apellidos:</label>
                <div class="form-line">
                    <input type="text" id="apellidos_edit" name="last_name" class="form-control" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="form-group">
                <label>Correo:</label>
                <div class="form-line">
                    <input type="email" id="email_edit" name="email" class="form-control" placeholder="Correo" required>
                </div>
            </div>
            <div class="form-group">
                <label>Telefono:</label>
                <div class="form-line">
                    <input type="number" id="telefono_edit" name="phone" maxlength="10" minlength="10" min="0" class="form-control" placeholder="Telefono" required>
                </div>
            </div>
            <div class="form-group">
                <label>Sexo:</label>
                <div class="form-line">
                    <select name="gender" id="gender_edit" class="form-control selectpicker" title="Sexo">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label>Estado:</label>
                <div class="form-line">
                    <select name="estado" id="estado_edit" class="form-control selectpicker" data-live-search="true" title="Estado">
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label>Municipio:</label>
                <div class="form-line">
                    <select name="municipio" id="municipio_edit" class="form-control selectpicker" data-live-search="true" title="Municipio">
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label>Descripcion (Opcional):</label>
                <div class="form-line">
                    <textarea name="description" id="description_edit" class="form-control" placeholder="Descripcion aqui"></textarea>
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