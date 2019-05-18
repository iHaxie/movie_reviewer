(function(){
    "use strict";

    document.addEventListener('DOMContentLoaded', function(){
    
    // Campos de usuario 

    var nickname   = document.getElementById('nickname');
    var contraseña = document.getElementById('contraseña');
    var nombre     = document.getElementById('nombre');
    var apellido   = document.getElementById('apellido');
    var email      = document.getElementById('email');

    // Botones y divs
    var errorDiv    = document.getElementById('error');
    var btnRegistra = document.getElementById('btnRegistra');
    
    // Sección EventListener

    // Sección de funciones
        });// DOM CONTENT  LOADED
})();


$(function() {
    $('.sobre-autores .info-autores:first').show();
    $('.menu-sobre a').on('click', function() {
        $('.ocultar').hide();   

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    })
});