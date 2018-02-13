<?php
// VERIFICATION SI JSON EXISTE
$fichier="todo.json"; 
if(!file_exists("$fichier")) 
{ 
// S'IL N'EXISTE PAS -> CREATION
chmod("todo.json", 0777);
$fp=fopen("todo.json","w+");
fclose($fp); 
} 
 
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>PHP / To-do list</title>
  </head>
  <body>
    <header>
      <h2>Liste des taches, youpeee ;-)</h2>
    </header>
    <div class="row">
      <div class="col_fin centre">
        <p></p>
      </div>
      <!--
<h4>Nettoyage et vérification</h4>
<p><br>FILTER_SANITIZE_EMAIL - FILTER_SANITIZE_URL</p>
-->
    </div>

    <div class="row">
      <div class="col_fin centre">
        <form name="form" method="post" action="formulaire.php">
          Email Address: <br/>
          <input type="text" name="email" value="<?php if (isset($_POST['submit'])) { echo $_POST['email']; } ?>" size="50"/> <br/><br/>
          Home Page: <br/>
          <input type="text" name="page" value="<?php if (isset($_POST['submit'])) { echo $_POST['page']; } ?>" size="50" /> <br/>
          <br/>
          <input type="submit" name="submit"/>
        </form>
      </div>
    </div>

    <div class="row">
      <p><a href="https://github.com/becodeorg/Swartz-promo-3/tree/master/Projects/Todolist" target="_blank">Consigne</a><br /></p>
    </div>
    <div class="row">
      <p><a href="https://github.com/becodeorg/Swartz-promo-3/blob/master/Parcours/06-PHP/php-formulaires.md" target="_blank">Formulaire: Sanitisation et Validation</a>
      </p>
    </div>    <div class="row">
    <p><a href="https://github.com/becodeorg/Swartz-promo-3/blob/master/Parcours/06-PHP/Manipulation_fichier_php.md" target="_blank">Manipulation de fichiers</a>
    </p>
    </div>
    <footer>
      <h2>Olivier & Jean Luc :D, BeCode.org</h2>
    </footer>
  </body>
</html>
