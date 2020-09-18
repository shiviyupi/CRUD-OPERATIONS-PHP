<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "CRUD1";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn)
{
    echo 'Error in connection';
}

?>