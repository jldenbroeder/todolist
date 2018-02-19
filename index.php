<?php
/* Récupération du contenu du fichier .json */
$file = file_get_contents("todo.json");
$myObj = json_decode($file, true);

// AJOUT TACHE
if ( (isset($_POST["tache"])) && (isset($_POST["submit-ajout"])) && (!empty($_POST["tache"])) ){
  $tacheAjout = htmlspecialchars($_POST["tache"]);
  $myObj['aFaire'][] = $tacheAjout;
  $finalAjout = json_encode($myObj);
  file_put_contents('todo.json', $finalAjout);
}

//TACHE EFFECTUE
if (isset($_POST["submit-modif"])){
  $i = 0;
  foreach ($myObj["aFaire"] as $value) {
    if (isset($_POST[$i])){
      $myObj["archive"][] = $myObj['aFaire'][$i];
      unset($myObj["aFaire"][$i]);
      // var_dump ($listTable);
    }
    $i++;
  }
  $myObj["aFaire"] = array_values($myObj["aFaire"]);
}

$finalAjout = json_encode($myObj);
file_put_contents('todo.json', $finalAjout);
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
      <div class="col_75">
        <form name="form-modif" method="post" action="">
          <h5> A FAIRE:</h5>
          <div class="afaire">
            <!-- LECTURE JSON DES TACHES A FAIRE -->
            <?php
            $i = 0;
            foreach ($myObj["aFaire"] as $value) {
            ?>
            <input name="<?php echo $i; ?>" type="checkbox">  <?php echo $value ?> <br />
            <?php
              $i++;
            }
            ?>
          </div>
          <input type="submit" name="submit-modif" class="bouton_submit" value="Enregistrer"/>
          <!--AFFICHE ARCHIVE  -->
          <h5> ARCHIVE:</h5>
          <div class="done">
            <span class="archived">
              <?php
              foreach ($myObj["archive"] as $value) {
              ?>
              <input type="checkbox" checked="checked" disabled="disabled" class="archived"> <?php echo $value ?> <br />
              <?php
              }
              ?>
            </span>
          </div>
        </form>
      </div>
    </div>
    <!-- FORMULAIRE D'AJOUT DE TACHE -->
    <div class="row">
      <div class="col_75">
        <form name="form-ajout" method="post" action="">
          Ajouter une tache: <br/>
          <input type="text" name="tache" class="fillcase" size="30"/>
          <input type="submit" name="submit-ajout" class="bouton_submit" value="Ajouter"/>
        </form>
      </div>
    </div>
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
