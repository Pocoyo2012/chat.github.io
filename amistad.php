<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<?php $texto = "Amistad";?>
<?php $imagen = "amistad";?>
<title>Chat para hacer <?php echo $texto ?> gratis. Canal de Amistad</title>
<meta name="description" content="Chat <?php echo $texto ?>. Chatea y encuentra nuevos amigos de tu zona, disfruta del mejor canal de <?php echo $texto ?> entre chicos y chicas."> 
<?php include "includes/encabezadogeneral.php"; ?>
</head>
<body> 
<?php include "includes/menu.php"; ?>
<div id="content"><div class="container">
<div class="row"> 
<div class="col-md-10">

<h1 style="margin-top:-1px;">  Chat <?php echo $texto ?> gratis</h1>
<p>Chat para hacer amistad y chatear gratis.</p>
<ol class="breadcrumb" style="margin-top:15px;">
<?php include "includes/web.php"; ?>
<li class="active"> <?php echo $texto ?></li>
</ol>
<?php include "includes/nick.php"; ?>
<div class="row"><div class="col-md-8 col-md-offset-2">
<div class="panel panel-primary" style="box-shadow: 0 8px 6px -6px black;">
<div class="panel-heading">
<h2 class="panel-title"><img alt="Chat <?php echo $imagen ?>" src="https://www.<?php echo $web ?>/img/chat/<?php echo $imagen ?>.webp" height="20" width="28" style="border: 1px solid white;">  Chat <?php echo $texto ?></h2>
</div>
<?php include "chats/chat.php"; ?>
</div>
</div></div>
<hr>
<?php include "includes/anuncio.php"; ?>
<hr>

<p style="font-size:16px"> <strong>Chat de <?php echo $texto ?></strong><br />Conoce a personas de tu zona en nuestros canales de chat gratuitos sin registro para chatear y hacer amigos en español.</p><br>
<hr>
<p><i class="fa fa-sitemap"></i> Salas de chat relacionadas con <?php echo $texto ?> :</p>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/amigos.php" title="Chat de Amigos"><i class="fa fa-slack" aria-hidden="true"></i> Amigos</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/amor.php" title="Chat de Amor"><i class="fa fa-slack" aria-hidden="true"></i> Amor</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/chatear.php" title="Chat de Chatear"><i class="fa fa-slack" aria-hidden="true"></i> Chatear</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/citas.php" title="Chat de Citas"><i class="fa fa-slack" aria-hidden="true"></i> Citas</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/latinos.php" title="Chat de Latinos"><i class="fa fa-slack" aria-hidden="true"></i> Latinos</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/ligar.php" title="Chat de Ligar"><i class="fa fa-slack" aria-hidden="true"></i> Ligar</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/terra.php" title="Chat de Terra"><i class="fa fa-slack" aria-hidden="true"></i> Terra</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/latinchat.php" title="Chat de Latinchat"><i class="fa fa-slack" aria-hidden="true"></i> Latinchat</a></p>
              </div>
</div>
<?php include "includes/destacadas.php"; ?>
</div>
</div>
</div>
 <?php include "includes/footer.php"; ?>
</body>
</html>