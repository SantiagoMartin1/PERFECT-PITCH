<?php

$dbhost = "localhost";
$dbuser= "root";
$dbpass = "rootroot";
$dbname = "PROYECTO 2022";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("no hay conexion:" .mysqli_connect_error());
    
}
?>