<!DOCTYPE html>
<!--

-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Foro DAW</title>
        <link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>
        
	<style>
               
                .cajon_registro {
                    width: 300px;
                    height: 160px;
                    border-radius: 25px;
                    background-color: #990000;
                    font-size: 20px;
                    color: white;
                    font-weight: bolder;
                    text-align: center;
                    padding: 10px;
                     
                }
                .cajon_registro input {
                    margin-top: 20px;
                }
                h1  {
                    font-family: 'Waiting for the Sunrise', cursive;
                    font-size: 70px;
                }
                h2  {
                    font-family: 'Waiting for the Sunrise', cursive;
                    font-size: 20px;
                }
                .h2registro  {
                    font-family: 'Waiting for the Sunrise', cursive;
                    font-size: 30px;
                    color: #990000;
                    font-weight: bolder;
                }
        </style>
</head>
<body>
<center>
    <h1>PORTAL 2º DAW</h1>
    <div class="cajon_registro">
        <?php echo validation_errors(); ?>
        <?php echo form_open('verificarLogin'); ?>
        <label for="username">Usuario:</label>
        <input type="text" size="20" id="username" name="username"/>
        <br/>
        <label for="pass">Contraseña:</label>
        <input type="password" size="20" id="pass" name="pass"/>
        <br/>
        <input type="submit" value="Login"/>
        </form>
    </div>
    <h2>Necesitas ser miembro para poder entrar</h2>
    <h2 class="h2registro">
        <?php 
         $url = 'registro'; 
        echo anchor($url, "Regístrate aquí"); ?></h2>
</center>
</body>
</html>