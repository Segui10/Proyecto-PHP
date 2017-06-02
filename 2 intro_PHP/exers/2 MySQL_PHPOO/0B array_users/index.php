<?php
    include("Usuario.php");
    $vector_usuarios = array();

    $tmp = new Usuario(1, "Jose", "Gomez Martinez", 14004);
    array_push($vector_usuarios, $tmp);
    $tmp = new Usuario(2, "Javier", "Perez Garcia", 28080);
    array_push($vector_usuarios, $tmp);
    $tmp = new Usuario(3, "Jorge", "Reina Ramirez", 18001);
    array_push($vector_usuarios, $tmp);
?>
	<h3>Usuarios del sistema</h3>
	<?php
    foreach($vector_usuarios as $elemento_vector){
	?>
            <ul>
                <li>Id: <?php echo $elemento_vector->getId();?> </li>
                <li>Nombre: <?php echo $elemento_vector->getNombre();?> </li>
                <li>Apellidos: <?php echo $elemento_vector->getApellidos();?> </li>
                <li>C&oacute;digo postal: <?php echo $elemento_vector->getCodigoPostal();?> </li>
            </ul>
	<?php
    }
?>