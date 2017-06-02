<?php
	include("DAOUser.php");
	$daouser = new DAOUser();
	$user = $daouser->buscar_user();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Resultado de la busqueda</title>
	<style type="text/css">
		table{border:1px solid black; margin: 100px 0px 0px 160px}
		th{background-color:#0000FF; color:#fff;}
		td{background-color:#CCCCCC;}
	</style>
</head>
<body>
	<?php
	if(count($user)==0){
		echo "<h2>No hay resultados para su busqueda...</h2>";
	}else{
	?>
		<table>
		<tr>
			<th width="200px">Titulo del post</th>
			<th width="200px">Autor de post</th>
			<th width="400">Mensaje</th>
			<th width="200px">Fecha de publicacion</th>
		</tr>
	<?php	
		for($i=0;$i<sizeof($user);$i++){
	?>
		<tr>
			<td align="center">
				<?php echo $user[$i]["titulo"] ?>
			</td>
			<td align="center">
				<?php echo $user[$i]["autor"] ?>
			</td>
			<td align="center">
				<?php echo $user[$i]["cuerpo"] ?>
			</td>
			<td align="center">
				<?php echo $user[$i]["fecha"] ?>
			</td>
		</tr>
	<?php
		}	
	}
	?>
	</table>
</body>
</html>