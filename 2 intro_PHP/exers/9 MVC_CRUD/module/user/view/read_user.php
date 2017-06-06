<div id="contenido">
    <div class="inforead">

        <div class="tituloreadc">
            <div class="ttread">
            <?php
                 echo $user['titulo'];
            ?>
            </div>
        </div>

        <div class="imagenbig" ">
        <?php
             echo '<img class="imgbig" src="'. $user['img'] . '">';
        ?>
        </div>
        <div class="contprin">
             <div class="descread">
             <div class="textcontl">
             <u>Descripcion</u> <br>
            <?php
                 echo $user['descripcion'];
            ?>
            </div>
            </div>

             <div class="generosread">
             <div class="textcontl">
             <u>Genros</u> <br>
            <?php
                 echo $user['generos'];
            ?>
            </div>
            </div>

             <div class="generosread">
             <div class="textcontl">
             <u>Productora</u> <br>
            <?php
                 echo $user['productora'];
            ?>
            </div>
            </div>
        </div>

        <div class="youtubecont">
         <iframe allowfullscreen="" class="YOUTUBE-iframe-video" frameborder="0" height="325" src="<?php echo $user['youtube'];?>" width="585"></iframe>
        </div>

       <div class="contprin2" ">
        <?php

        if($user['tipo']==="Serie"){
        echo '<div class="serier">';
        echo '<div class="textcont">';
        echo 'Serie';
        echo '</div>';
        echo '</div>';
        }else{
        echo '<div class="pelicular">';
        echo '<div class="textcont">';
        echo 'Pelicula';
        echo '</div>';
        echo '</div>';
         }
        ?>
       


        <div class="readunderi" ">
        <div class="textcont">
        <?php
             echo $user['relasedate'];
        ?>
        </div>
        </div>

       

        
        <?php
              if($user['emision']==="yes"){
              echo '<div class="contprine">';
              echo '<div class="tttext">';
              echo 'En emision';
              echo '</div>';
              echo '</div>';
              }else{
              echo '<div class="contprinf">';
              echo '<div class="tttext">';
              echo 'Finalizado';
              echo '</div>';
              echo '</div>';
              }

        ?>
        <div class="readunderi" ">
        <div class="textcont">
        <?php
             echo 'Añadido por: '.$user['addfor'].'';
        ?>
        </div>
        </div>
      </div>
      <div class="returnc">
      <div class="returncont">
      <div class="return">
      <a href="index.php?page=controller_user&op=list&view=view1">Volver</a>
      </div>
      </div>
      </div>
        
    </div>
</div>