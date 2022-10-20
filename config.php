<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 12345678');
    header('Content-Length: 0');
    header('Content-Type: text/plain');

    $db_host        = 'bjy0cm7idi1l0jlvjoam-mysql.services.clever-cloud.com';
    $db_user        = 'uej3toksoevikgsj';
    $db_pass        = 'HwjZ34H9iagT3lOup4jG';
    $db_database    = 'bjy0cm7idi1l0jlvjoam'; 
    $db_port        = '3306';
    
    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die("Couldn't connect to db");

?>