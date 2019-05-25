<?php
$servername = "sql200.main-hosting.eu";
$username   = "u342352385_haxie";
$database   = "u342352385_morev";
$password   = "tangente15";

// Check connection
$enlace = mysqli_connect($servername, $username, $password, $database);
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
mysqli_close($enlace);
?>