<?php 
        include "config.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $input = file_get_contents('php://input');
        $data = json_decode($input,true);
        $nombre = $data['nombre'];
        $telefono = $data['telefono'];
        $email = $data['email'];
        $apaterno = $data['ApellidoP'];
        $amaterno = $data['ApellidoM'];
        $pass = $data['contrasena'];
        $query = mysqli_query($con, "INSERT INTO usuarios (nombre, telefono, email, ApellidoP, ApellidoM, contrasena) VALUES ('$nombre', '$telefono', '$email', '$apaterno', '$amaterno', '$pass')");

        if($query->num_rows > 0){
            $res=array('status' => 200);
        }else{
            $res=array('status' => 500,'mess'=>'usuario o password incorrecto');
        }
        echo json_encode($res);
    }
?>