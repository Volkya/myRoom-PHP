<?php
    
    // $server = 'localhost:3306/room-db';
    $server = 'localhost';
    $database = 'room-db';
    $port = '5432';
    $username = 'postgres';
    $password = '1234';

    try{
    //    $conn = new PDO("mysql:host=$server; dbname=$database;", $username, $password);
        $conn = new PDO("pgsql:host=$server; dbname=$database; port=$port", $username, $password);
    }catch(PDOException $e){
        echo "Error al conectar con la base de datos . <br>";
        echo "Error en línea " . $e->getLine() . "<br>";
        echo "En " . $e->getFile() . "<br>";
        echo "Codigo: " . $e->getCode() ."<br>";
        die('Connection failled: ' . $e->getMessage());
    }

?>