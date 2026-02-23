<?php

$dsn = "mysql:host=localhost;dbname=temp;charset=utf8";
$username = "admin";
$password = "admin";

try{
    $db = new PDO($dsn, $username, $password);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Jste připojen k DB";
}
catch(PDOException $e){
    echo "Nelze se připojit k DB: ". $e->getMessage();
    exit();
}


function get($table, $id): mixed
{
    global $db;

    $sql = "SELECT * FROM $table WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getALL($table): array 
{
    global $db;

    $sql = "SELECT * FROM $table";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>