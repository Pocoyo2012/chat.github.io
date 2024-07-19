<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<?php $texto = "Edades";?>
<?php $imagen = "edades";?>
<title>Chatear por <?php echo $texto ?> sin registro</title>
<meta name="description" content="Chatea desde nuestro canal de chat por <?php echo $texto ?>. Selecciona tu canal que desees y conéctate para chatear y hacer amistad.">
<?php include "includes/encabezadogeneral.php"; ?>
</head>
<body> 
<?php include "includes/menu.php"; ?>
<div id="content"><div class="container">
<div class="row"> 
<div class="col-md-10">

<h1 style="margin-top:-1px;">  Chat <?php echo $texto ?> gratis</h1>
<p>Chatear con personas de tu edad gratis sin registrarte.</p>
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

<p style="font-size:16px"> <strong>Chat de <?php echo $texto ?></strong><br />Encuentra amigos de tu edad. Hacer amistad de tu país o ciudad gratis. Encuentra latinos de tu misma edad. Haz contactos interesantes. Conoce gente de todo el mundo. Chatear con hombres y mujeres de tu edad en tu idioma.</p>
<hr>
<p><i class="fa fa-sitemap"></i> Salas de chat relacionadas con <?php echo $texto ?> :</p>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/adolescentes.php" title="Chat de Adolescentes"><i class="fa fa-slack" aria-hidden="true"></i> Adolescentes</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/de-12-a-15.php" title="Chat de De 12 a 15"><i class="fa fa-slack" aria-hidden="true"></i> De 12 a 15</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/de-13-a-18.php" title="Chat de De 13 a 18"><i class="fa fa-slack" aria-hidden="true"></i> De 13 a 18</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/de-15-a-20.php" title="Chat de De 15 a 20"><i class="fa fa-slack" aria-hidden="true"></i> De 15 a 20</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/de-18-a-25.php" title="Chat de De 18 a 25"><i class="fa fa-slack" aria-hidden="true"></i> De 18 a 25</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/de-25-a-35.php" title="Chat de De 25 a 35"><i class="fa fa-slack" aria-hidden="true"></i> De 25 a 35</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/mas-de-18.php" title="Chat de Mas de 18"><i class="fa fa-slack" aria-hidden="true"></i> Mas de 18</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/mas-de-20.php" title="Chat de Mas de 20"><i class="fa fa-slack" aria-hidden="true"></i> Mas de 20</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/mas-de-30.php" title="Chat de Mas de 30"><i class="fa fa-slack" aria-hidden="true"></i> Mas de 30</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/mas-de-40.php" title="Chat de Mas de 40"><i class="fa fa-slack" aria-hidden="true"></i> Mas de 40</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/mas-de-50.php" title="Chat de Mas de 50"><i class="fa fa-slack" aria-hidden="true"></i> Mas de 50</a></p>
              </div>
<div class="col-xs-6 col-sm-6 col-md-3"> 
                <p><a href="https://www.<?php echo $web ?>/chat/mas-de-60.php" title="Chat de Mas de 60"><i class="fa fa-slack" aria-hidden="true"></i> Mas de 60</a></p>
              </div>
</div>
<?php include "includes/destacadas.php"; ?>
</div>
</div>
</div>
 <?php include "includes/footer.php"; ?>
</body>
</html>