<?php 
    include "config.php";
    $input = file_get_contents('php://input');
    $data = json_decode($input,true);
    $message = array();
    $nombre = $data['nombre'];
    $telefono = $data['telefono'];
    $email = $data['email'];
    $APaterno = $data['ApellidoP'];
    $AMaterno = $data['ApellidoM'];
    $pass = $data['contrasena'];


    $q = mysqli_query($con, "INSERT INTO usuarios (nombre, telefono, email, ApellidoP, ApellidoM, contrasena) VALUES ('$nombre', '$telefono', '$email', '$APaterno', '$APaterno', '$pass')");

    if ($q){
        http_response_code(201);
        $message['status'] = 'Success';
    }else{
        http_response_code(422);
        $message['status'] = 'Error';
    }

    echo json_encode($message);
    echo mysqli_error($con);
?>