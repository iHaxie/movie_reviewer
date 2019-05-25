<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor clearfix">
      <h2> Bienvenido/a <?php echo $nickname;?></h2>
      <?php 

        
        if(isset($_POST['submit'])){

            /* Sección de Variables */
        $nickname   = $_POST['nickname'];
        $contraseña = $_POST['contraseña'];
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];
        $email      = $_POST['email'];
        $feRegis    = date("Y-m-d H:i:s");

            /* Conexión BD */
         require_once 'includes/funciones/conexion.php';
           /* Seción de inserción a la tabla users */
         
      try {
            $stmt = $conn->prepared("INSERT INTO `users` (`user_login`, `user_pass`, `user_name`, `user_lastname`, `user_email`, `user_registered`) 
         VALUES ('?','?','?','?','?','?')");
            $stmt->bind_param("ssssss", $nickname, $contraseña, $nombre, $apellido, $email, $feRegis);
            $stmt->execute();
            $stmt->close();
            $conn->close();
      } catch(Exception $e) {
            $error = $e->getMessage();
      }
}
        ?>
</section>

<?php include_once 'includes/templates/footer.php'; ?>