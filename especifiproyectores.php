<?php

include "conection.php";

$selection="select * from Proyectores where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1proyectores">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tableproyectores">
<tr>
<th class="thproyectores" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thproyectores">IDProducto</th>
<td class="tdproyectores"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thproyectores">Nombre</th>
<td class="tdproyectores"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tipo</th>
<td class="tdproyectores"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thproyectores">Modelo</th>
<td class="tdproyectores"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thproyectores">Marca</th>
<td class="tdproyectores"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thproyectores">Capacidad De Brillo</th>
<td class="tdproyectores"><?php echo $rows['Capacidad_De_Brillo']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tipo De Tecnologi&#769;a</th>
<td class="tdproyectores"><?php echo $rows['Tipo_De_Tecnologia']; ?></td>
</tr>
<tr>
<th class="thproyectores">Resolucio&#769;n Original</th>
<td class="tdproyectores"><?php echo $rows['Resolucion_Original']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tipo De Contraste</th>
<td class="tdproyectores"><?php echo $rows['Tipo_De_Contraste']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tipo De Relacio&#769;n De Aspecto</th>
<td class="tdproyectores"><?php echo $rows['Tipo_De_Relacion_De_Aspecto']; ?></td>
</tr>
<tr>
<th class="thproyectores">Capacidad De Compatibilidad De Taman&#771;o De Pantalla</th>
<td class="tdproyectores"><?php echo $rows['Capacidad_De_Compatibilidad_De_Tamano_De_Pantalla']; ?></td>
</tr>
<tr>
<th class="thproyectores">Distancia De Proyeccio&#769;n Del Objetivo</th>
<td class="tdproyectores"><?php echo $rows['Distancia_De_Proyeccion_Del_Objetivo']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tipo De Alcance De Zoom</th>
<td class="tdproyectores"><?php echo $rows['Tipo_De_Alcance_De_Zoom']; ?></td>
</tr>
<tr>
<th class="thproyectores">Cantidad De Colores</th>
<td class="tdproyectores"><?php echo $rows['Cantidad_De_Colores']; ?></td>
</tr>
<tr>
<th class="thproyectores">Taman&#771;o De Matriz</th>
<td class="tdproyectores"><?php echo $rows['Tamano_De_Matriz']; ?></td>
</tr>
<tr>
<th class="thproyectores">Correccio&#769;n Vertical De Keystone</th>
<td class="tdproyectores"><?php echo $rows['Correccion_Vertical_De_Keystone']; ?></td>
</tr>
<tr>
<th class="thproyectores">Funcio&#769;n 3D</th>
<td class="tdproyectores"><?php echo $rows['Funcion_3D']; ?></td>
</tr>
<tr>
<th class="thproyectores">Alta Definicio&#769;n Total</th>
<td class="tdproyectores"><?php echo $rows['Alta_Definicion_Total']; ?></td>
</tr>
<tr>
<th class="thproyectores">Formato De Vi&#769;deo Soportado</th>
<td class="tdproyectores"><?php echo $rows['Formato_De_Video_Soportado']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tarjeta De Lectura Integrada</th>
<td class="tdproyectores"><?php echo $rows['Tarjeta_De_Lectura_Integrada']; ?></td>
</tr>
<tr>
<th class="thproyectores">Cantidad De La&#769;mparas</th>
<td class="tdproyectores"><?php echo $rows['Cantidad_De_Lamparas']; ?></td>
</tr>
<tr>
<th class="thproyectores">Potencia De Bombilla</th>
<td class="tdproyectores"><?php echo $rows['Potencia_De_Bombilla']; ?></td>
</tr>
<tr>
<th class="thproyectores">Altavoces Incorporados</th>
<td class="tdproyectores"><?php echo $rows['Altavoces_Incorporados']; ?></td>
</tr>
<tr>
<th class="thproyectores">Potencia Estimada De RMS</th>
<td class="tdproyectores"><?php echo $rows['Potencia_Estimada_De_RMS']; ?></td>
</tr>
<tr>
<th class="thproyectores">Conexio&#769;n Ethernet</th>
<td class="tdproyectores"><?php echo $rows['Conexion_Ethernet']; ?></td>
</tr>
<tr>
<th class="thproyectores">Intervalo De Temperatura Operativa</th>
<td class="tdproyectores"><?php echo $rows['Intervalo_De_Temperatura_Operativa']; ?></td>
</tr>
<tr>
<th class="thproyectores">Fuente De Energi&#769;a</th>
<td class="tdproyectores"><?php echo $rows['Fuente_De_Energia']; ?></td>
</tr>
<tr>
<th class="thproyectores">Consumo Energe&#769;tico</th>
<td class="tdproyectores"><?php echo $rows['Consumo_Energetico']; ?></td>
</tr>
<tr>
<th class="thproyectores">Intervalo De Longitud Focal</th>
<td class="tdproyectores"><?php echo $rows['Intervalo_De_Longitud_Focal']; ?></td>
</tr>
<tr>
<th class="thproyectores">Puertos E Interfaces</th>
<td class="tdproyectores"><?php echo $rows['Puertos_E_Interfaces']; ?></td>
</tr>
<tr>
<th class="thproyectores">Pantalla Incorporada</th>
<td class="tdproyectores"><?php echo $rows['Pantalla_Incorporada']; ?></td>
</tr>
<tr>
<th class="thproyectores">Ranura Para Cable De Seguridad Incorporada</th>
<td class="tdproyectores"><?php echo $rows['Ranura_Para_Cable_De_Seguridad_Incorporada']; ?></td>
</tr>
<tr>
<th class="thproyectores">Tipo De Ranura De Bloqueo Del Cable</th>
<td class="tdproyectores"><?php echo $rows['Tipo_De_Ranura_De_Bloqueo_Del_Cable']; ?></td>
</tr>
<tr>
<th class="thproyectores">Nivel Del Ruido</th>
<td class="tdproyectores"><?php echo $rows['Nivel_Del_Ruido']; ?></td>
</tr>
<tr>
<th class="thproyectores">HDCP Incorporado</th>
<td class="tdproyectores"><?php echo $rows['HDCP_Incorporado']; ?></td>
</tr>
<tr>
<th class="thproyectores">Exhibicio&#769;n En Pantalla</th>
<td class="tdproyectores"><?php echo $rows['Exhibicion_En_Pantalla']; ?></td>
</tr>
<tr>
<th class="thproyectores">Ancho</th>
<td class="tdproyectores"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thproyectores">Altura</th>
<td class="tdproyectores"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thproyectores">Profundidad</th>
<td class="tdproyectores"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thproyectores">Peso</th>
<td class="tdproyectores"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thproyectores">Color</th>
<td class="tdproyectores"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonproyectores" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
