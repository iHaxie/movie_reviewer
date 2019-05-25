<?php
    /* Funciones para validar campos */
    function validarNombre($valor){
        
        if (!isset($valor) || trim($valor) != '') {
            echo "<p> Nombre: ".$valor." </p>";
        } else {
            echo "El nombre es obligatorio";
        }
        
    }

    function validarApellido($valor){
        
        if (!isset($valor) || trim($valor) != '') {
            echo "<p> Apellido: ".$valor." </p>";
        } else {
            echo "El Apellido es obligatorio";
        }
        
    }
?>