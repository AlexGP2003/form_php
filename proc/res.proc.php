<?php
if (!isset($_REQUEST['Pokemon2'])){
    if (strtoupper($_REQUEST['Pokemon'])=='PIKACHU' ){
        //Creo la sesion por 1ª vez.
        session_start();
        $_SESSION['pantalla1']='check';
        header("Location: ../view/Pantalla1.php");
    }
    else if (strtoupper($_REQUEST['Pokemon'] != "PIKACHU")){
        header ("Location: ../index.php?msg=25");
    }
    else{
        header("Location: ../Pantalla1.php?msg2=253");
    }
}
else{
    if (strtoupper($_REQUEST['Pokemon2']) == "DONPHAN"){
        session_start();
        $_SESSION['pantalla2']='check';
        header("Location: ../view/Pantalla2.php");
    }
    else{
        header("Location: ../view/Pantalla1.php?msg2=253");
    }
}
?>