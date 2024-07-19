<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<?php $texto = "Horoscopos";?>
<?php $imagen = "horoscopo";?>
<title><?php echo $texto ?> gratis : <?php echo $texto ?> diario online </title>
<meta name="description" content="Horoscopo, horoscopo gratis, horoscopos del dia, horoscopo de la semana, tarot, esoterismo.">
<?php include "includes/encabezadogeneral.php"; ?>
</head>
<body> 
<?php include "includes/menu.php"; ?>
<div id="content">
<div class="container">
<img alt="<?php echo $imagen ?>" src="https://www.<?php echo $web ?>/images/<?php echo $imagen ?>.webp" class="pull-left img-thumbnail" style="margin-right:5px;">
<h1 style="margin-top:-1px;"><?php echo $texto ?></h1>
<p><?php echo $texto ?> Diarios gratis.</p>
<ol class="breadcrumb" style="margin-top:15px;">
<?php include "includes/web.php"; ?>
<li class="active"><?php echo $texto ?></li>
</ol>
<div class="row">
<hr>
<?php include "includes/anuncio.php"; ?>
<hr>
<div class="row">
<p style="font-size:20px">¿Quieres conocer lo que te deparan los astros para tu futuro?
Gracias al servicio de Horoscopo de hoy gratis podras consultar las predicciones para cada signo del zodiaco. Ademas, podras chatear totalmente gratis en nuestro canal de Esoterismo, en el que podras compartir todos tus sueños, inquietudes... 
¡Descubre si la suerte esta de tu lado hoy en la salud, el amor y el dinero!</p>
<div class="col-md-6 col-md-offset-4">
<table cellpadding="0" cellspacing="0" border="0" style="width: 300px; height: 600px; border: 1px solid #3b2f27; background-color: #ffffff;">
<tr style="height: 40px;"><td align="center"><img src="http://fb.mon-horoscope-du-jour.com/webmaster_es/images/logo.webp" alt="" border="0" style="width:90px; height:42px;"></td></tr>
<tr><td><iframe src="http://fb.mon-horoscope-du-jour.com/webmaster_es/content_300x600_txt.php" name="content" id="content" width="298" height="530" marginwidth="0" marginheight="0" scrolling="no" frameborder="0"></iframe></td></tr>
<tr style="height: 30px;"><td align="center"><a href="http://www.mi-horoscopo-del-dia.com" style="text-decoration: none; color: #3b2f27; font-family: arial; font-size: 16px;"><b>Horóscopo Gratuito</b></a></td></tr></table></div>
</div>
</div> 
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>

