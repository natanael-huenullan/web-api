<?php 
    include "config.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $nombre = $data['nombre'];
        $telefono =$data['telefono'];
        $query = mysqli_query($con, "SELECT * FROM usuarios WHERE nombre = '$nombre' AND telefono = '$telefono'");
        if($query->num_rows > 0){
            $res=array('status' => 200);
        }
        else if(!$query){
            $res=array('status' => 500,'mess'=>'usuario o password incorrecto');
        }
        
        else{
            $res=array('status' => 404,'mess'=>'error interno');
        }
        echo json_encode($res);
    }

?>