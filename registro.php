<?php include_once 'includes/templates/header.php'; ?>

 a
      <form id="registro" class="registro" action="validar_registro.php" method="post">
        <div id="datos_usuario" class="registro caja clearfix">

          <div class="campo">
            <label for="nickname">Nickname: </label>
            <div class="tooltip"><i class="far fa-question-circle"></i>
              <span class="tooltiptext">Solamentes letras y números</span>
            </div><br>
            <input size="32" type="text" id="nickname" name="nickname" placeholder="Ingresa tu nickname"
            required pattern="^[a-z\d_]{4,15}$"
            />
            <i class="fa fa-check check-ok"></i>
          </div>

          <div class="campo">
            <label for="contraseña">Contraseña: </label>
            <div class="tooltip"><i class="far fa-question-circle"></i>
              <span class="tooltiptext">La contraseña solamente debe de tener letras seguida de números.</span>
            </div><br>
            <input size="32" type="password" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña"
            required pattern="[A-Za-z0-9!?-]{8,12}"/>
            <i class="fa fa-check check-ok"></i>
          </div>

          <div class="campo">
            <label for="nombre">Nombre: </label>
            <div class="tooltip"><i class="far fa-question-circle"></i>
              <span class="tooltiptext">Debe de tener letras unicamente</span>
            </div><br>
            <input size="32" type="text" id="nombre" name="nombre" placeholder="tu nombre, ejemplo: 'Juan Gonzalo'"
            required pattern="^[a-z\d_]{4,15}$"
            />
            <i class="fa fa-check check-ok"></i>
          </div>

          <div class="campo">
            <label for="apellido">Apellido: </label> 
            <div class="tooltip"><i class="far fa-question-circle"></i>
              <span class="tooltiptext">Debe de tener letras unicamente </span>
            </div><br>
            <input size="32" type="text" id="apellido" name="apellido" placeholder="tu apellido, ejemplo: 'Utrera Martinez'"
            required pattern="^[a-z\d_]{4,15}$"
              />
            <i class="fa fa-check check-ok"></i>
          </div>

          <div class="campo">
            <label for="email">Email: </label>
            <div class="tooltip"><i class="far fa-question-circle"></i>
              <span class="tooltiptext">Debe de seguir el un formato convencional, Ejemplo: example@example.com</span>
            </div><br>
            <input size="32" type="email" id="email" name="email" placeholder="Wakzi@ejemplo.com"
              pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"
              required />
            <i class="fa fa-check check-ok"></i>
          </div>
          <div class="campo">
            <input type="submit" name="submit" id="btnRegistra" class="button hollow" value="Registrase">
          </div>
          <div id="error"></div>
        </div>
        <!--.Datos Usuarios -->
      </form>


      <?php include_once 'includes/templates/footer.php'; ?>