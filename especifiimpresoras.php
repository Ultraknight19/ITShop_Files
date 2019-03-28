<?php

include "conection.php";

$selection="select * from Impresoras where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1impresoras">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tableimpresoras">
<tr>
<th class="thimpresoras" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thimpresoras">IDProducto</th>
<td class="tdimpresoras"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Nombre</th>
<td class="tdimpresoras"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Tipo</th>
<td class="tdimpresoras"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Modelo</th>
<td class="tdimpresoras"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Marca</th>
<td class="tdimpresoras"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Funcio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Funcion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Tecnologi&#769;a De Impresio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Tecnologia_De_Impresion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Velocidad De Impresio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Velocidad_De_Impresion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Volumen De Impresio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Volumen_De_Impresion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Resolucio&#769;n De Impresio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Resolucion_De_Impresion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Tiempo De Impresio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Tiempo_De_Impresion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Tipo De Conectividad</th>
<td class="tdimpresoras"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Capacidad De Memoria RAM</th>
<td class="tdimpresoras"><?php echo $rows['Capacidad_De_Memoria_RAM']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Gramaje De Papel</th>
<td class="tdimpresoras"><?php echo $rows['Gramaje_De_Papel']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Capacidad De Bandeja De Entrada De Papel</th>
<td class="tdimpresoras"><?php echo $rows['Capacidad_De_Bandeja_De_Entrada_De_Papel']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Capacidad De Bandeja De Salida De Papel</th>
<td class="tdimpresoras"><?php echo $rows['Capacidad_De_Bandeja_De_Salida_De_Papel']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Wi-Fi</th>
<td class="tdimpresoras"><?php echo $rows['Wi-Fi']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Wi-Fi Direct</th>
<td class="tdimpresoras"><?php echo $rows['Wi-Fi_Direct']; ?></td>
</tr>
<tr>
<th class="thimpresoras">NFC</th>
<td class="tdimpresoras"><?php echo $rows['NFC']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Cantidad De Cartuchos De Impresio&#769;n</th>
<td class="tdimpresoras"><?php echo $rows['Cantidad_De_Cartuchos_De_Impresion']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Consumo Energe&#769;tico</th>
<td class="tdimpresoras"><?php echo $rows['Consumo_Energetico']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Ancho</th>
<td class="tdimpresoras"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Altura</th>
<td class="tdimpresoras"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Profundidad</th>
<td class="tdimpresoras"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Peso</th>
<td class="tdimpresoras"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Sistema Operativo Compatible</th>
<td class="tdimpresoras"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
</tr>
<tr>
<th class="thimpresoras">Color</th>
<td class="tdimpresoras"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonimpresoras" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
