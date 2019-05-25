<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>La mejor pagina de reviewers sobre peliculas</h2>
      <p>
        Somos la mejor pagina web donde encontras opiniones hechas por la comunidad
        donde cada pelicula recibe un calficación en base a las calificaciones que
        dieron los usuarios.
      </p>
    </section>
    <!--.Sección -->

    <section class="spec-moviereviewer  ">
      <div class="contenedor-video clearfix">
        <video autoplay loop poster="posterimage.jpg">
          <source src="video/La sala de cine.mp4" type="video/mp4">
          <source src="video/La sala de cine.webm" type="video/webm">
          <source src="video/La sala de cine.ogv" type="video/ogv">
        </video>
      </div>
      <!--.contenedor video-->
      <div class="contenido-autores">
        <div class="contenedor">
          <div class="sobre-autores">
            <h2>Sobre la pagina</h2>
            <nav class="menu-sobre">
              <a href="#autores"><i class="fas fa-user" aria-hidden="true"></i> Autores</a>
              <a href="#comentarios"><i class="fas fa-comments" aria-hidden="true"></i> Reviewer</a>
              <a href="#calificaciones"><i class="fas fa-marker" aria-hidden="true"></i> Calificación</a>
            </nav>

            <div id="autores" class="info-autores ocultar clearfix">
              <div class="detalle-autores">
                <h3>DATOS DE LOS AUTORES</h3>
                <p><i class="fas fa-user" aria-hidden="true"></i> José Antonio Utrera Díaz</p>
                <p><i class="fas fa-id-card"></i> Número de control: <span>E15020798</span></p>
                <p><i class="fas fa-university"></i> Universidad: Instituto Tecnologico de Veracruz </p>
              </div>
              <div class="detalle-autores">
                <p><i class="fas fa-user" aria-hidden="true"></i> Adolfo Pastelin Enciso</p>
                <p><i class="fas fa-id-card"></i> Número de control: <span>E15020605</span></p>
                <p><i class="fas fa-university"></i> Universidad: Instituto Tecnologico de Veracruz </p>
              </div>
            </div>
            <!--.detalle-autores-->

            <div id="comentarios" class="info-autores ocultar clearfix">
              <div class="detalle-comentario">
                <h3>¿Por qué manejar comentarios? </h3>
                <p><i class="fas fa-user" aria-hidden="true"></i> José Antonio Utrera Díaz dice: </p>
                <p>
                  "Discutir tal o cual fallo, comentar esa escena brillante o confrontar visiones distintas
                  sobre el desenlace de una película se puede lograr tras verla en casa, pero incomparable
                  si es al salir del cine".</p>
              </div>
              <div class="detalle-comentario">
                <p><i class="fas fa-user" aria-hidden="true"></i> Adolfo Pastelin Enciso Dice: </p>
                <p>"ayuda a fomentar ese lado cinéfilo que tenemos todos los que vamos al cine, a hacer nuestra crítica
                  personal o simplemente
                  a defender/atacar a los actores/actrices en plan cotilleo".</p>
              </div>
            </div>
            <!--.detalle-comentarios-->

            <div id="calificaciones" class="info-autores ocultar clearfix">
              <div class="detalle-calificaciones">
                <h3>¿Por qué manejar una calificación?</h3>
                <p><i class="fas fa-user" aria-hidden="true"></i> José Antonio Utrera Díaz dice: </p>
                <p>
                  "significa evaluar la manera en que una cosa o una persona para llevar a cabo alguna actividad y en
                  base
                  a ello
                  determinar las cualidades, capacidades y aptitudes para ser utilizado en alguna actividad específica,
                  estimando
                  o ponderando su desempeño".
                </p>
              </div>
              <div class="detalle-calificaciones">
                <p><i class="fas fa-user" aria-hidden="true"></i> Adolfo Pastelin Enciso dice: </p>
                <p>
                  "significa evaluar la manera en que una cosa o una persona para llevar a cabo alguna actividad y en
                  base
                  a ello
                  determinar las cualidades, capacidades y aptitudes para ser utilizado en alguna actividad específica,
                  estimando
                  o ponderando su desempeño".
                </p>
              </div>
            </div>
            <!--.detalle-calficaciones-->
          </div>
          <!--.sobre-autores-->
        </div>
        <!--.contenedor-->
      </div>
      <!--.Contenido-autores-->
    </section>
    <!--.Sección-->

    <section class="peliculas contenedor seccion  clearfix  ">
      <h2> NUESTRAS MEJORES PELICULAS </h2>
      <ul class="most-movies">
        <li>
          <div class="most-top">
            <img src="img/poster16.jpg">
            <p><i id="corona-gold" class="fas fa-crown"></i></p>
          </div>
        </li>
        <li>
          <div class="most-top">
            <img src="img/poster4.jpg">
            <p><i id="corona-silver" class="fas fa-crown"></i></p>
          </div>
        </li>
        <li>
          <div class="most-top">
            <img src="img/poster10.jpg">
            <p><i id="corona-bronze" class="fas fa-crown"></i></p>
          </div>
        </li>
      </ul>
    </section>

    <section class="peliculas contenedor seccion  clearfix  ">
      <h2> NUESTRAS PEORES PELICULAS </h2>
      <ul class="less-movies">
        <li>
          <div class="less-top">
            <img src="img/poster1.jpg">
            <p><i id="corona-gold" class="fas fa-crown"></i></p>
          </div>
        </li>
        <li>
          <div class="less-top">
            <img src="img/poster3.jpg">
            <p><i id="corona-silver" class="fas fa-crown"></i></p>
          </div>
        </li>
        <li>
          <div class="less-top">
            <img src="img/poster20.jpg">
            <p><i id="corona-bronze" class="fas fa-crown"></i></p>
          </div>
        </li>
      </ul>
    </section>

    <?php include_once 'includes/templates/footer.php';?>