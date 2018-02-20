<?php
$a = 1;
if ($a > 0){
 $affichage = "vert"; 
}
else{
$affichage = "hidden";

}
//$affichage = "vert"; 
$confirmation = "reinitialiser";
$texteConfirmation = "Réinitialiser les archives";

if (isset($_POST['reinitialiser'])){
  $confirmation = "confirmer";
  $texteConfirmation = "Confirmer la suppression des archives";
  $affichage = "rouge";
}
if (isset($_POST['confirmer'])){
  echo "Tout est supprimé <br />";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Hidden</title>
  <style>
    .vert{
      color: green;
    }
    .rouge{
      color: red;
    }
    .hidden {
    display: none;
}
  </style>
</head>
<body>
 <form action="test-hidden.php" method="POST">
  <input type="submit" id="<?php echo $confirmation; ?>" name="<?php echo $confirmation; ?>" class="<?php echo $affichage; ?>" value= "<?php echo $texteConfirmation; ?>" />
</form>
</body>
</html>