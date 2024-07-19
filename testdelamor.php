<!DOCTYPE html>
<html lang=es>
<head>
<?php include "includes/inicio.php"; ?>
<?php $texto = "Test de Amor";?>
<?php $imagen = "amor";?>
<title><?php echo $texto ?> compatibilidad</title>
<meta name="description" content="<?php echo $texto ?>, compatibilidad de amor entre tu pareja y tu. Conoce que porcentaje de amor hay entre ustedes o haz predicciones." />
<?php include "includes/encabezadogeneral.php"; ?>
</head>
<body> 
<?php include "includes/menu.php"; ?>
<div id="content">
<div class="container">

<h1 style="margin-top:-1px;"><?php echo $texto ?></h1>
<p>Compatibilidad <?php echo $texto ?>.</p>
<ol class="breadcrumb" style="margin-top:15px;">
<?php include "includes/web.php"; ?>
<li class="active"><?php echo $texto ?></li>
</ol>
<div class="row">
<hr>
<?php include "includes/anuncio.php"; ?>
<hr>
<div class="row">
<h2>Comprueba la compatibilidad con tu pareja</h2>
<div class="col-md-8 col-md-offset-2">
<script LANGUAGE="JavaScript">
function calc() {
var randomnumber=Math.floor(Math.random()*101)
document.loveform.output.value=randomnumber+"%";
}
</script>
<FORM name="loveform">
  <P><INPUT value="" name="name3" type="text" size="15">  + <INPUT
  value="" name="name4" type="text" size="15">  = <INPUT value name="output" type="text" size="6"> <BR>
  <BR>
  <INPUT value="Calcular" name="calculate" type="button" value="calculate"
  onclick="calc()"> </P>
</FORM>
</div>
</div>
<p style="font-size:20px">Encuentra la compatibilidad de amor entre la persona amada de forma gratuita. Escribe los dos nombres en los recuadros y aprieta en el boton para descubrir los resultados de amor gratis.</p>

<p style="font-size:20px">Se dice que el amor es un sentimiento que esconde emociones muy profundas y poderosas, que una vida sin amor es como un año sin verano.</p>

<p style="font-size:20px">El amor es confianza, respeto, cariño y pasión, el amor también es admiración, entrega, sacrificio y consideración.</p>

 <p style="font-size:20px">El amor no entiende de dudas y egoísmos, de mentiras e irrespetos. </p>


<p style="font-size:20px">El amor es cosa de dos, de dos seres que buscan amistad, cariño y sueños en común.
</p>
</div>
</div> 
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>

