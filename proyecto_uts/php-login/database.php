<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'uts_project';

try {

  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

} catch (PDOException $e) {

  die('Conexión fallida: ' . $e->getMessage());

}

