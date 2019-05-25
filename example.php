<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor clearfix">
      <h2> Bienvenido/a </h2>
      <?php 
        /* Sección de Variables */
        $nickname = $_POST['nickname'];
        $contraseña = $_POST['contraseña'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $feRegis = date("Y-m-d H:i:s");
        
        
    require_once 'includes/funciones/conexion.php';
    
    $sql = "INSERT INTO `users` (`user_login`, `user_pass`, `user_name`, `user_lastname`, `user_email`, `user_registered`) 
            VALUES ('ruzell', 'haxie123','aldolfo','wastelin','adolfo.v@some.com', '$feRegis' )";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

</section>

<?php include_once 'includes/templates/footer.php'; ?>