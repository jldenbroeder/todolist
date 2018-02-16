<?php
$myObj = array(
    "afaire" => array(
    
      "1" => "tache1",
      "2" => "tache2",
      "3" => "tache3"
    ),
    "archive" => array(
      "4" => "tache4",
      "5" => "tache5"
    )
);
//$myObj = array("1" => "tache1");
var_dump($myObj);
var_dump($myObj["afaire"])."<br />";
var_dump($myObj["archive"])."<br />"; 

unset($myObj["afaire"]["2"]);
array_push($myObj["afaire"], ["6" => "tache6"]);

  $finalAjout = json_encode($myObj);  
  file_put_contents('todo2.json', $finalAjout);
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
    <!-- LECTURE JSON DES TACHES A FAIRE -->
    <div class="row">
      <div class="col_75">
        <form name="form-modif" method="post" action="">
          <p></p>
          <input type="submit" name="submit-modif" value="Enregistrer"/>
        </form>
      </div>
    </div>
    <!-- FORMULAIRE D'AJOUT DE TACHE -->
    <div class="row">
      <div class="col_75">
        <form name="form-ajout" method="post" action="">
          Ajouter une tache: <br/>
          <input type="text" name="tache" size="50"/> <br/>
          <input type="submit" name="submit-ajout" value="Ajouter"/>
        </form>
      </div>
    </div>
    <!-- LECTURE JSON DES TACHES ARCHIVEES -->
    <div class="row">
      <div class="col_75">
        <p></p>
      </div>
    </div>
    <div class="row">
      <div class="col_75">
        <div>
          <p><a href="https://github.com/becodeorg/Swartz-promo-3/tree/master/Projects/Todolist" target="_blank">Consigne</a>
          </p>
          <p><a href="https://github.com/becodeorg/Swartz-promo-3/blob/master/Parcours/06-PHP/php-formulaires.md" target="_blank">Formulaire: Sanitisation et Validation</a>
          </p>
          <p><a href="https://github.com/becodeorg/Swartz-promo-3/blob/master/Parcours/06-PHP/Manipulation_fichier_php.md" target="_blank">Manipulation de fichiers</a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
    </div>    
    <footer>
      <h2>Olivier & Jean Luc :D, BeCode.org</h2>
    </footer>
  </body>
</html>
