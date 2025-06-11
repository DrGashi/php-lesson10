<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "test";

    try{
        $conn = new PDO("mysql:host = $host;dbname = $dbname", $user, $pass);
    }catch(Execption $e){
        echo "error ". $e->getMessage();
    }
?>