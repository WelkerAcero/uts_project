<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <title>Welcome to you WebApp</title>

  <script type="text/javascript" src="../resources/js/app.js"></script>

</head>

<body>
  <?php require_once('partials/header.php')?>

  <div class="bienvenida" style="font-size:20px; text-decoration: none; padding-bottom:10px;
    color:white; border-bottom: 2px  solid #eee; padding: 20px 0; margin-bottom: 0px; width: 100%; text-align: center;
    background-image: linear-gradient(to bottom, #000004, #07051b, #0a092a, #070d3b, #050e4b, #08185c, #0a236e, #092e80, #0c4797, #175fad, #2878c1, #3d92d5);">
    <?php if (!empty($user)) {?>
      <br><?=$user['email'];?>
      Te damos la bienvenida <br>
      <hr>

    <?php } else {
    header('Location: /proyecto_uts/php-login/login.php');
}
?>

    <a class="evento" href="http://localhost/ProyectoSitioWeb_UTS/proyecto_uts/php-login/logout.php" onclick="return Confirmar('¿Realmente deseas cerrar sesión?');">
      <b>Cerrar Sesión</b>
    </a>

    <script>
      function Confirmar(Mensaje) {
        return (confirm(Mensaje)) ? true : false;
      }
    </script>

    <style>
      .evento {
        color: black;
        text-decoration: darkred;
        background: linear-gradient(to left, #4ca1af, #c4e0e5);
        padding: 8px;
        border-radius: 10px;
      }

      .evento:hover {
        color: #092e80;
        font-size: 21px;
      }
    </style>

  </div>
</body>

</html>