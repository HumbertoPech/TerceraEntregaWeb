<?php
//session_start();
function get_menu(){
    $menu = array();
    //Menú tradicional:
    $menu['Inicio'] = "inicio.php";

    if(isset($_SESSION['tipo_usuario'])){
        if($_SESSION['tipo_usuario'] == "usuario"){
            $menu['perfil'] = "../paginas/paginas_usuario/perfil.php";
            //header("Location: ../");
            //exit();
        }else if($_SESSION['tipo_usuario'] == "administrador"){
            $menu['perfil'] = "../paginas/paginas_administrador/perfil.php";
            //header("Location: ../");
            //xit();
        }else{
            //echo "USUARIO NO IDENTIFICADO";
        }
        //return $menu;
    }else{
        //LA OPCION DE INICIO.HTML?
        //echo "TU NO DEBERÍAS ESTAR AQUÍ";
        //return $menu;
    }
    return $menu;
}


?>
