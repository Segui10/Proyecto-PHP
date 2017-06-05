<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar Elemento</h1>
        <table border='0'>
            <tr>
                <td>Titulo: </td>
                <td><input type="text" id="title" name="title" value="<?php echo $user['titulo'];?>" /></td>
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
                <?php
                        if ($user['tipo']==="Serie"){
                    ?>
                        <select type='text' name="tipo" class="tipo">
                        <option value="Serie" checked>serie</option>
                        <option value="Pelicula">pelicula</option>
                    <?php    
                        }else{
                    ?>
                        <select type='text' name="tipo" class="tipo">
                        <option value="Pelicula">pelicula</option>
                        <option value="Serie">serie</option>
                    <?php   
                        }
                    ?>
              </select>
            </td>
            </tr>

            <tr>
                <td>Generos: </td>
                <?php
                    $afi=explode(":", $user['generos']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Accion", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Accion" checked="1">Accion
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Accion">Accion
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Aventuras", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Aventuras" checked="1">Aventuras
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Aventuras">Aventuras
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Terror", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Terror" checked="1">Terror
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Terror">Terror
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Fantasia", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Fantasia" checked="1">Fantasia
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Fantasia">Fantasia
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Comedia", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Comedia" checked="1">Comedia<br>
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Comedia">Comedia<br>
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Ciencia Ficcion", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Ciencia Ficcion" checked="1">Ciencia Ficcion
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Ciencia Ficcion">Ciencia Ficcion
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Deportes", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Deportes" checked="1">Deportes
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Deportes">Deportes
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Dramaticas", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Dramaticas" checked="1">Dramaticas
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Dramaticas">Dramaticas
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Gore", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Gore">Gore
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Gore">Gore
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Guerra", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Guerra" checked="1">Guerra<br>
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Guerra">Guerra<br>
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Misterio", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Misterio" checked="1">Misterio
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Misterio">Misterio
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Musical", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Musical" checked="1">Musical
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Musical">Musical
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Policiaca", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Policiaca" checked="1">Policiaca
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Policiaca">Policiaca
                    <?php
                        }
                    ?>

                        <?php
                            $busca_array=in_array("Romantica", $afi);
                            if($busca_array){
                        ?>
                            <input type="checkbox" name="generos[]" value="Romantica">Romantica
                        <?php
                            }else{
                        ?>
                            <input type="checkbox" name="generos[]" value="Romantica">Romantica
                        <?php
                            }
                        ?>

                    <?php
                        $busca_array=in_array("Suspense", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" name="generos[]" value="Suspense">Suspense
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" name="generos[]" value="Suspense">Suspense
                    <?php
                        }
                    ?>
                </td>
            </tr>
            
            
            <tr>
                <td>Fecha de Estreno: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="Fecha de Estreno" value="<?php echo $user['relasedate'];?>"/></td>
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
                <td><textarea cols="30" rows="5" id="descripcion" name="descripcion" placeholder="Descripcion" ><?php echo $user['descripcion'];?></textarea></td>
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
                <td><input type="text" id="productora" name="productora" placeholder="Productora" value="<?php echo $user['productora'];?>"/></td>
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
                <td><input type="text" id="addfor" name="addfor" placeholder="Nombre" value="<?php echo $user['addfor'];?>"/></td>
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
                
                <?php
                        if ($user['emision']==="yes"){
                    ?>
                        <input type="radio" id="emision" name="emision" value="yes" checked> En Emision
                        <input type="radio" id="emision" name="emision" value="no"> Finalizado
                    <?php    
                        }else{
                    ?>
                        <input type="radio" id="emision" name="emision" value="yes"> En Emision
                        <input type="radio" id="emision" name="emision" value="no" checked> Finalizado
                    <?php   
                        }
                    ?>
                <td>
            </tr>

             <tr>
                <td>Imagen: </td>
                <td><input type="text" id="img" name="img" placeholder="URL" value="<?php echo $user['img'];?>"/></td>
                <td><font color="red">
                    <span id="error_addfor" class="error">
                        <?php
                           echo $error['addfor']
                        ?>
                    </span>
                </font></font></td>
            </tr>



            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>