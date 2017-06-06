<div id="contenido">

    <div class="container">
    	<div class="row">
            <div class="menu4">
    		<div class="createo">
            <div class="createplus">
            <div class="textbuttont">
            <a href="index.php?page=controller_user&op=create">Create</a>
            </div>
            </div>
            </div>
            <div class="createc">
            <div class="create">
            <div class="textbuttont">
            <?php
             echo '<a href="index.php?page=controller_user&op=listp&view='.$_GET['view'].'">Peliculas</a>';
            ?>
            </div>
            </div>
            <div class="create">
            <div class="textbuttont">
            <?php
             echo '<a href="index.php?page=controller_user&op=lists&view='.$_GET['view'].'">Series</a>';
            ?>
            </div>
            </div>
            <div class="create">
            <div class="textbuttont">
            <?php
             echo '<a href="index.php?page=controller_user&op=list&view='.$_GET['view'].'">Todo</a>';
            ?>
            </div>
            </div>
            </div>
            </div>
            <?php
            if(($_GET['op']==="lists") || ($_GET['op']==="listsf") || ($_GET['op']==="listse")){
             echo '<div class="menu4">';
             echo '<div class="createop">';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=lists&view='.$_GET['view'].'">Titulo</a>';
             echo '</div>';
             echo '</div>';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=listsf&view='.$_GET['view'].'">Fecha</a>';
             echo '</div>';
             echo '</div>';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=listse&view='.$_GET['view'].'">Emision</a>';
             echo '</div>';
             echo '</div>';
             echo '</div>';
            }else if(($_GET['op']==="listp") || ($_GET['op']==="listpf") || ($_GET['op']==="listpe")){
            echo '<div class="menu4">';
             echo '<div class="createop">';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=listp&view='.$_GET['view'].'">Titulo</a>';
             echo '</div>';
             echo '</div>';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=listpf&view='.$_GET['view'].'">Fecha</a>';
             echo '</div>';
             echo '</div>';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=listpe&view='.$_GET['view'].'">Emision</a>';
             echo '</div>';
             echo '</div>';
             echo '</div>';
            }else{
            echo '<div class="menu4">';
             echo '<div class="createop">';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=list&view='.$_GET['view'].'">Titulo</a>';
             echo '</div>';
             echo '</div>';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=listf&view='.$_GET['view'].'">Fecha</a>';
             echo '</div>';
             echo '</div>';
             echo '<div class="createop1">';
             echo '<div class="textbuttont">';
             echo '<a href="index.php?page=controller_user&op=liste&view='.$_GET['view'].'">Emision</a>';
             echo '</div>';
             echo '</div>';
             echo '</div>';
            }
            
            echo '<div class="createo1">';
            echo '<div class="createv">';
            echo '<div class="textbuttont">';
            if($_GET['view']==="view1"){
                echo '<a href="index.php?page=controller_user&op='.$_GET['op'].'&view=view2">Vista</a>';
            }else{
               echo '<a href="index.php?page=controller_user&op='.$_GET['op'].'&view=view1">Vista</a>'; 
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
                if($_GET['view']==="view1"){
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN ELEMENTO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                            echo '<div class="tarjeta">';

                            echo '<div class="contenido">';

                            echo '<div class="imagen" style="position: relative;">';
                            echo '<div class="img1">';
                            echo '<img class="img" src="'. $row['img'] . '">';
                            echo '</div>';
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
               }else{
                   if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN ELEMENTO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                            echo '<div class="cont2">';
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

                            echo '<div class="ttitulo">';
                            echo '<div class="tttext">';
                            echo ''. $row['tipo'] .'';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="ttitulo1">';
                            echo '<div class="tttext">';
                            echo '<a href="index.php?page=controller_user&op=read&id='.$row['titulo'].'">Read</a>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="ttitulo1">';
                            echo '<div class="tttext">';
                            echo '<a href="index.php?page=controller_user&op=update&id='.$row['titulo'].'">Update</a>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="ttitulo1">';
                            echo '<div class="tttext">';
                            echo '<a href="index.php?page=controller_user&op=delete&id='.$row['titulo'].'">Delete</a>';
                            echo '</div>';
                            echo '</div>';



                            echo '</div>';

                            
                        }
                   }
                }
                ?>
    	</div>
    </div>
</div>
