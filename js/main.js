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

$(function(){

        // Lettering

        $('.nombre-sitio').lettering();

        // Menu fijo

        var windowHeight = $(window).height();
        var barraAltura = $('.barra').innerHeight();

        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > windowHeight) {
                console.log("Ya te pasaste de la pantalla mano!!");
            } else {
                console.log("Firmala gio! Firmala!");
            }
        });

});





//*Sobre autores *//
$(function() {
    $('.sobre-autores .info-autores:first').show();
    $('.menu-sobre a').on('click', function() {
        $('.ocultar').hide();   

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    })
});