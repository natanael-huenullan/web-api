<?php 
    include "config.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $correo = $data['correo'];
        $contrasena =$data['contrasena'];
        $query = mysqli_query($con, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");
        if($query->num_rows > 0){
            $res=array('status' => 200);
        }else{
            $res=array('status' => 500,'mess'=>'usuario o password incorrecto');
        }
        echo json_encode($res);
    }

?>