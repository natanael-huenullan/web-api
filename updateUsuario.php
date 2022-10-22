<?php 
    include "config.php";
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);
    $message = array();
    $nombre = $data['nombre'];
    $telefono = $data['telefono'];
    $email = $data['email'];
    $apaterno = $data['ApellidoP'];
    $amaterno = $data['ApellidoM'];
    $contrasena = $data['contrasena'];
    $id = $_GET['id'];

    $q = mysqli_query($con, "UPDATE usuarios SET nombre = '$nombre', telefono = '$telefono', email = '$email', ApellidoP = '$apaterno', ApellidoM = '$amaterno', contrasena = '$contrasena' WHERE id = '{$id}' LIMIT 1");

    if ($q){
        http_response_code(201);
        $message['status'] = 'success';
    }else{
        http_response_code(401);
        $message['status'] = 'error';
    }

    echo json_encode($message);
    echo mysqli_error($con);
?>