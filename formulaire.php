<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  p {
    color: rgb(67, 69, 101);
  }

  h4 {
    color: rgb(171, 92, 0);
  }
  </style>
  <title>PHP / To-do list</title>
</head>

<body>
  <p><a href="https://github.com/becodeorg/Swartz-promo-3/blob/master/Parcours/06-PHP/php-formulaires.md" target="_blank">Sanitisation et Validation</a> </p>
  <h4>Nettoyage et vérification</h4>
  <p>FILTER_SANITIZE_EMAIL - FILTER_SANITIZE_URL</p>
  <?php
  if (isset($_POST['submit'])) {
    if (isset($_POST['email'])) {
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email." is a valid email address.<br/><br/>";
      } else {
        echo $email." is <strong>NOT</strong> a valid email address.<br/><br/>";
      }
    }

    if (isset($_POST['page'])) {
      $page = filter_var($_POST['page'], FILTER_SANITIZE_URL);
      if (filter_var($page, FILTER_VALIDATE_URL)) {
        echo $page." is a valid URL.<br/><br/>";
      } else {
        echo $page." is <strong>NOT</strong> a valid URL.<br/><br/>";
      }
    }
  }
  ?>

  <form name="form" method="post" action="formulaire.php">
    Email Address: <br/>
    <input type="text" name="email" value="<?php if (isset($_POST['submit'])) { echo $_POST['email']; } ?>" size="50"/> <br/><br/>
    Home Page: <br/>
    <input type="text" name="page" value="<?php if (isset($_POST['submit'])) { echo $_POST['page']; } ?>" size="50" /> <br/>
    <br/>
    <input type="submit" name="submit"/>
  </form>
</body>
</html>
