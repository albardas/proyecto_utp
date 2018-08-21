    <section class="content">
        <div class="container-fluid">
          

            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Registro invitados especiales
                            </h2>
                       
                        </div>
                        <div class="body">
                            <form action="" method="post" onsubmit="saveSpecial(this);" autocomplete="off">
                                <label for="name">Nombre:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control" placeholder="" name="name">
                                    </div>
                                </div>
                                <label for="last_name">Apellidos:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="last_name" class="form-control" placeholder="" name="last_name">
                                    </div>
                                </div>
                                <label for="email">Correo electronico:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" class="form-control" placeholder="Enter your email address" name="email">
                                    </div>
                                </div>
                                <label for="phone">Telefono:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="phone" class="form-control" placeholder="555-555-55-55" name="phone">
                                    </div>
                                </div>
                                <label for="email_address">Genero:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="" id="" class="form-control">
                                            <option value=""></option>
                                            <option value="male">Hombre</option>
                                            <option value="fe-male">Mujer</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                
                                <label for="password">Contraseña:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">
                                    </div>
                                </div>

                                <input type="checkbox" id="remember_me" class="filled-in">
                                <label for="remember_me">Remember Me</label>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>