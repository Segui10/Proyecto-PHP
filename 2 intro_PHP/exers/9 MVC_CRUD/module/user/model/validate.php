<?php
    function validate_title($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
    }

     function validate_productora($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
    }
    
    function validate_password($texto){
        $reg = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
        return preg_match($reg,$texto);
    }
    
    function validate_nombre($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
    }
    
    function validate_DNI($dni){
        $reg="/^[0-9]{8}[A-Z]$/";
        return preg_match($reg,$dni);
    }
    
    function validate_sexo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_fecha($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_edad($texto){
        $reg="/[0-9]{1,2}$/";
        return preg_match($reg,$texto);
    }
    
    function validate_pais($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_tipo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_descripcion($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_generos($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate(){
        $check=true;

        $error=array();
        
        $v_title=$_POST['title'];
        $v_fecha_nacimiento=$_POST['fecha_nacimiento'];
        $v_tipo=$_POST['tipo'];
        $v_descripcion=$_POST['descripcion'];
        //$v_generos=$_POST['generos'];
        $v_productora=$_POST['productora'];
        $v_addfor=$_POST['addfor'];

        $r_title=validate_descripcion($v_title);
        $r_fecha_nacimiento=validate_fecha($v_fecha_nacimiento);
        $r_tipo=validate_tipo($v_tipo);
        $r_descripcion=validate_descripcion($v_descripcion);
       // $r_generos=validate_generos($v_generos);
        $r_productora=validate_descripcion($v_productora);
        $r_addfor=validate_descripcion($v_addfor);

        if(!$r_title){
            $error_title = " El titulo introducido no es valido ";
            $check=false;
        }else{
            $error_title = "";
        }

        if(!$r_addfor){
            $error_addfor = " No has añadido ningun usuario";
            $check=false;
        }else{
            $error_addfor = "";
        }

        if(!$r_productora){
            $error_productora = " La productora introducida no es valida ";
            $check=false;
        }else{
            $error_productora = "";
        }
        if(!$r_fecha_nacimiento){
            $error_fecha_nacimiento = " * No has introducido ninguna fecha";
            $check=false;
        }else{
            $error_fecha_nacimiento = "";
        }
        if(!$r_tipo){
            $error_tipo = " * No has seleccionado ningun tipo";
            $check=false;
        }else{
            $error_tipo = "";
        }
        if(!$r_descripcion  ){
            $error_descripcion = " * No has introducido ninguna descripcion";
            $check=false;
        }else{
            $error_descripcion = "";
        }
       /* if(!$r_generos){
            $error_generos = " * No has seleccionado ninguna generos";
            $check=false;
        }else{
            $error_generos = "";
        }*/
        $error = array(
                            'title' => $error_title,
                            'tipo' => $error_tipo,
                            'descripcion' => $error_descripcion,
                            //'generos' => $error_generos,
                            'fecha_nacimiento' => $error_fecha_nacimiento,
                            'productora' => $error_productora,
                            'addfor' => $error_addfor
                        );
        $resultado=array('resultado'=>$check , 'error'=>$error);
        return $resultado;

        //return $check;
    }