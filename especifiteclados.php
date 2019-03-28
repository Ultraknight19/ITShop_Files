<?php

include "conection.php";

$selection="select * from Teclados where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1teclados">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tableteclados">
<tr>
<th class="thteclados" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thteclados">IDProducto</th>
<td class="tdteclados"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thteclados">Nombre</th>
<td class="tdteclados"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thteclados">Tipo</th>
<td class="tdteclados"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thteclados">Modelo</th>
<td class="tdteclados"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thteclados">Marca</th>
<td class="tdteclados"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thteclados">Formato De Teclado</th>
<td class="tdteclados"><?php echo $rows['Formato_De_Teclado']; ?></td>
</tr>
<tr>
<th class="thteclados">Estilo De Teclado</th>
<td class="tdteclados"><?php echo $rows['Estilo_De_Teclado']; ?></td>
</tr>
<tr>
<th class="thteclados">Concentrador USB Incorporado</th>
<td class="tdteclados"><?php echo $rows['Concentrador_USB_Incorporado']; ?></td>
</tr>
<tr>
<th class="thteclados">Descansa Mun&#771;ecas Incorporadas</th>
<td class="tdteclados"><?php echo $rows['Descansa_Munecas_Incorporadas']; ?></td>
</tr>
<tr>
<th class="thteclados">Cantidad De Teclas</th>
<td class="tdteclados"><?php echo $rows['Cantidad_De_Teclas']; ?></td>
</tr>
<tr>
<th class="thteclados">Teclas Windows Incorporadas</th>
<td class="tdteclados"><?php echo $rows['Teclas_Windows_Incorporadas']; ?></td>
</tr>
<tr>
<th class="thteclados">Teclado Nume&#769;rico Incorporado</th>
<td class="tdteclados"><?php echo $rows['Teclado_Numerico_Incorporado']; ?></td>
</tr>
<tr>
<th class="thteclados">Teclas Multimedia Incorporadas</th>
<td class="tdteclados"><?php echo $rows['Teclas_Multimedia_Incorporadas']; ?></td>
</tr>
<tr>
<th class="thteclados">Tipo De Disen&#771;o De Teclado</th>
<td class="tdteclados"><?php echo $rows['Tipo_De_Diseno_De_Teclado']; ?></td>
</tr>
<tr>
<th class="thteclados">Idioma De Teclado</th>
<td class="tdteclados"><?php echo $rows['Idioma_De_Teclado']; ?></td>
</tr>
<tr>
<th class="thteclados">Tipo De Conectividad</th>
<td class="tdteclados"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
</tr>
<tr>
<th class="thteclados">Tipo De Interfaz</th>
<td class="tdteclados"><?php echo $rows['Tipo_De_Interfaz']; ?></td>
</tr>
<tr>
<th class="thteclados">Utilizacio&#769;n</th>
<td class="tdteclados"><?php echo $rows['Utilizacion']; ?></td>
</tr>
<tr>
<th class="thteclados">Uso Recomendado</th>
<td class="tdteclados"><?php echo $rows['Uso_Recomendado']; ?></td>
</tr>
<tr>
<th class="thteclados">Dispositivo Apuntador Incorporado</th>
<td class="tdteclados"><?php echo $rows['Dispositivo_Apuntador_Incorporado']; ?></td>
</tr>
<tr>
<th class="thteclados">Lector De Huella Digital Incorporado</th>
<td class="tdteclados"><?php echo $rows['Lector_De_Huella_Digital_Incorporado']; ?></td>
</tr>
<tr>
<th class="thteclados">Retroiluminacio&#769;n</th>
<td class="tdteclados"><?php echo $rows['Retroiluminacion']; ?></td>
</tr>
<tr>
<th class="thteclados">Alimentacio&#769;n</th>
<td class="tdteclados"><?php echo $rows['Alimentacion']; ?></td>
</tr>
<tr>
<th class="thteclados">Rato&#769;n Incluido</th>
<td class="tdteclados"><?php echo $rows['Raton_Incluido']; ?></td>
</tr>
<tr>
<th class="thteclados">Ancho</th>
<td class="tdteclados"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thteclados">Altura</th>
<td class="tdteclados"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thteclados">Profundidad</th>
<td class="tdteclados"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thteclados">Peso</th>
<td class="tdteclados"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thteclados">Sistema Operativo Compatible</th>
<td class="tdteclados"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
</tr>
<tr>
<th class="thteclados">Color</th>
<td class="tdteclados"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonteclados" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
