<?php
    $hostname = 'localhost';
    $database = 'INSS_Test';
    $username = 'root';
    $password = '12345';

    try{
        $pdo = new PDO("mysql:$hostname;dbname=$database", $username, $password);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>

