<?php

include "conection.php";

$selection="select * from Ordenadores where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1ordenadores">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tableordenadores">
<tr>
<th class="thordenadores" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thordenadores">IDProducto</th>
<td class="tdordenadores"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thordenadores">Nombre</th>
<td class="tdordenadores"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thordenadores">Tipo</th>
<td class="tdordenadores"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thordenadores">Modelo</th>
<td class="tdordenadores"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thordenadores">Marca</th>
<td class="tdordenadores"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thordenadores">Microprocesador</th>
<td class="tdordenadores"><?php echo $rows['Microprocesador']; ?></td>
</tr>
<tr>
<th class="thordenadores">Memoria RAM</th>
<td class="tdordenadores"><?php echo $rows['Memoria_RAM']; ?></td>
</tr>
<tr>
<th class="thordenadores">Disco Duro</th>
<td class="tdordenadores"><?php echo $rows['Disco_Duro']; ?></td>
</tr>
<tr>
<th class="thordenadores">Tarjeta Gra&#769;fica</th>
<td class="tdordenadores"><?php echo $rows['Tarjeta_Grafica']; ?></td>
</tr>
<tr>
<th class="thordenadores">Lector CD/DVD</th>
<td class="tdordenadores"><?php echo $rows['Lector_CD_DVD']; ?></td>
</tr>
<tr>
<th class="thordenadores">Conectividad</th>
<td class="tdordenadores"><?php echo $rows['Conectividad']; ?></td>
</tr>
<tr>
<th class="thordenadores">Conexiones</th>
<td class="tdordenadores"><?php echo $rows['Conexiones']; ?></td>
</tr>
<tr>
<th class="thordenadores">Micro&#769;fono</th>
<td class="tdordenadores"><?php echo $rows['Microfono']; ?></td>
</tr>
<tr>
<th class="thordenadores">Webcam</th>
<td class="tdordenadores"><?php echo $rows['Webcam']; ?></td>
</tr>
<tr>
<th class="thordenadores">Display</th>
<td class="tdordenadores"><?php echo $rows['Display']; ?></td>
</tr>
<tr>
<th class="thordenadores">Bateri&#769;a</th>
<td class="tdordenadores"><?php echo $rows['Bateria']; ?></td>
</tr>
<tr>
<th class="thordenadores">Ancho</th>
<td class="tdordenadores"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thordenadores">Altura</th>
<td class="tdordenadores"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thordenadores">Profundidad</th>
<td class="tdordenadores"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thordenadores">Peso</th>
<td class="tdordenadores"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thordenadores">Sistema Operativo</th>
<td class="tdordenadores"><?php echo $rows['Sistema_Operativo']; ?></td>
</tr>
<tr>
<th class="thordenadores">Color</th>
<td class="tdordenadores"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttonordenadores" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
