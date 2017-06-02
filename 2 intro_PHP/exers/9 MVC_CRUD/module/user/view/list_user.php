<div id="contenido">

    <div class="container">
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>

    		
    		
                <?php
                
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                            echo '<div class="tarjeta">';

                            echo '<div class="contenido">';

                            echo '<div class="imagen" style="position: relative;">';
                            echo '<div class="img1">';
                            echo '<img class="img" src="'. $row['img'] . '">';
                            echo '</div>';
                            /*if($row['tipo']==="Serie"){
                            echo '<div class="serie">';
                            echo 'Serie';
                            echo '</div>';
                            }else{
                            echo '<div class="pelicula">';
                            echo 'Pelicula';
                            echo '</div>';
                            }*/
                            
                            echo '</div>';

                            echo '<div class="ttitulo">';
                            echo '<div class="tttext">';
                            echo ''. $row['titulo'] .'';
                            echo '</div>';
                            echo '</div>';

                             if($row['emision']==="yes"){
                            echo '<div class="enemision">';
                            echo '<div class="tttext">';
                            echo 'En emision';
                            echo '</div>';
                            echo '</div>';
                            }else{
                            echo '<div class="finalizado">';
                            echo '<div class="tttext">';
                            echo 'Finalizado';
                            echo '</div>';
                            echo '</div>';
                            }

                            echo '<div class="ttitulo">';
                            echo '<div class="tttext">';
                            echo ''. $row['relasedate'] .'';
                            echo '</div>';
                            echo '</div>';

                            echo '</div>';


                            echo '<div class="margtop">';
                            echo '</div>';


                            echo '<div class="button">';
                            echo '<div class="textbutton">';
                            echo '<a href="index.php?page=controller_user&op=read&id='.$row['titulo'].'">Read</a>';
                            echo '</div>';
                            echo '</div>';


                            echo '<div class="button">';
                            echo '<div class="textbutton">';
                            echo '<a href="index.php?page=controller_user&op=update&id='.$row['titulo'].'">Update</a>';
                            echo '</div>';
                            echo '</div>';


                            echo '<div class="button">';
                            echo '<div class="textbutton">';
                            echo '<a href="index.php?page=controller_user&op=delete&id='.$row['titulo'].'">Delete</a>';
                            echo '</div>';
                            echo '</div>';


                            echo '<div class="margbot">';
                            echo '</div>';

                            
                            echo '</div>';
                        }
                   }
                ?>
    	</div>
    </div>
</div>
