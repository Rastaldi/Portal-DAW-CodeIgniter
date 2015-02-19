<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo_pagina ?> </title>
        <link href='http://fonts.googleapis.com/css?family=Original+Surfer' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <style>
            body {
              
            }
            .user{
                
                margin: 10px;
                
                display: block;
            }
            h2 {
                font-family: 'Sigmar One', cursive;
                color: green;
            }
            .titulo_portada {
                font-family: 'Indie Flower', cursive;
                width: 50%;
                font-size: 160px;
                color: black;
                font-weight: bold;
                
                margin-left: 25%;
                text-align: center
            }
            .form {
                
                border: 4px solid green;
                
                padding: 10px;
                
            }
            .form input {
                margin-bottom: 10px;
                
            }
            .foto_index {
                width: 50%;
                height: auto;
                padding: 25px;
                margin-left: 11%;
                background-color: #990000;
                float: left;
                margin-bottom: 50px;
            }
            .foto {
                
                padding: 2%;
                background-color: gainsboro;
                margin-bottom: 50px;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                
            }
            .titulo_foto_pagina{
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
            }
            
            
            .portada_foto_pagina img {
                float: left;
                width: 90%;
                margin-left: 5%;
                margin-bottom: 20px;
                
            }
            .body_foto {
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
        </style>
</head>
<body>
    <div class="titulo_portada">
        Concurso Fotografía
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
    <div class="foto_index">
        
            <div class="foto">

                <div class="titulo_foto_pagina">
                    <?php echo $concurso_foto->titulo_foto; ?>
                </div>
                <div class="portada_foto_pagina">
                    
                    <img src="<?php echo $concurso_foto->url_foto; ?>" />
                </div>
              
                <div class="body_foto">
                <?php echo $concurso_foto->body_foto; ?>
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