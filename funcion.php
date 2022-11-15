<?php
    include('mensaje.php');
    include('validar.php');

    $correo=$_REQUEST['correo'];

    $valEmail=validarCorreo($correo);


    if($valEmail==1){
        mensaje ("Correo Validado", "index.php", "ok.jpg");
    }
    else{
        mensaje ("Correo No Validado", "index.php","error.jpg");
    }

?>