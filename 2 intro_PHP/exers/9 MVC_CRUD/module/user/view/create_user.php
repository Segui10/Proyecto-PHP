<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1>Nuevo Elemento</h1>
        <table border='0'>
            <tr>
                <td>Titulo: </td>
                <td><input type="text" id="title" name="title" placeholder="Titulo" value=""/></td>
                <td><font color="red">
                    <span id="error_title" class="error">
                        <?php
                           echo $error['title']
                        ?>
                    </span>
                </font></font></td>
            </tr>
                    
            <tr>
            <td>Tipo: </td>
              <td>
                <select type='text' name="tipo" class="tipo">
                <option value="Pelicula">pelicula</option>
                <option value="Serie">serie</option>
              </select>
            </td>
            </tr>

            <tr>
                <td>Generos: </td>
                <td>
                <input type="checkbox" name="generos[]" value="Accion">Accion
                <input type="checkbox" name="generos[]" value="Aventuras">Aventuras
                <input type="checkbox" name="generos[]" value="Terror">Terror
                <input type="checkbox" name="generos[]" value="Fantasia">Fantasia
                <input type="checkbox" name="generos[]" value="Comedia">Comedia<br>
                <input type="checkbox" name="generos[]" value="Ciencia Ficcion">Ciencia Ficcion
                <input type="checkbox" name="generos[]" value="Deportes">Deportes
                <input type="checkbox" name="generos[]" value="Dramaticas">Dramaticas
                <input type="checkbox" name="generos[]" value="Gore">Gore
                <input type="checkbox" name="generos[]" value="Guerra">Guerra<br>
                <input type="checkbox" name="generos[]" value="Misterio">Misterio
                <input type="checkbox" name="generos[]" value="Musical">Musical
                <input type="checkbox" name="generos[]" value="Policiaca">Policiaca
                <input type="checkbox" name="generos[]" value="Romantica">Romantica
                <input type="checkbox" name="generos[]" value="Suspense">Suspense
                </td>
            </tr>
            
            
            <tr>
                <td>Fecha de Estreno: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="Fecha de Estreno" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha_nacimiento" class="error">
                        <?php
                         echo $error['fecha_nacimiento']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Descripcion: </td>
                <td><textarea cols="30" rows="5" id="descripcion" name="descripcion" placeholder="Descripcion" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_descripcion" class="error">
                        <?php
                         echo $error['descripcion']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
             <tr>
                <td>Productora: </td>
                <td><input type="text" id="productora" name="productora" placeholder="Productora" value=""/></td>
                <td><font color="red">
                    <span id="error_productora" class="error">
                        <?php
                           echo $error['productora']
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Añadido_por: </td>
                <td><input type="text" id="addfor" name="addfor" placeholder="Nombre" value=""/></td>
                <td><font color="red">
                    <span id="error_addfor" class="error">
                        <?php
                           echo $error['addfor']
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Emision:  </td>
                <td>
                <input type="radio" id="emision" name="emision" value="yes"> En Emision
                <input type="radio" id="emision" name="emision" value="no"> Finalizado
                <td>
            </tr>

             <tr>
                <td>Imagen: </td>
                <td><input type="text" id="img" name="img" placeholder="URL" value=""/></td>
                <td><font color="red">
                </font></font></td>
            </tr>


            <tr>
                <td>Youtube: </td>
                <td><input type="text" id="youtube" name="youtube" placeholder="URL" value=""/></td>
                <td><font color="red">
                </font></font></td>
            </tr>



            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list&view=view1">Volver</a></td>
            </tr>
        </table>
    </form>
</div>