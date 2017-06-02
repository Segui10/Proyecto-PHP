<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Buscador php</title>
	<style type="text/css">
		.busc{width:260px; background-color:#0000FF; color:#fff; border:1px solid #fff; margin: 80px 0px 0px 480px; height:100px; border-radius: 0px 8px 0px 8px}
		input[type=text]{background-color:#000; color:#fff; border-radius: 3px; margin:0px 0px 0px 20px}
		input[type=submit]{background-color:#000000; color:#fff; border-radius: 3px}
		h3{text-align:center}
	</style>
</head>
<body>
	<div class="busc">
	<h3>Escribe tu busqueda</h3>
	<form name="form" action="resultados.php" method="get">
		<input type="text" name="s" />
		<input type="submit" value="Buscar" title="Buscar" />
	</form>
	</div>
</body>
</html>
