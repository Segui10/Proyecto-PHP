<?php
    include ("module/user/model/DAOUser.php");
    //session_start();
    
    switch($_GET['op']){
    case 'liste';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_all_user_emision();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;

        case 'listf';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_all_user_fecha();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;

        case 'list';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_all_user();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user.php");
    		}
            break;

                case 'listp';
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->select_peliculas();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/user/view/list_user.php");
                }
                break;

            case 'lists';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_series();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;

                case 'listpf';
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->select_peliculas_fecha();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/user/view/list_user.php");
                }
                break;

            case 'listsf';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_series_fecha();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;

            case 'listpe';
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->select_peliculas_emision();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/user/view/list_user.php");
                }
                break;

            case 'listse';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_series_emision();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;

             case 'listpt';
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->select_peliculas_titulo();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/user/view/list_user.php");
                }
                break;

            case 'listst';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_series_titulo();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;

                 case 'listsf';
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->select_series_fecha();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/user/view/list_user.php");
                }
                break;

            case 'listspf';
             try{
                   $daouser = new DAOUser();
                   $rdo = $daouser->select_peliculas_fecha();
            }catch (Exception $e){
                    $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
              }
                
             if(!$rdo){
                   $callback = 'index.php?page=503';
                  die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                  include("module/user/view/list_user.php");
             }
             break;
            
        case 'create';
            include("module/user/model/validate.php");
            
            $check = true;
            $error = array(
                            'title' => '',
                            'tipo' => '',
                            'descripcion' =>'',
                            'generos' => '',
                            'fecha_nacimiento' => '',
                            'productora' => '',
                            'addfor' => ''
                    );
            if (isset($_POST['create'])){
                $result=validate();
                //if ($check){
                if ($result['resultado']) {
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
                        $rdo = $daouser->insert_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
                    if($rdo){
                        echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
                        $callback = 'index.php?page=controller_user&op=list&view=view1';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }else{
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }
                else {
                    $error = $result['error'];
                }
            }
            include("module/user/view/create_user.php");
            break;
            
        case 'update';
            include("module/user/model/validate.php");
            $check = true;
            $error = array(
                            'title' => '',
                            'tipo' => '',
                            'descripcion' =>'',
                            'generos' => '',
                            'fecha_nacimiento' => '',
                            'productora' => '',
                            'addfor' => ''
                    );
            if (isset($_POST['update'])){
                $result=validate();
                //if ($check){
                if ($result['resultado']) {
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->update_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list&view=view1';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
                else {
                    $error = $result['error'];
                    $_SESSION['title']=$_POST;
                    $_GET['id']=$_POST['title'];
                }
            }


            
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{

                $id=$_GET['id'];
        	    include("module/user/view/update_user.php");
    		}
            break;
            
        case 'read';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/read_user.php");
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                	$rdo = $daouser->delete_user($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_user&op=list&view=view1';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/user/view/delete_user.php");
            break;
        default;
            include("view/inc/error404.php");
            break;

             case 'deleteall';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->delete_user();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                    $callback = 'index.php?page=controller_user&op=list&view=view1';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
            
            include("module/user/view/delete_user.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }