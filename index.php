<?php
// LECTURE JSON
function lectureJSON(){ 
  $file = file_get_contents("todo.json");
  $arrayAFairePHP = json_decode($file, true);
  foreach ($arrayAFairePHP["afaire"] as $aFaire){
    echo $aFaire."<br>";
  }
}
// AJOUT DANS JSON
//function ajoutJSON(){ 
  if(isset($_POST["tache"])) {
    echo $_POST["tache"]."<br>";
    $tacheAjout = htmlspecialchars($_POST["tache"]);
    $file = file_get_contents('todo.json');  
    $arrayAjoutPHP = json_decode($file, true); 
    $arrayAjoutPHP[] = $tacheAjout;  
    $finalAjout = json_encode($arrayAjoutPHP);  
    if(file_put_contents('todo.json', $finalAjout))  
    {  
      echo "Ajout réussit ;-)";  
    }   
  }
//}
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
        <p><?php lectureJSON(); ?></p>
      </div>
    </div>

    <div class="row">
      <div class="col_fin centre">
        <form name="form" method="post" action="">
          Ajouter une tache: <br/>
          <input type="text" name="tache" size="50"/> <br/><br/>
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
    </div>    
    <div class="row">
    <p><a href="https://github.com/becodeorg/Swartz-promo-3/blob/master/Parcours/06-PHP/Manipulation_fichier_php.md" target="_blank">Manipulation de fichiers</a>
    </p>
    </div>
    <footer>
      <h2>Olivier & Jean Luc :D, BeCode.org</h2>
    </footer>
  </body>
</html>
