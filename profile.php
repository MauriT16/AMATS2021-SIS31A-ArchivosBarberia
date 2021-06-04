<?php
include('session.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Barberia</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body>
<!--header start here-->
<h1></h1>
<div class="header agile">
	<div class="center">
		    	<center>
						 <img src="img/barbe5.png" width="200" height="200"   alt="" >
				</center>
               
		    </div>

		    <br>
		    <br>

	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>BIENVENIDO <i><?php echo $login_session; ?></i></h3>

			<div class="btn btn-primary"> </div>
			
				<h3><a href="index2.php">Siguiente</a></h3>
			</div>

			<div class="clear"> </div>
				<h3><a  href="logout.php"> Cerrar sesión</a></h3>
			</div>
			
			
		</div>
	</div>
</div>
<!--header end here-->
<!--copy rights end here-->
<div class="copy-rights w3l">		 	
	<center>
	<p>Redes Sociales</p>	
</center>	
<br>

 	
	<p><a href="https://www.facebook.com/profile.php?id=100068560851556" target="blank"><img src="img/facebook.png" width="45" height="45"></a>
		<tr>
		<a href="https://www.instagram.com/barber_shop_edu/" target="blank"><img src="img/instagram.png" width="45" height="45"></a>
		<a href="https://wa.me/message/RFE7ZQQQDOUFJ1" target="blank"><img src="img/whatsapplogo.png" width="45" height="45"></a>
	</p>		 	
	<p>© <?php echo date("Y");?></p>		 	
</div>

<!--copyrights start here-->

</body>
</html>



