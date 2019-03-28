<?php

include "conection.php";

$selection="select * from Ratones where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1ratones">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tableratones">
<tr>
<th class="thratones" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thratones">IDProducto</th>
<td class="tdratones"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thratones">Nombre</th>
<td class="tdratones"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thratones">Tipo</th>
<td class="tdratones"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thratones">Modelo</th>
<td class="tdratones"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thratones">Marca</th>
<td class="tdratones"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thratones">Tipo De Conectividad</th>
<td class="tdratones"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
</tr>
<tr>
<th class="thratones">Tipo De Interfaz</th>
<td class="tdratones"><?php echo $rows['Tipo_De_Interfaz']; ?></td>
</tr>
<tr>
<th class="thratones">Utilizacio&#769;n</th>
<td class="tdratones"><?php echo $rows['Utilizacion']; ?></td>
</tr>
<tr>
<th class="thratones">Tipo De Botones</th>
<td class="tdratones"><?php echo $rows['Tipo_De_Botones']; ?></td>
</tr>
<tr>
<th class="thratones">Cantidad De Botones</th>
<td class="tdratones"><?php echo $rows['Cantidad_De_Botones']; ?></td>
</tr>
<tr>
<th class="thratones">Tipo De Desplazamiento</th>
<td class="tdratones"><?php echo $rows['Tipo_De_Desplazamiento']; ?></td>
</tr>
<tr>
<th class="thratones">Tipo De Tecnologi&#769;a De Deteccio&#769;n De Movimientos</th>
<td class="tdratones"><?php echo $rows['Tipo_De_Tecnologia_De_Deteccion_De_Movimientos']; ?></td>
</tr>
<tr>
<th class="thratones">Resolucio&#769;n De Movimiento</th>
<td class="tdratones"><?php echo $rows['Resolucion_De_Movimiento']; ?></td>
</tr>
<tr>
<th class="thratones">Uso Recomendado</th>
<td class="tdratones"><?php echo $rows['Uso_Recomendado']; ?></td>
</tr>
<tr>
<th class="thratones">Cantidad De Ruedas De Desplazamiento</th>
<td class="tdratones"><?php echo $rows['Cantidad_De_Ruedas_De_Desplazamiento']; ?></td>
</tr>
<tr>
<th class="thratones">Fuente De Energi&#769;a</th>
<td class="tdratones"><?php echo $rows['Fuente_De_Energia']; ?></td>
</tr>
<tr>
<th class="thratones">Factor De Forma</th>
<td class="tdratones"><?php echo $rows['Factor_De_Forma']; ?></td>
</tr>
<tr>
<th class="thratones">Ancho</th>
<td class="tdratones"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thratones">Altura</th>
<td class="tdratones"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thratones">Profundidad</th>
<td class="tdratones"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thratones">Peso</th>
<td class="tdratones"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thratones">Sistema Operativo Compatible</th>
<td class="tdratones"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
</tr>
<tr>
<th class="thratones">Color</th>
<td class="tdratones"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonratones" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
