<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "test_php";

$connection = mysqli_connect($host,$user,$password,$db);

if(!$connection){
    die("algo salio mal al conectarse: ".mysqli_connect_error());
}

echo "db online.<br>";

?>