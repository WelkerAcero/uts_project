<?php

session_start();

$message = '';

if (isset($_SESSION['user_id'])) {
  header('Location: ../adminPage.php');
}

require 'database.php';

//IF EN BUSCA DE ERRORES 'COUNT() PARAMETER'
if (!empty($_POST['email']) && strpos($_POST['email'], ' ')) {
    ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
    ini_set('display_errors', '0');
    ini_set('track_errors', 'On');
    $message = "Asegurese de que no hayan espacios en el campo Email";

} else if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $verify = strpos($_POST['email'], '@');
    if ($verify === false) {
        $message = "Campo 'Email' debe contener '@' y no fue encontrado.\n Intente nuevamente";
    } else {

        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            $_SESSION['login_date'] = time();
            header("Location: ../adminPage.php");
        } else {
            $message = 'Estas credenciales no son válidas, intente nuevamente';
        }

    }

} else if (empty($_POST['password']) && !empty($_POST['email'])) {
    $message = 'Por favor llene los campos requeridos';
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/loginStyles.css">
</head>

<body>
  <?php require 'partials/header.php'?>

  <?php if (!empty($message)): ?>
    <h3 style="color:red; background-color:yellow"> <?=$message?><h3>
  <?php endif;?>

  <h1>Iniciar sesión administrador</h1>

  <form action="login.php" method="POST">
    <input class='form-control alerta' name="email" type="text" placeholder="Digite su email">
    <input class='form-control alerta' name="password" type="password" placeholder="Digite su clave">
    <input style="width:324px;" type="submit" value="Acceder">
  </form>



</body>

</html>