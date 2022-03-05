
      <div class="global-container">
        <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Registrarse</h3>
            <div class="card-text">
               
                <form>
                    <div class="form-group">
                      <label for="nombre">Nombre:</label>
                      <div class="input group">
                        <div class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Ingrese nombre" id="nombre" name="txtNombre">
                    </div>
                   
                    <div class="form-group">
                      <label for="email">Correo electronico</label>
                      <input type="email" class="form-control "placeholder="Ingrese correo" id="email" name="txtEmail" >
                    </div>
                    <div class="form-group">
                      <label for="pwd">Contraseña</label>
                        
                      <input type="password" class="form-control" placeholder="Ingrese la contraseña" id="pwd" name="txtPassword">
                    </div>


                    <?php 
                    //metodo no estatico
                    //$registro = new ControladorFormularios();
                    //$registro -> ctrRegistro();

                    //metodo estatico
                    $registro = ControladorFormularios::ctrRegistro();
                    //echo $registro;
                    if ($registro == "ok") {

                      echo '<script>
                          if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                          }
                          </script>;';
                      echo '<div class alert alert-success">El usuario ha sido registrado</div>';
                    }
                    
                    ?>

                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                    
                      <div class="sign-up">
                       Ya tienes cuenta? <a href="#"> Iniciar sesion</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
