<?php

include "conection.php";

$selection="select * from Discos_Duros where IDProducto='".$_POST['numidentiproducto']."'";
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
<h1 class="h1discosduros">Especificaciones <?php echo $_POST['nombreproducto']; ?></h1>
</br>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<table class="tablediscosduros">
<tr>
<th class="thdiscosduros" colspan="2">Especificaciones</th>
</tr>
<tr>
<th class="thdiscosduros">IDProducto</th>
<td class="tddiscosduros"><?php echo $rows['IDProducto']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Nombre</th>
<td class="tddiscosduros"><?php echo $rows['Nombre']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Tipo</th>
<td class="tddiscosduros"><?php echo $rows['Tipo']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Modelo</th>
<td class="tddiscosduros"><?php echo $rows['Modelo']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Marca</th>
<td class="tddiscosduros"><?php echo $rows['Marca']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Capacidad De Disco Duro</th>
<td class="tddiscosduros"><?php echo $rows['Capacidad_De_Disco_Duro']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Taman&#771;o De Disco Duro</th>
<td class="tddiscosduros"><?php echo $rows['Tamano_De_Disco_Duro']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Velocidad De Transferencia De Datos</th>
<td class="tddiscosduros"><?php echo $rows['Velocidad_De_Transferencia_De_Datos']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Interfaz De Disco Duro</th>
<td class="tddiscosduros"><?php echo $rows['Interfaz_De_Disco_Duro']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Descripcio&#769;n De Disco Duro</th>
<td class="tddiscosduros"><?php echo $rows['Descripcion_De_Disco_Duro']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Ancho</th>
<td class="tddiscosduros"><?php echo $rows['Ancho']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Altura</th>
<td class="tddiscosduros"><?php echo $rows['Altura']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Profundidad</th>
<td class="tddiscosduros"><?php echo $rows['Profundidad']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Peso</th>
<td class="tddiscosduros"><?php echo $rows['Peso']; ?></td>
</tr>
<tr>
<th class="thdiscosduros">Color</th>
<td class="tddiscosduros"><?php echo $rows['Color']; ?></td>
</tr>
</table>
<?php

}

?>
</br>
<button class="buttondiscosduros" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
