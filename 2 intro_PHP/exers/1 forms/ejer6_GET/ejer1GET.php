
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Demos datepicker</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
  $(function() {
    $('#demo1').datepicker({
      dateFormat: 'dd/mm/yy', 
      changeMonth: true, 
      changeYear: true, 
      yearRange: '0:+2',
      minDate: 0,
      onSelect: function(selectedDate) {
        alert(selectedDate);
        console.log(selectedDate);
      }
    });
    
    $('#demo2').datepicker({
      onSelect: function(selectedDate) {
        var dataString = 'date='+selectedDate;
        alert(dataString);
        console.log(dataString);
      
      }
    });
  });
  </script>
</head>
<body>
<p>Introduzca sus datos personales:</p>
<form name="formulario" method="POST" action="ejer2GET.php">
  <table width="50%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="24%">Nombre</td>
      <td width="76%"><input name="nombre" type="text" id="nombre"></td>
    </tr>
    <tr>
      <td>Apellidos</td>
      <td><input name="apellidos" type="text" id="apellidos2"></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><input name="correo" type="text" id="correo"></td>
    </tr>
    <tr>
      <td>Estado civil </td>
      <td><select name="estado" id="estado">
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Divorciado">Divorciado</option>
        <option value="Viudo">Viudo</option>
      </select></td>
    </tr>
    <tr>
      <td>N&uacute;mero hijos </td>
      <td>0 <input name="hijos" type="radio" value="0" checked>
        1 <input name="hijos" type="radio" value="1">
          2 <input name="hijos" type="radio" value="2">
          3 <input name="hijos" type="radio" value="3"></td>
    </tr>
    <tr>
      <td>Gustos</td>
      <td>Inform&aacute;tica <input type="checkbox" name="gustos[]" value="Informatica">
          Buceo  <input type="checkbox" name="gustos[]" value="Buceo">
          Magia <input type="checkbox" name="gustos[]" value="Magia">
          Jazz   <input type="checkbox" name="gustos[]" value="Jazz">
          Youtuber   <input type="checkbox" name="gustos[]" value="Youtuber">
          Moroso   <input type="checkbox" name="gustos[]" value="Moroso">
          Manco   <input type="checkbox" name="gustos[]" value="Manco"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Enviar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>

    <h2>Mostrar la fecha seleccionada en una alerta</h2>
  <p><label>Selecciona fecha:</label><input id="demo1" type="text" name="fecha1"></p>

  <h2>Guardar fecha mediante AJAX</h2>
  <p><label>Selecciona fecha:</label><input id="demo2" type="text" name="fecha2"><div id="result"></div></p>

</form>
<p>&nbsp; </p>
</body>
</html>