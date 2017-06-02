<HTML LANG="es">
<HEAD>
   <TITLE>Validaci�n de formularios</TITLE>
   <style>
	<!-- .styerror { color: #ff0000; font-family: arial; font-size: 10pt; fontstyle:italic } -->
   </style>
</HEAD>

<BODY>
<?PHP
// comprueba errores
   $error = false;
   $texto_error = "";
   if (isset($_POST['buscar'])){
		$texto = $_POST['texto'];
		$donde = $_POST['donde'];
		$genero = $_POST['genero'];
		$buscar = $_POST['buscar'];
		
      if (trim($texto) == ""){
         $texto_error = "Debes introducir el texto de b�squeda";
         $error = true;
      }else
         $texto_error = "";
   }
// Si los datos son correctos, procesar formulario
   if (isset($_POST['buscar'])===true && $error==false){
      print ("<P>Estos son los datos introducidos:</P>\n");
      print ("<UL>\n");
      print ("   <LI>Texto de b�squeda: $texto\n");
      print ("   <LI>Buscar en: $donde\n");
      print ("   <LI>G�nero: $genero\n");
      print ("</UL>\n");
   }
   else{
?>
<H2>B�squeda de canciones</H2>
<FORM ACTION="<?php echo $_SERVER['PHP_SELF'] ?>" METHOD="POST">
	<P><LABEL>Texto a buscar:</LABEL>
	<INPUT TYPE="TEXT" SIZE="40" NAME="texto"

	<?PHP
	if ($texto_error != "")
      print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$texto_error . "</SPAN>");
	?>
	</P>

	<P><LABEL>Buscar en:</LABEL>
		<INPUT TYPE="RADIO" NAME="donde" VALUE="titulo">T�tulos de canci�n
		<INPUT TYPE="RADIO" NAME="donde" VALUE="album">Nombres de �lbum
		<INPUT TYPE="RADIO" NAME="donde" VALUE="ambos" CHECKED>Ambos campos
	</P>

	<P><LABEL>G�nero musical:</LABEL>
	<SELECT NAME="genero">
	   <OPTION SELECTED>Todos
	   <OPTION>Ac�stica
	   <OPTION>Banda Sonora
	   <OPTION>Blues
	   <OPTION>Electr�nica
	   <OPTION>Folk
	   <OPTION>Jazz
	   <OPTION>New Age
	   <OPTION>Pop
	   <OPTION>Rock
	</SELECT></P>
	<P><INPUT TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"></P>
</FORM>
<?PHP
}
?>
</BODY>
</HTML>
