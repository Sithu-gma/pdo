<?php
    $dsn='mysql:host=localhost;dbname=company';
    $user="root";
    $pass="";
    $options=[];
    try{
    $connection= new PDO($dsn, $user, $pass, $options);
    } catch(PDOException $e) {
        return $e;
    }
?>