<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE USUARIOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		/*echo '<tr>';
                    	   	echo '<td width=125>'. $row['titulo'] . '</td>';
                    	   	echo '<td width=125>'. $row['tipo'] . '</td>';
                    	   	echo '<td width=125>'. $row['relasedate'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a href="index.php?page=controller_user&op=read&id='.$row['titulo'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a href="index.php?page=controller_user&op=update&id='.$row['titulo'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a href="index.php?page=controller_user&op=delete&id='.$row['titulo'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';*/
                            echo '<div class="tarjeta">';

                            echo '<div class="contenido">';

                            echo '<div class="imagen">';
                            if($row['tipo']==="Serie"){
                            echo '<div class="serie">';
                            echo 'Serie';
                            echo '</div>';
                            }else{
                            echo '<div class="pelicula">';
                            echo 'Pelicula';
                            echo '</div>';
                            }
                            echo '</div>';

                            echo '<div class="ttitulo">';
                            echo '<div class="tttext">';
                            echo ''. $row['titulo'] .'';
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