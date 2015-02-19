<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo_pagina ?> </title>
        <link href='http://fonts.googleapis.com/css?family=Original+Surfer' rel='stylesheet' type='text/css'>
        <link href='http://battlelog.battlefield.com/cdnprefix/local/public/base/fonts/purista/purista.css' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
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
                
                padding: 2%;
                background-color: gainsboro;
                margin-bottom: 50px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                
            }
            .titular_noticia_pagina{
                font-family: 'Original Surfer', cursive;
                font-size: 40px;
                color: black;
                margin-bottom: 20px;
                
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
            .subtitulo_noticia_pagina {
                font-family: 'Architects Daughter', cursive;
                margin-top: 310px;
                font-size: 25px;
                margin-bottom: 30px;
            }
            .fecha_noticia_pagina {
                font-family: 'Architects Daughter', cursive;
                margin-top: 30px;
                font-weight: bolder;
            }
            .portada_noticia_pagina img {
                float: left;
                width: 90%;
                margin-left: 5%;
                margin-bottom: 20px;
                
            }
            .body_noticia {
                font-family: 'Ubuntu Condensed', sans-serif;
            }
            .atras_pagina {
                padding: 15px;
                float: right;
                background-color: black;
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
                top: -200px;
                
            }
            .bienvenido font {
                position: relative;
                margin-top: 15px;
                text-align: center;
                margin: 10px;
                top: 10px;
            }
/*             @import "http://battlelog.battlefield.com/cdnprefix/local/public/base/fonts/purista/purista.css";*/
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
        
            <div class="noticia">

                <div class="titular_noticia_pagina">
                    <?php echo $noticia->titular_noticia; ?>
                </div>
                <div class="portada_noticia_pagina">
                    
                    <img src="<?php echo $noticia->portada_noticia; ?>" />
                </div>
                <div class="subtitulo_noticia_pagina">
                    <?php echo $noticia->subtitulo_noticia; ?>
                </div>
                <div class="body_noticia">
                <?php echo $noticia->body_noticia; ?>
                                    </div>
                <div class="fecha_noticia_pagina">
                    <?php echo $noticia->fecha_noticia; ?>
                </div>
                <a href="#" >
                    <div class="atras_pagina">
                        atras
                    </div>
                </a>
                
            </div>
        
    </div>

</body>
</html>