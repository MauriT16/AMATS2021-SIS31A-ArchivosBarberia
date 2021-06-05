<?php

// Definimos nuestra zona horaria
date_default_timezone_set("America/Guatemala");

// incluimos el archivo de funciones
include 'funciones.php';

// incluimos el archivo de configuracion
include 'config.php';

// Verificamos si se ha enviado el campo con name from
if (isset($_POST['from'])) 
{

    // Si se ha enviado verificamos que no vengan vacios
    if ($_POST['from']!="" AND $_POST['to']!="") 
    {

        // Recibimos el fecha de inicio y la fecha final desde el form

        $inicio = _formatear($_POST['from']);
        // y la formateamos con la funcion _formatear

        $final  = _formatear($_POST['to']);

        // Recibimos el fecha de inicio y la fecha final desde el form

        $inicio_normal = $_POST['from'];

        // y la formateamos con la funcion _formatear
        $final_normal  = $_POST['to'];

        // Recibimos los demas datos desde el form
        $titulo = evaluar($_POST['title']);

        // y con la funcion evaluar
        $body   = evaluar($_POST['event']);

        // reemplazamos los caracteres no permitidos
        $clase  = evaluar($_POST['class']);

        // insertamos el evento
        $query="INSERT INTO eventos VALUES(null,'$titulo','$body','','$clase','$inicio','$final','$inicio_normal','$final_normal')";

        // Ejecutamos nuestra sentencia sql
        $conexion->query($query); 

        // Obtenemos el ultimo id insetado
        $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
        $row = $im->fetch_row();  
        $id = trim($row[0]);

        // para generar el link del evento
        $link = "$base_url"."descripcion_evento.php?id=$id";

        // y actualizamos su link
        $query="UPDATE eventos SET url = '$link' WHERE id = $id";

        // Ejecutamos nuestra sentencia sql
        $conexion->query($query); 

        // redireccionamos a nuestro calendario
        header("Location:$base_url"); 
    }
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Calendario</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link rel="stylesheet" href="<?=$base_url?>css/menu.css">
        <link rel="stylesheet" href="<?=$base_url?>css/hoverefect.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.es.js"></script>
    </head>

</head>
<body style="background: white;">
<!--MENU-->
<header class="header">
		<div class="container">
		</div>
			<div class="logo">
				<h1>BARBER SHOP</h1>

            </div>
            <nav class="pull-right form-inline">
				<a href="http://localhost:8080/calendario/index2.php#">Inicio</a>
				<a href="http://localhost:8080/calendario/acecade.php#">Acerca de</a>
				<a href="#CONTACTOS">Contacto</a>
			</nav>

                                 <img src="img/barbe5.png" width="125" height="125"   alt="" >

                        </div>
  
  
		</div>
 
	</header>
	<div class="capa"></div>

<!--menu-->
<center><h1>Nuestros Barberos</h1></center>
<!--galeria de fotos efecto Hover-->
<!--1-->
<div class="contenedor">
       <a href="#">
            <figure>
                <img src="img/Hover/a.jpeg">
                <div class="capa">
                    <h3>Jc_barber</h3>
                    <p>Especialista en Perfilado de barba. Asesoría, arreglo de barba, aplicación de toalla caliente, aceite y limpieza facial.
Afeitado al ras.</p>
                </div>
            </figure>
        </a>    
        

        <a href="#">
            <figure>
                <img src="img/Hover/c.jpeg">
                <div class="capa">
                    <h3>Kriss style barber</h3>
                    <p>Especialista en Corte de cabello. Asesoría, corte y lavado de cabello.</p>
                </div>
            </figure>
        </a>

        <a href="#">
            <figure>
                <img src="img/Hover/d.jpeg">
                <div class="capa">
                    <h3>EduBarber y Ssugarbarber</h3>
                    <p>Especialista en Perfilado de barba. Asesoría, arreglo de barba y limpieza facial
Afeitado al ras y Corte de cabello. Asesoría, corte y lavado de cabello.</p>
                </div>
            </figure>
        </a>
    </div>
<center><img src="img/Hover/poster.jpeg" width="500" height="1000" />

</center>
    <center>
    <a id="CONTACTOS"><p>Redes Sociales</p> </a>
    </center>
    <center>
    <p><a href="https://www.facebook.com/profile.php?id=100068560851556&sk=photos" target="blank"><img src="img/facebook.png" width="45" height="45"></a>
        <tr>
        <a href="https://www.instagram.com/barber_shop_edu/" target="blank"><img src="img/instagram.png" width="45" height="45"></a>
        <a href="https://wa.me/message/RFE7ZQQQDOUFJ1" target="blank"><img src="img/whatsapplogo.png" width="45" height="45"></a>
    </p>            
    <p>ITCA FEPADE © <?php echo date("Y");?></p>
    </center>
</div>

</body>
</html>
