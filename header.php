<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CsaládFa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav>
      <div class="wrapper">
        <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>
        <ul>
          <li><a href="index.php">Főoldal</a></li>
          <li><a href="garmage.php">Rolunk</a></li>
          <li><a href="blog.php">További munkáink</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profil</a></li>";
              echo "<li><a href='logout.php'>Kijelentkezés</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Regisztráció</a></li>";
              echo "<li><a href='login.php'>Bejelentkezés</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

<div class="wrapper">
