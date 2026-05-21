<?php

include 'config.php';

$conn = new mysqli($DB_host,$DB_user,$DB_password,$DB_name);

if($conn->connect_error){
    die("Conexão falhou: ". $conn->connect_error);
}