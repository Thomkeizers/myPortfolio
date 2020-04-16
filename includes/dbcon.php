<?php

//Making connection with the database.

$username = "root";
$password = "";
$host = "localhost";
$db = "myportfolio";

$conn = mysqli_connect($host, $username, $password, $db);

if(!$conn)
{
    echo "Problems mate";
}

?>