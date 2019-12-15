<h1> Solicitud de contacto </h1>

<?php
$Consulta= $_POST["Consulta"];
$NuevaConsulta= filter_var($Consulta, FILTER_SANITIZE_STRING);
?>

El cliente <?php echo $_POST["Nombre"]?> <?php echo $_POST["Apellido"]?> ha solicitado el tipo de consulta: <?php echo $_POST["TipoConsulta"]?> 
<br>
<br>La consulta es la siguiente:<br>
<br> <?php echo $NuevaConsulta?>
<br><br>
<br>Favor de comunicarse al mail que dejo a continuación:
<?php echo $_POST["E-mail"]?>
