<?php

include "conection.php";

$selection="select * from Altavoces where IDProducto='".$_POST['numidentiproducto']."'";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Especificaciones <?php echo $_POST['nombreproducto']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FileEspeCSSITShop/especifiestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1altavoces">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tablealtavoces">
<tr>
<th class="thaltavoces" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thaltavoces">IDProducto</th>
<td class="tdaltavoces"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Nombre</th>
<td class="tdaltavoces"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Tipo</th>
<td class="tdaltavoces"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Modelo</th>
<td class="tdaltavoces"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Marca</th>
<td class="tdaltavoces"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Potencia Estimada De RMS</th>
<td class="tdaltavoces"><?php echo $rows['Potencia_Estimada_De_RMS']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Rango De Frecuencia</th>
<td class="tdaltavoces"><?php echo $rows['Rango_De_Frecuencia']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Tipo De Conectividad</th>
<td class="tdaltavoces"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Tipo De Interfaz De Altavoces</th>
<td class="tdaltavoces"><?php echo $rows['Tipo_De_Interfaz_De_Altavoces']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Alimentacio&#769;n</th>
<td class="tdaltavoces"><?php echo $rows['Alimentacion']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Recomendacio&#769;n De Uso</th>
<td class="tdaltavoces"><?php echo $rows['Recomendacion_De_Uso']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Nu&#769;mero De Altavoces</th>
<td class="tdaltavoces"><?php echo $rows['Numero_De_Altavoces']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Ubicacio&#769;n</th>
<td class="tdaltavoces"><?php echo $rows['Ubicacion']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Tweeter</th>
<td class="tdaltavoces"><?php echo $rows['Tweeter']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Interruptor De Encendido Y Apagado Integrado</th>
<td class="tdaltavoces"><?php echo $rows['Interruptor_De_Encendido_Y_Apagado_Integrado']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Control De Volumen</th>
<td class="tdaltavoces"><?php echo $rows['Control_De_Volumen']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Ajustes De Bajo</th>
<td class="tdaltavoces"><?php echo $rows['Ajustes_De_Bajo']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Ancho</th>
<td class="tdaltavoces"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Altura</th>
<td class="tdaltavoces"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Profundidad</th>
<td class="tdaltavoces"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Peso</th>
<td class="tdaltavoces"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thaltavoces">Color</th>
<td class="tdaltavoces"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonaltavoces" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
