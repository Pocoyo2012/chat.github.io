<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<title>Ayuda IRC. Comandos de IRC y ayuda general</title>
<meta name="description" content="">
<meta name="keywords" content="chat, chatear, salas, gratis, gente, irc, contactos, español, amistad, ligar, mujeres, amor"/>
<?php include "includes/encabezadogeneral.php"; ?>
</head>
<body> 
<?php include "includes/menu.php"; ?>
<div id="content">
<div class="panel panel-default pull-right">
<div class="panel-heading">Indice de contenidos</div>
<div class="panel-body">
<p><a href="ayuda.php#ip">Cual es mi IP</a></p>
<p><a href="ayuda.php#normas">Normas</a></p>
<p><a href="ayuda.php#moderadores">Normas moderadores</a></p>
<p><a href="ayuda.php#nick">Como registrar un nick</a></p>
<p><a href="ayuda.php#canal">Como registrar un canal</a></p>
<p><a href="ayuda.php#gline">Que es un gline</a></p>
<p><a href="ayuda.php#servicios">Servicios</a></p>
<p><a href="ayuda.php#comandos">Comandos básicos</a></p>
</div>
</div>
<h1>Ayuda</h1>
<h3><a name="ip"></a>¿Cual es tu IP?</h3>
<?php 
echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
?>
<a name="normas"><h2>Normas básicas para la convivencia en las salas:</h2></a>
<ul>
<li>Lo princial en el chat es el respeto, no hagas nada que no quisieras que te hicieran.</li>
<li>Esta prohibido molestar a los usuarios en general, esto implica:
<ul>
<ul>
<li>Insultos</li>
<li>Racismo</li>
<li>Discusiones</li>
<li>Chantajes</li>
<li>Solicitar menores</li>
</ul>
</ul>
</li>
<li>Cuando llegas a una sala nueva, sigue la conversación durante unos segundos y enterate de la temática antes de participar.</li>
<li>Esta prohibido distribuir material ilegal a través del chat:
<ul>
<ul>
<li>Descargas ilegales</li>
<li>Pornografia</li>
<li>Cracks</li>
</ul>
</ul>
</li>
<li>Utilizar mayúsculas en el chat es equiparable a gritar, por favor limitad su uso.</li>
<li>Es de mala educación repetir constantemente el mismo texto, trata de crear una conversación.</li>
</ul>
<p>Cualquier falta de las normas podrá conllevar la expulsión de la sala, del chat globalmente y en caso de que sea delito flagrante se comunicará a las autoridades pertinentes y se colaborará en todo lo posible.</p>
<a name="moderadores"><h2>Normas para moderadores #zonalatina</h2></a>
<ul>
<li>El nick es único e intrasferible, no se puede compartir con otros usuarios</li>
<li>Solamente se puede moderar vía web, queda prohibido el uso de cualquier software (ircap, mirc..) o automatismo</li>
<li>La expulsión es el castigo más severo, cualquier abuso será penalizado.</li>
<li>NO serán motivos de expulsión</li>
<ul>
<ul>
<li>1. Cualquier uso de la webcam mientras este en PRIVADA</li>
<li>2. Cualquier nick del usuario, SALVO que haga solicitudes en sala no permitidas</li>
</ul>
</ul>
</ul>
<p>Cualquier falta de las normas podrá conllevar la perdida del estatus de moderador de forma inmediata, sin necesidad de comunicación.</p>
<a name="nick"></a>
<h3>¿Como registrar tu nick?</h3>
<p>En nuestra red puedes registrar tu nick o alias gratuítamente. Con el registrado te permite evitar que otros usuarios hagan uso de él.
Si posees un nick registado puedes optar a entrar a multitud de canales que únicamente permiten el acceso a usuarios registrados en la red.
Puedes moderar canales, realizar invitaciones, etc.</p>
<p>Para poder registrar tu nick debes poseer una cuenta de correo electrónica (puede ser gratuíta).
Una vez que tengas la cuenta de correo y estés conectado en la red, escribes el siguiente comando:</p>
<pre><a href="https://chathispano.com/nick/register">https://www.<?php echo $web ?>/registro</a></pre>
<a name="canal"><h2>¿Como registrar tu propio CANAL?</h2></a>
<p align="left"> Para poder registar tu propio canal es que debes tener el nick registrado.
Una vez que tengas el nick registrado debes escribir el siguiente comando:</p>
<pre>....</pre>
<a name="gline"><h2>¿Que significa G-LINED?</h2></a>
<p>Un G-LINE, GLINED, G-LINED.. es una prohibición de acceder a una red de chat globalmente. No podrás conectar con la red y por lo tanto con ninguno de los canales de esta misma. Esta es expulsión es puesta por algun operador de los servicios de la red o por algun automatismo que previene ataques. El G-LINE viene acompañado de un motivo que será visible junto a la duración del mismo. A veces estas expulsiones pueden ser debidas a que el sistema detecta que su ordenador está infectado. Si cree que su expulsión se trata de un error consulte en <a href="https://chathispano.com/gline/" target="_blank" rel="nofollow">borrar gline</a>.</p>
<a name="servicios"><h2>¿Que mas servicios hay disponibles?</h2></a>
<p>Para poder ver todos los comandos a los que usted tiene acceso debe escribir los siguientes comandos:</p>
<pre>
/msg NiCK help<br/>
/msg CHaN help<br/>
/msg MeMo help<br/>
/msg IpVirtual help
</pre>
<a name="comandos"><h2>Comandos básicos de IRC:</h2></a>
<p><strong>JOIN</strong>: este comando sirve para contectarse a una sala en particular.</p>
<pre>/join #zonalatina</pre>
<p><strong>PART</strong>: comando para abandonar una sala en IRC</p>
<pre>/part #zonalatina</pre>
<p><strong>MSG</strong>: comando para enviar un texto</p>
<pre>/msg #zonalatina hola a todos</pre>
<p><strong>AME</strong>: enviar una accion a todos los canales donde te encuentras</p>
<pre>/ame hola a todos</pre>
<p><strong>AWAY</strong>: te marca como ausente en el chat</p>
<pre>/away estoy en el cine</pre>
<p>para eliminar el estado de away tan solo se escribe el comando</p>
<pre>/away</pre>
<p><strong>HOP</strong>: reentras en un canal automaticamente, join + part</p>
<pre>/hop #zonalatina</pre>
<p><strong>NOTICE</strong>: envia un mensaje privado sin abrir query o a un canal</p>
<pre>/notice Juan que tal estas</pre>
<p><strong>ONOTICE</strong>: si eres @ de un canal puedes comunicarte privadamente con ellos</p>
<pre>/onotice este mensaje solo lo leen los @</pre>
<p><strong>QUERY</strong>: abre una conversación privada a un usuario</p>
<pre>/query Juan</pre>
<p><strong>QUIT</strong>: te desconecta del chat con un mensaje opcional</p>
<pre>/quit hasta mañana amigos</pre>
<p><strong>IGNORE</strong>: ignora a un nick, dejas de recibir mensajes de este usuario</p>
<pre>/ignore Juan</pre>
<p>para eliminar este ignore al usuario el comando es</p>
<pre>/ignore -r Juan</pre>
<p><strong>KICK</strong>: expulsa a un usuario de la sala, solo si eres @</p>
<pre>/kick #zonalatina Juan molestias</pre>
<p><strong>MODE</strong>: cambia los modos del canal o a un nick</p>
<pre>/mode #zonalatina +b Juan</pre>
<pre>/mode #zonalatina +s </pre>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>