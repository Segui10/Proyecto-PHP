<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="validate_users.js"></script>
</head>
<body>
	<div class="formulario">
	<h1> Añadir contenido</h1>
	<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php">
		<label for="titulo">Titulo</label>
		<p><div>
			<input name="titulo" id="titulo" type="text" placeholder="titulo" value="" />
			<span id="e_titulo" class="styerror"></span>
			<?php
				if ($error_titulo != "")
				print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_titulo . "</SPAN>");
			?>
		</div></p>
		<p><div><label>Tipo:</label><tr>
      <td>
      	<select type='text' name="tipo" class="tipo">
        <option value="Pelicula">pelicula</option>
        <option value="Serie">serie</option>
      </select></td>
    </tr></div></p>

    <p><div><label>Generos: </label><tr>
    <div class="marg-left"><p>
      <div class="marg-left"><td>
      	  Accion  <input type="checkbox" name="generos[]" value="Accion">
     	  Animacion   <input type="checkbox" name="generos[]" value="Animacion">
          Aventuras   <input type="checkbox" name="generos[]" value="Aventuras">
          Terror  <input type="checkbox" name="generos[]" value="Terror"></td></div>
          <div class="marg-left"><td>
          Fantasia <input type="checkbox" name="generos[]" value="Fantasia">
          Comedia   <input type="checkbox" name="generos[]" value="Comedia">
          Ciencia Ficcion <input type="checkbox" name="generos[]" value="Ciencia Ficcion">
          Deportes   <input type="checkbox" name="generos[]" value="Deportes"></td></div>
          <div class="marg-left"><td> 
          Dramaticas   <input type="checkbox" name="generos[]" value="Dramaticas">
          Gore   <input type="checkbox" name="generos[]" value="Gore">
          Guerra   <input type="checkbox" name="generos[]" value="Guerra">
          Misterio   <input type="checkbox" name="generos[]" value="Misterio">
          Musical   <input type="checkbox" name="generos[]" value="Musical"></td></div>
          <div class="marg-left">
          <td>Policiaca   <input type="checkbox" name="generos[]" value="Policiaca">
          Romantica   <input type="checkbox" name="generos[]" value="Romantica">
          Suspense   <input type="checkbox" name="generos[]" value="Suspense">
      </td></div></p></div></p>
    </tr></div></p>

    <p><div><label>Descripcion: </label><textarea rows='6' name="descripcion" id="descripcion" placeholder="descripcion" type="text" class="mensaje" value=""></textarea><span id="e_descripcion" class="styerror"></span>
    	<?php
				if ($error_descripcion != "")
				print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_descripcion . "</SPAN>");
			?></div></p>

   
		<p><div>
		 <label for="titulo">Productora</label>
			<input name="productora" id="productora" type="text" placeholder="productora" value="" />
			<span id="e_productora" class="styerror"></span>
			<?php
				if ($error_productora != "")
				print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_productora . "</SPAN>");
			?>
		</div></p>

		 <p>
			<label for="nombre">Añadido por: </label>
			<input name="nombre" id="nombre" type="text" placeholder="nombre" value="" />
			<span id="e_nombre" class="styerror"></span>
			<?php
				if ($error_nom != "")
				print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_nom . "</SPAN>");
			?>
		</p>
		

		<input name="alta" type="submit" value="Añadir"/>
	</form>
	</div>
</body>
</html>
