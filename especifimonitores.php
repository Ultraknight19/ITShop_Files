<?php

include "conection.php";

$selection="select * from Monitores where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1monitores">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);
?>
<table class="tablemonitores">
<tr>
<th class="thmonitores" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thmonitores">IDProducto</th>
<td class="tdmonitores"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thmonitores">Nombre</th>
<td class="tdmonitores"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thmonitores">Tipo</th>
<td class="tdmonitores"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thmonitores">Modelo</th>
<td class="tdmonitores"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thmonitores">Marca</th>
<td class="tdmonitores"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thmonitores">Taman&#771;o De Pantalla</th>
<td class="tdmonitores"><?php echo $rows['Tamano_De_Pantalla']; ?></td>
</tr>
<tr>
<th class="thmonitores">Tipo De Relacio&#769;n De Aspecto</th>
<td class="tdmonitores"><?php echo $rows['Tipo_De_Relacion_De_Aspecto']; ?></td>
</tr>
<tr>
<th class="thmonitores">Tipo De Panel De Pantalla</th>
<td class="tdmonitores"><?php echo $rows['Tipo_De_Panel_De_Pantalla']; ?></td>
</tr>
<tr>
<th class="thmonitores">Tecnologi&#769;a De Visualizacio&#769;n De Pantalla</th>
<td class="tdmonitores"><?php echo $rows['Tecnologia_De_Visualizacion_De_Pantalla']; ?></td>
</tr>
<tr>
<th class="thmonitores">Resolucio&#769;n De Pantalla</th>
<td class="tdmonitores"><?php echo $rows['Resolucion_De_Pantalla']; ?></td>
</tr>
<tr>
<th class="thmonitores">Capacidad De Brillo</th>
<td class="tdmonitores"><?php echo $rows['Capacidad_De_Brillo']; ?></td>
</tr>
<tr>
<th class="thmonitores">Tipo De Contraste</th>
<td class="tdmonitores"><?php echo $rows['Tipo_De_Contraste']; ?></td>
</tr>
<tr>
<th class="thmonitores">Tiempo De Respuesta</th>
<td class="tdmonitores"><?php echo $rows['Tiempo_De_Respuesta']; ?></td>
</tr>
<tr>
<th class="thmonitores">A&#769;ngulo De Visio&#769;n Horizontal</th>
<td class="tdmonitores"><?php echo $rows['Angulo_De_Vision_Horizontal']; ?></td>
</tr>
<tr>
<th class="thmonitores">A&#769;ngulo De Visio&#769;n Vertical</th>
<td class="tdmonitores"><?php echo $rows['Angulo_De_Vision_Vertical']; ?></td>
</tr>
<tr>
<th class="thmonitores">Cantidad De Colores De Pantalla</th>
<td class="tdmonitores"><?php echo $rows['Cantidad_De_Colores_De_Pantalla']; ?></td>
</tr>
<tr>
<th class="thmonitores">Puertos E Interfaces</th>
<td class="tdmonitores"><?php echo $rows['Puertos_E_Interfaces']; ?></td>
</tr>
<tr>
<th class="thmonitores">Consumo Energe&#769;tico</th>
<td class="tdmonitores"><?php echo $rows['Consumo_Energetico']; ?></td>
</tr>
<tr>
<th class="thmonitores">Sintonizador De TV Integrado</th>
<td class="tdmonitores"><?php echo $rows['Sintonizador_De_TV_Integrado']; ?></td>
</tr>
<tr>
<th class="thmonitores">Ancho</th>
<td class="tdmonitores"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thmonitores">Altura</th>
<td class="tdmonitores"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thmonitores">Profundidad</th>
<td class="tdmonitores"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thmonitores">Peso</th>
<td class="tdmonitores"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thmonitores">Color</th>
<td class="tdmonitores"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonmonitores" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
