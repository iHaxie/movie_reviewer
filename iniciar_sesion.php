<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
    <h2>Iniciar sesión</h2>
        <form id="iniciarSesion" class="iniciarSesion" action="index.html" method="post">
            <div id="datos_iniciar" class="registro caja clearfix">
               <!--.zona de usuarios-->
                <div class="campo">
                    <label for="user">usuario:</label><br>
                    <input  size="25" type="text" id="usuario" name="usuario" placeholder="Ingresa tu nickname o email"/>
               </div>
               <!--.zona de contraseña-->
                <div class="campo">
                    <label for="user">contraseña:</label><br>
                    <input size="25" type="text" name="usuario" placeholder="Ingresa tu contraseña"/>
               </div>
               <!--.zona del boton-->
               <div class="campo">
                   <input type="button" id="btnIniciar" class="button hollow" value="Iniciar sesión"/>
               </div>
            </div>
        </form>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>
