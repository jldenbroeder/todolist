<?php
$myObj = [
    "afaire" => [
    
      "tache1",
      "tache2",
      "tache3"
    ],
    "archive" => [
      "tache4",
      "tache5"
    ]
];
//$myObj = array("1" => "tache1");
print_r($myObj);
echo "<br />";
print_r($myObj["afaire"]);
echo "<br />";
print_r($myObj["archive"]);
echo "<br />";
// SUPPRESSION
unset($myObj["afaire"][1]); // SUPPRESSION DE LA TACHE2
echo "la tâche2 a été supprimée"."<br />";
// REINDEXATION
$myObj["afaire"] = array_values($myObj["afaire"]);
print_r($myObj["afaire"]);
echo "<br />";
// AJOUT DANS LE TABLEAU "AFAIRE"
$myObj["afaire"][] = "tache6";
echo "la tâche6 a été ajoutée dans \"aFaire\""."<br />";
// REINDEXATION
//$myObj["afaire"] = array_values($myObj["afaire"]);
print_r($myObj["afaire"]);
echo "<br />";
// REINDEXATION
$myObj["archive"] = array_values($myObj["archive"]);
print_r($myObj["archive"]);
echo "<br />";
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
