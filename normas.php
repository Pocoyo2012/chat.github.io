<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<?php $texto = "Normas";?>
<?php $imagen = "irc";?>
<title><?php echo $texto ?> IRC</title>
<meta name="description" content="<?php echo $texto ?> de Irc mas utilizados en nuestro chat.">
<?php include "includes/encabezadogeneral.php"; ?>
</head>
<body> 
<?php include "includes/menu.php"; ?>
<div id="content">
<div class="container">

<h1 style="margin-top:-1px;"><?php echo $texto ?> IRC</h1>
<p>Normas IRC Hispanos.</p>
<ol class="breadcrumb" style="margin-top:15px;">
<?php include "includes/web.php"; ?>
<li class="active"><?php echo $texto ?></li>
</ol>
<div class="row">
<hr>
<?php include "includes/anuncio.php"; ?>
<hr>
<div class="row">
<h2>Normas básicas para la convivencia en las salas:</h2>
<ul>
  <li><img src="https://www.<?php echo $web ?>/images/normas.webp" width="123" height="92" style="float:right;" />Lo principal en el chat es el respeto, no hagas nada que no quisieras que te hicieran.</li>
  <li>Esta prohibido molestar a los usuarios en general, esto implica:
    <ul>
      <ul>
        <li>Insultos</li>
        <li>Racismo</li>
        <li>Discusiones</li>
        <li>Chantajes</li>
      </ul>
    </ul>
  </li>
  <li>Cuando llegas a una sala nueva, sigue la conversación durante unos segundos y enterate de la temática antes de participar.</li>
  <li>Esta prohibido distribuir material ilegal a través del:
    <ul>
      <ul>
        <li>Descargas ilegales</li>
        <li>Pornografia</li>
        <li>Cracks</li>
      </ul>
    </ul>
  </li>
</ul>
<p>Cualquier falta de las normas podrá conllevar la expulsión de la sala, del chat globalmente y en caso de que sea delito flagrante se comunicará a las autoridades pertinentes y se colaborará en todo lo posible.</p>

</div>
</div> 
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>

