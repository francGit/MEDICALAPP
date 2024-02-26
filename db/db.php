<?php 
    $server = "127.0.0.1";
    $username = 'root';
    $password = '';
    $database = 'loginregistro';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password); 

    } catch (PDOException $e) {
        die('Ah fallado la conexion'. $e->getMessage());
    }


?>