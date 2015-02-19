<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>HOME</title>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        
        <link href='http://battlelog.battlefield.com/cdnprefix/local/public/base/fonts/purista/purista.css' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Original+Surfer' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        
        <style>
            body {
                background-color: grey;
            }
            .user{

                margin: 10px;

                display: block;
            }
            h2 {
                font-family: 'Sigmar One', cursive;
                color: black;
            }
            .titulo_portada {
                font-family: Purista,sans-serif, arial;
                width: 50%;
                font-size: 100px;
                color: white;
                font-weight: bold;
                position: absolute;
                display: block;
                margin-left: 27%;
                margin-top: 50px;
                
            }
            .form {

                border: 4px solid green;

                padding: 10px;

            }
            .form input {
                margin-bottom: 10px;

            }
            .noticias_index {
                width: 50%;
                height: auto;
                padding: 15px;
                margin-left: 11%;
                background-color: #990000;
                float: left;
                border-radius: 25px;
                margin-top: 200px;
            }
            .noticia {
                border-radius: 25px;
                padding: 2%;
                background-color: gainsboro;
                margin-bottom: 50px;
                min-height: 70px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            }
            .titular_noticia{
                font-family: 'Original Surfer', cursive;
                font-size: 25px;
                color: black;

            }
            .colaboradores {
                width: 250px;
                border: 5px #990000 ridge;
                padding: 15px;
                text-align: center;
                float: left;
                color: white;
                margin-top: 200px;
                margin-left: 30px;
            }
            .subtitulo_noticia {
                font-family: 'Architects Daughter', cursive;
                
               
                
            }
            .fecha_noticia {
                font-family: 'Architects Daughter', cursive;
                margin-top: 30px;
                font-weight: bolder;
            }
            .portada_noticia img {
                float: right;
                width: 180px;

                margin-top: -30px;
            }
            .leer_noticia {
                padding: 15px;
                float: right;
                background-color: black;
                color: white;
                font-family: monospace;
                font-weight: bolder;
                margin-top: -95px;
                border-radius: 25px;
                
            }
            .leer_foto {
                padding: 15px;
                float: right;
                background-color: black;
                color: white;
                font-family: monospace;
                font-weight: bolder;
                
                position: relative;
            }
             .leer_foto a {
                 text-decoration: none;
                color: white;
                font-family: monospace;
                font-weight: bolder;
             }
            .leer_noticia a {
                text-decoration: none;
                color: white;
                font-family: monospace;
                font-weight: bolder;
            }
            .desconectar {
                float: right;
                padding: 10px;
                border-radius: 25px;
                background-color: #990000;
                color: white;
                font-weight: bolder;
            }
            .bienvenido {
                border-radius: 25px;
                color: black;
                font-weight: bolder;
                border: 3px solid #990000;
                float: right;
                position: relative;
                margin-top: 20px;
                background-color: white;

            }
            .bienvenido font {
                position: relative;
                margin-top: 15px;
                text-align: center;
                margin: 10px;
                top: 10px;
            }
            form .stars {
                background: url("https://dl.dropboxusercontent.com/u/683504/www.codepen.io/stars.png") repeat-x 0 0;
                width: 150px;
                margin: 0 auto;
            }
            .ie7 form .stars {
                *zoom: 1;
            }
            form .stars:before,
            form .stars:after {
                display: table;
                content: "";
            }
            form .stars:after {
                clear: both;
            }
            form .stars input[type="radio"] {
                position: absolute;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            form .stars input[type="radio"].star-5:checked ~ span {
                width: 100%;
            }
            form .stars input[type="radio"].star-4:checked ~ span {
                width: 80%;
            }
            form .stars input[type="radio"].star-3:checked ~ span {
                width: 60%;
            }
            form .stars input[type="radio"].star-2:checked ~ span {
                width: 40%;
            }
            form .stars input[type="radio"].star-1:checked ~ span {
                width: 20%;
            }
            form .stars label {
                display: block;
                width: 30px;
                height: 30px;
                margin: 0!important;
                padding: 0!important;
                text-indent: -999em;
                float: left;
                position: relative;
                z-index: 10;
                background: transparent!important;
                cursor: pointer;
            }
            form .stars label:hover ~ span {
                background-position: 0 -30px;
            }
            form .stars label.star-5:hover ~ span {
                width: 100% !important;
            }
            form .stars label.star-4:hover ~ span {
                width: 80% !important;
            }
            form .stars label.star-3:hover ~ span {
                width: 60% !important;
            }
            form .stars label.star-2:hover ~ span {
                width: 40% !important;
            }
            form .stars label.star-1:hover ~ span {
                width: 20% !important;
            }
            form .stars span {
                display: block;
                width: 0;
                position: relative;
                top: 0;
                left: 0;
                height: 30px;
                background: url("https://dl.dropboxusercontent.com/u/683504/www.codepen.io/stars.png") repeat-x 0 -60px;
                -webkit-transition: -webkit-width 0.5s;
                -moz-transition: -moz-width 0.5s;
                -ms-transition: -ms-width 0.5s;
                -o-transition: -o-width 0.5s;
                transition: width 0.5s;
            }
            #submit {
                width: 150px;
                margin: 0 auto;
                text-align: center;
                margin-top: 10px;
            }
            #submit input[type=button] {
                margin: 0 auto;
                border: 2px solid #ddd;
                border-radius: 15px;
                background-color: #1aa3db;
                color: #fff;
            }


            .concurso {
                float: left;
                height: auto;
                width: 100%;
            }
            .una_foto {
                float: left;
                border: 3px solid;
                padding: 20px;
                margin: 10px;
                height: auto;
                width: 380px;
                background-color: white;
                z-index: 20;
            }
            .una_foto img {
                width: 380px;
            }
            .una_foto img:hover {
                border: 5px #990000 groove;
                width: 370px;
            }
            .titulo_foto {
                margin-top:   20px;
                font-weight: bolder;
                font-size: 23px;
                margin-bottom: 10px;
            }
            .body_foto {
                margin-bottom: 15px;
            }
            .titulo_concurso {
                font-family: 'Indie Flower', cursive;
                float: left;
                margin-top: 50px;
                font-size: 80px;
                color: white;
                font-weight: bold;
                display: block;
                margin-left: auto;
                text-align: center
            }
            .autor_foto {
                font-size: 12px;
                font-style: oblique;
                margin-bottom: 15px;
                margin-top: 10px;
            }
            .form_foto {
                margin-top: 50px;
                margin-bottom: 50px;
                padding: 20px;
                font-size: 30px;
                background-color: white;
                margin-left: 33%;
                width: 600px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
               
                
            }
            form_foto input {
                margin-left: 10px;
                
            }
            form_foto textarea {
                margin-left: 10px;
                margin-top: 10px;
                
            }
            form_foto label {
                margin-left: 10px;
                margin-top: 40px;
                
            }
/*            @import "http://battlelog.battlefield.com/cdnprefix/local/public/base/fonts/purista/purista.css";*/
@-webkit-keyframes title {
  0% {
    opacity: 0;
    right: 130px;
  }
  48% {
    opacity: 0;
    right: 130px;
  }
  52% {
    opacity: 1;
    right: 30px;
  }
  70% {
    opacity: 1;
    right: 30px;
  }
  100% {
    opacity: 0;
    right: 30px;
  }
}
@-moz-keyframes title {
  0% {
    opacity: 0;
    right: 130px;
  }
  48% {
    opacity: 0;
    right: 130px;
  }
  52% {
    opacity: 1;
    right: 30px;
  }
  70% {
    opacity: 1;
    right: 30px;
  }
  100% {
    opacity: 0;
    right: 30px;
  }
}
@-webkit-keyframes fade {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes fade {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes bg {
  0% {
    background-color: #306f99;
  }
  50% {
    background-color: #19470f;
  }
  90% {
    background-color: #734a10;
  }
}
@-moz-keyframes bg {
  0% {
    background-color: #306f99;
  }
  50% {
    background-color: #19470f;
  }
  90% {
    background-color: #734a10;
  }
}
@-webkit-keyframes blink {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  10% {
    opacity: 0;
  }
  15% {
    opacity: 1;
  }
  20% {
    opacity: 0;
  }
  25% {
    opacity: 1;
  }
  30% {
    opacity: 0;
  }
  35% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    right: -21px;
  }
  45% {
    opacity: 1;
    right: 80px;
  }
  50% {
    opacity: 0;
    right: -21px;
  }
  51% {
    right: -21px;
  }
  55% {
    opacity: 1;
  }
  60% {
    opacity: 0;
  }
  65% {
    opacity: 1;
  }
  70% {
    opacity: 0;
  }
  75% {
    opacity: 1;
  }
  80% {
    opacity: 0;
  }
  85% {
    opacity: 1;
  }
  90% {
    opacity: 0;
    right: -21px;
  }
  95% {
    opacity: 1;
    right: 80px;
  }
  96% {
    right: -21px;
  }
  100% {
    opacity: 0;
    right: -21px;
  }
}
@-moz-keyframes blink {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  10% {
    opacity: 0;
  }
  15% {
    opacity: 1;
  }
  20% {
    opacity: 0;
  }
  25% {
    opacity: 1;
  }
  30% {
    opacity: 0;
  }
  35% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    right: -21px;
  }
  45% {
    opacity: 1;
    right: 80px;
  }
  50% {
    opacity: 0;
    right: -21px;
  }
  51% {
    right: -21px;
  }
  55% {
    opacity: 1;
  }
  60% {
    opacity: 0;
  }
  65% {
    opacity: 1;
  }
  70% {
    opacity: 0;
  }
  75% {
    opacity: 1;
  }
  80% {
    opacity: 0;
  }
  85% {
    opacity: 1;
  }
  90% {
    opacity: 0;
    right: -21px;
  }
  95% {
    opacity: 1;
    right: 80px;
  }
  96% {
    right: -21px;
  }
  100% {
    opacity: 0;
    right: -21px;
  }
}


/*.wrap {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -80px;
  margin-top: -40px;
}*/

.concurso {
    width: 98%;
}

.bg {
  padding: 30px 30px 30px 0;
  background: #306f99;
  -moz-animation: bg 2.5s linear infinite;
  -webkit-animation: bg 2.5s linear infinite;
  animation: bg 2.5s linear infinite;
  -moz-box-shadow: inset 0 0 45px 30px grey;
  -webkit-box-shadow: inset 0 0 45px 30px grey;
  box-shadow: inset 0 0 45px 30px grey;
}

.loading {
  position: relative;
  text-align: right;
  text-shadow: 0 0 6px #bce4ff;
  height: 60px;
  width: 850px;
}
.loading span {
  display: block;
  text-transform: uppercase;
  position: absolute;
  right: 30px;
  height: 50px;
  width: 900px;
  line-height: 20px;
}
.loading span:after {
  content: "";
  display: block;
  position: absolute;
  top: -22px;
  right: -21px;
  height: 70px;
  width: 26px;
  background: #eaf7ff;
  -moz-box-shadow: 0 0 15px #bce4ff;
  -webkit-box-shadow: 0 0 15px #bce4ff;
  box-shadow: 0 0 15px #bce4ff;
  -moz-animation: blink 3.4s infinite;
  -webkit-animation: blink 3.4s infinite;
  animation: blink 3.4s infinite;
}
.loading span.title {
  -moz-animation: title 3.4s linear infinite;
  -webkit-animation: title 3.4s linear infinite;
  animation: title 3.4s linear infinite;
}
.loading span.text {
  -moz-animation: title 3.4s linear 1.7s infinite;
  -webkit-animation: title 3.4s linear 1.7s infinite;
  animation: title 3.4s linear 1.7s infinite;
  opacity: 0;
}

.subconcurso {
    font-size: 28px;
    margin: 35px;
    text-align: justify;
   
}

        </style>
    </head>
    <body>
        <div class="titulo_portada">
            <div class="wrap">
  <div class="bg">
    <div class="loading">
      <span class="title">Portal 2º DAW</span>
      <span class="text">Web Developed</span>
    </div>
  </div>
</div>
            </div>
       
        <div class="bienvenido">
            <font>Bienvenido <?php echo $username; ?></font>
            <a href="home/logout"><div class="desconectar">Salir</div></a>
        </div>
        <div class="colaboradores">
            <h2>Colaboradores</h2>
            <?php
            foreach ($usuarios as $item):
                ?>
                <div class="user"> <?php echo $item->id_usuario; ?>. <?php echo $item->nombre_usuario; ?>, <?php echo $item->edad_usuario; ?> años</div>
                <?php
            endforeach;
            ?>
            
        </div>
        <div class="noticias_index">
            <?php for ($i = 0; $i < count($noticias); ++$i) { ?>
                <div class="noticia">
                    <?php
                    $url = 'home/' . $noticias[$i]->id_noticia; //. '/';
                    //Para hacer la url amigable y quitarle los espacion utilizamos un helper llamado url, ademas quitamos los
                    // acentos de las palablas q tengan mediante un helper llamado text
                    //$url .= url_title(convert_accented_characters($noticias[$i]->titular_noticia), '-', TRUE);
                    ?>           
                    <div class="titular_noticia">
                        <?php echo $noticias[$i]->titular_noticia; ?>
                    </div>
                    <div class="portada_noticia">

                        <img src="<?php echo $noticias[$i]->portada_noticia; ?>" />
                    </div>
                    <div class="subtitulo_noticia">
                        <?php echo $noticias[$i]->subtitulo_noticia; ?>
                    </div>
                    <!--                    <div class="body_noticia">
                    <?php // echo $noticias[$i]->body_noticia; ?>
                                        </div>-->
                    <div class="fecha_noticia">
                        <?php echo $noticias[$i]->fecha_noticia; ?>
                            </div>

                    </div>
                    <div class="leer_noticia">
                        <!-- helper que crea un link estandar basandose en su url local -->
                        <a><?php echo anchor($url, "+ leer noticia"); ?></a>
                        </div>
                    <?php } ?>
        </div>
       
        <div class="concurso">
             <div class="titulo_concurso">
            V Concurso Nacional de Fotografía Digital CANSON INFINITY
        </div>
            <div class="subconcurso">
                Cada participante podrá presentar un máximo de 3 obras, no premiadas en otros concursos, indistintamente en blanco y negro o color, con total libertad de técnica y procedimiento. Las obras se valorarán indistinta y conjuntamente en una única categoría. <br/>
                Las obras tendrán un formato libre para la mancha de imagen y deberán presentarse impresas única y exclusivamente sobre cualquiera de los papeles de la gama Canson Infinity de formato inferior o igual a A3+(32,9 x 48,3) sin enmarcar y sin ningún refuerzo o montaje.<br/>
                Formato JPEG, Altura máxima de 600 píxeles y Peso máximo del archivo de 400 Kb.
            </div>
            <div class="form_foto">
                <?php echo validation_errors(); ?>
                <?php echo form_open('concurso_controller/addFoto') ?>
                <label for="url_foto">URL de la imagen </label>
                <input type="text" size="40" id="url_foto" name="url_foto" value="<?php echo set_value('url_foto') ?>"/>
                <br/>
                <label for="titulo_foto">Título de la imagen </label>
                <input type="text" size="38" id="titulo_foto" name="titulo_foto" value="<?php echo set_value('titulo_foto') ?>" />
                <br/>
                <label for="body_foto">Descripción breve </label><br/>
                <textarea name="body_foto" id="body_foto" rows="4" cols="45" value="<?php echo set_value('body_foto') ?>"  > Introduzca una breve descripcion de la foto aquí</textarea>
                <br/>
                <label for="autor_foto">Autor </label>
                <input type="text" id="autor_foto" name="autor_foto" value="<?php echo set_value('autor_foto') ?>" />
                <br/>
                <input type="submit" value="Subir foto" name="submit_addFoto"/>
                </form>
            
            </div>
            <?php for ($i = 0; $i < count($concurso_foto); ++$i) { ?>
                <div class="una_foto">

                    <img src="<?php echo $concurso_foto[$i]->url_foto; ?>" />
                    <div class="titulo_foto"><?php echo $concurso_foto[$i]->titulo_foto; ?></div>
                    <div class="body_foto"><?php echo $concurso_foto[$i]->body_foto; ?></div>
                    <div class="autor_foto"><?php echo "Realizada por ".$concurso_foto[$i]->autor_foto; ?></div>
                    <div class="star_rating">
<!--                        <form id="ratingsForm">-->
                            <?php echo form_open('concurso_controller/puntuarFoto')?>
                            <div class="stars" >
                                <input type="radio" name="star" class="star-1" id="star-1" value="1" />
                                <label class="star-1" for="star-1">1</label>
                                <input type="radio" name="star" class="star-2" value="2"  id="star-2" />
                                <label class="star-2" for="star-2">2</label>
                                <input type="radio" name="star" class="star-3" value="3"  id="star-3" />
                                <label class="star-3" for="star-3">3</label>
                                <input type="radio" name="star" class="star-4" value="4"  id="star-4" />
                                <label class="star-4" for="star-4">4</label>
                                <input type="radio" name="star" class="star-5" value="5"  id="star-5" />
                                <label class="star-5" for="star-5">5</label>
                                <input type="hidden" name="id_foto" value="$concurso_foto[$i]->id_foto" />
                                <span></span>
                            </div>
                            <div id="submit"><input type="button" value="Vota!" name="submit_vota"></input></div>
                        </form>
                    </div>
                    <div class="leer_foto">
                        <!-- helper que crea un link estandar basandose en su url local -->
                        <a><?php 
                            $url2 = 'concurso_controller/detalleFoto/' . $concurso_foto[$i]->id_foto;
                            echo anchor($url2, "+"); ?></a>
                        </div>
                </div>
            <?php } ?>
        </div>           
    
    </body>
</html>