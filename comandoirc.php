<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<?php $texto = "Comandos";?>
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
<p>Comandos IRC sencillos.</p>
<ol class="breadcrumb" style="margin-top:15px;">
<?php include "includes/web.php"; ?>
<li class="active"><?php echo $texto ?></li>
</ol>
<div class="row">
<hr>
<?php include "includes/anuncio.php"; ?>
<hr>
<div class="row">
<h2 style="margin-top:0px;">Indice de contenidos</h2>
<ul>
  <li>Como registrar un nick</li>
  <li>Como registrar un canal</li>
  <li>Servicios</li>
  <li>Comandos básicos</li>
</ul>
<h2>¿Como registrar tu NICK? </h1>
<p>En nuestra red puedes registrar tu nick o alias gratuítamente. Con el registrado te permite evitar que otros usuarios hagan uso de él. 
  Si posees un nick registado puedes optar a entrar a multitud de canales  que únicamente permiten el acceso a usuarios registrados en la red. 
  Puedes moderar canales, realizar invitaciones, etc.</p>
<p>Para poder registrar tu nick debes poseer una cuenta de correo electrónica (puede ser gratuíta).
Una vez que tengas la cuenta de correo y estés conectado en la red, escribes el siguiente comando:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg nick register <strong>tucorreo@hotmail.com</strong></p>
</div>
<p align="left">    Cambiando sólo donde pone "tucorreo@hotmail.com&quot; por tu dirección de correo electrónico.
  Ejemplos:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg nick register juan@hotmail.com <br />
/msg nick register pedro@yahoo.es</p>
</div>
<p align="left">Una vez que escribas este comando, te llegará una contraseña temporal a tu cuenta de correo.
Podrás usar esa, pero si no te gusta puedes cambiarla escribiendo el siguiente comando:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg nick set password <strong>nuevaclave</strong></p>
</div>
<p align="left">Cambiando sólo donde pone &quot;nueva_clave" por la clave que quieres poner a tu nick.
  Ejemplo:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg nick set password <strong>casa</strong></p>
</div>
<h2 align="left">¿Como registrar tu propio CANAL?</h2>
<p align="left"> Para poder registar tu propio canal es que debes tener el nick registrado. 
  Una vez que tengas el nick registrado debes escribir el siguiente comando:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg creg registra #canal contraseña seccion descripcion</p>
</div>
<p> Ejemplo Para seleccionar tu seccion:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg creg seccion</p></div>
<p> Ejemplo:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg creg registra #futbol_mibarrio 123456 AMO Canal para conocer gente y hablar de futbol</p>
</div>
<h2 align="left">¿Que mas servicios hay disponibles?</h2>
<p align="left">Para poder ver todos los comandos a los que usted tiene acceso debe escribir los siguientes comandos:</p>
<div style="background-color:#FFC; font-family:'Lucida Console', Monaco, monospace">
  <p>/msg NiCK help<br />
/msg CHaN help<br />
/msg CReG help<br />
/msg MeMo help<br />
  /msg IpVirtual help</p>
</div>

<a name="comandos"></a><h2 align="left">Comandos básicos de IRC:</h2>
<ul>
  <li>/join #canal -&gt; [ entras en un canal : /join #chatzona ]</li>
  <li> /part #canal -&gt; [ sales de un canal : /part #chatzona ]</li>
  <li>/msg &lt;nick\#canal&gt; &lt;texto&gt; -&gt; [ envias un mensaje a un nick\#canal ]</li>
  <li>/ame &lt;texto&gt; -&gt; [ envias el mismo texto a todos los canales en los que estas&gt;</li>
  <li>/away &lt;motivo&gt; -&gt; [ te pones away ( ausente ) con un motivo ]</li>
  <li>/away -&gt; [ dejas de estar ausente ]</li>
  <li>/hop -&gt; [ reentras en un canal ]</li>
  <li>/notice &lt;nick\#canal&gt; &lt;texto&gt; -&gt; [ envias un notice a un nick\#canal ]</li>
  <li>/onotice &lt;texto&gt; -&gt; [ envias un notice a los @ del canal ]</li>
  <li>/query &lt;nick&gt; -&gt; [ abres un privado a un nick ]</li>
  <li>/quit &lt;motivo&gt; -&gt; [ te desconectas del servidor con un motivo ] </li>
  <li>/ignore &lt;nick&gt; -&gt; [ ignoras a un nick ]</li>
  <li>/ignore -r &lt;nick&gt; -&gt; [ dejas de ignorar a un nick ]</li>
  <li>/kick &lt;#canal&gt; &lt;nick&gt; &lt;motivo&gt; -&gt; [ expulsas a un nick de un canal con un motivo ( solo para @ ) ]</li>
  <li>/mode #canal +b &lt;nick&gt; -&gt; [ pones un ban a un nick en un canal ]</li>
  <li>/mode #canal +\-&lt;elmododo&gt; [ pones o quitas ( +\- ) un modo en un canal ]</li>
</ul>

</div>
</div> 
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>

