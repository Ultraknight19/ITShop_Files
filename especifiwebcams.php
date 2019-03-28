<?php

include "conection.php";

$selection="select * from Webcams where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1webcams">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tablewebcams">
<tr>
<th class="thwebcams" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thwebcams">IDProducto</th>
<td class="tdwebcams"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thwebcams">Nombre</th>
<td class="tdwebcams"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thwebcams">Tipo</th>
<td class="tdwebcams"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thwebcams">Modelo</th>
<td class="tdwebcams"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thwebcams">Marca</th>
<td class="tdwebcams"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thwebcams">Resolucio&#769;n De Imagen</th>
<td class="tdwebcams"><?php echo $rows['Resolucion_De_Imagen']; ?></td>
</tr>
<tr>
<th class="thwebcams">Resolucio&#769;n De Vi&#769;deo</th>
<td class="tdwebcams"><?php echo $rows['Resolucion_De_Video']; ?></td>
</tr>
<tr>
<th class="thwebcams">Campo De Visio&#769;n Diagonal</th>
<td class="tdwebcams"><?php echo $rows['Campo_De_Vision_Diagonal']; ?></td>
</tr>
<tr>
<th class="thwebcams">Tipo De Enfoque</th>
<td class="tdwebcams"><?php echo $rows['Tipo_De_Enfoque']; ?></td>
</tr>
<tr>
<th class="thwebcams">Tipo De Conectividad</th>
<td class="tdwebcams"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
</tr>
<tr>
<th class="thwebcams">Tipo De Interfaz</th>
<td class="tdwebcams"><?php echo $rows['Tipo_De_Interfaz']; ?></td>
</tr>
<tr>
<th class="thwebcams">Longitud De Cable</th>
<td class="tdwebcams"><?php echo $rows['Longitud_De_Cable']; ?></td>
</tr>
<tr>
<th class="thwebcams">Botones</th>
<td class="tdwebcams"><?php echo $rows['Botones']; ?></td>
</tr>
<tr>
<th class="thwebcams">Micro&#769;fono Incorporado</th>
<td class="tdwebcams"><?php echo $rows['Microfono_Incorporado']; ?></td>
</tr>
<tr>
<th class="thwebcams">Ancho</th>
<td class="tdwebcams"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thwebcams">Altura</th>
<td class="tdwebcams"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thwebcams">Profundidad</th>
<td class="tdwebcams"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thwebcams">Peso</th>
<td class="tdwebcams"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thwebcams">Sistema Operativo Compatible</th>
<td class="tdwebcams"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
</tr>
<tr>
<th class="thwebcams">Color</th>
<td class="tdwebcams"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonwebcams" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
