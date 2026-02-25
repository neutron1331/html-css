<?php

$host = "localhost";
$db_name = "test";
$dsn = "mysql:host=$host;dbname=$db_name;charset=utf8";
$db_username = "admin";
$db_password = "admin";

try{
    $db = new PDO($dsn, $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Jste připojen k DB <br>";
}
catch(PDOException $e){
    echo "Nelze se připojit k DB: <br>". $e->getMessage();
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

function input_new_user($table)
{
    global $db;

    $sql = "INSERT INTO $table (id, username, email, password)
    VALUES ('John', 'Doe', 'john@example.com', 'asdf')";
}

?>