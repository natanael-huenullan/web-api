<?php 
    include "config.php";
    $input = file_get_contents('php://input');
    $data = json_decode($input,true);
    $message = array();
    $nombre = $data['nombre'];
    $telefono = $data['telefono'];
    $email = $data['email'];

    $q = mysqli_query($con, "INSERT INTO usuarios (nombre, telefono, email) VALUES ('$nombre', '$telefono', '$email')");

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