<?php
$host = "Localhost";
$db = "imobiliaria";
$port = "3306";
$user = "root";
$pass = "";

try {
    $con = new PDO("mysql:host = $host; port = $port; dbname=$db",$user,$pass);
} catch (PDOException $th) {
    echo "Erro na conexacao";
}