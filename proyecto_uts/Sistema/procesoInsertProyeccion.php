<?php
//print_r($_POST)

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtTexto = (isset($_POST['txtTexto'])) ? $_POST['txtTexto'] : "";
$txtFoto = (isset($_FILES['txtFoto']["name"])) ? $_FILES['txtFoto']["name"] : "";
$fecha_publicacion = (isset($_POST['date']));


$sentencia = $pdo->prepare("SELECT * FROM `proyeccion`");
$sentencia->execute();
$listaproyeccion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaproyeccion);
