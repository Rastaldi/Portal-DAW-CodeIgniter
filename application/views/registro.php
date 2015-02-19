<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Foro DAW</title>
        <link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>
        
	<style>
               
                .cajon_registro {
                    width: 300px;
                    
                    border-radius: 25px;
                    background-color: #990000;
                    font-size: 20px;
                    color: white;
                    font-weight: bolder;
                    text-align: center;
                    padding: 10px;-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
                    
                     
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
                .input_registro {
                    border-radius: 25px;
                    font-weight: bolder;
                    background-color: white;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-bottom: 5px;
                    padding-top: 5px;
                }
        </style>
</head>
<body>
<center>
    <h1>PORTAL 2º DAW</h1>
    <div class="cajon_registro">
         <?php //echo form_open(base_url().'usuarios/verificarRegistro')?>
        <?php echo form_open('register'); ?>
        <label for="username">Usuario </label>
        <input type="text" size="20" id="username" name="username" value="<?php echo set_value('username')?>"/>
        <br/>
        <label for="pass">Contraseña </label>
        <input type="password" size="20" id="pass" name="pass" value="<?php echo set_value('pass')?>" />
        <br/>
        Edad <input type="number" size="99" id="edad" name="edad" value="<?php echo set_value('edad')?>" />
        <br/>
        <label for="correo">Correo </label>
        <input type="email" size="20" id="correo" name="correo"/>
        
        <br/>
        <label for="telefono">Telefono</label>
        <input type="tel" id="telefono" name="telefono"/>
        <br/>
        <input class="input_registro" type="submit" value="Registrar" name="submit_registro"/>
        </form>
    </div>
    
    
</center>
</body>
</html>