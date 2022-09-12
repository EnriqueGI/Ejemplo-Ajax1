<?php
session_start();
if(isset($_POST['crear'])){

    
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
    
    } else{
        $_SESSION['user'] ="Pedro";
      echo $_SESSION['user'];
    }
    

}



if(isset($_POST['Salir'])){

    
    session_destroy();
    

}


if(isset($_POST['Mostrar'])){

    if(isset($_SESSION['user'])){

        echo $_SESSION['user'];
    }else{

        echo "Null";
    }
   
    

}



?>