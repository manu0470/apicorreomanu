<?php
function validarCorreo($correo){
    $key="b90b63324528410ab325f4332a865354";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://emailvalidation.abstractapi.com/v1/?api_key='.$key.'&email='.$correo);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $json=json_decode($data, true);

    $resultado=$json['deliverability'];

    if($resultado=='DELIVERABLE') {
        return 1;
    }
    else{
        return 0;

    }

}