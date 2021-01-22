<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
  </head>
  <body>

  <?php 
 if(isset($_POST['btnSubmit'])){
  var_dump($_FILES);
  $imageInfos = explode("/",$_FILES["myFile"]["type"]);
  var_dump($imageInfos);
  

  ?>
  
  <p>Bonjour <?= $_POST['gender']." ",  $_POST['lastname']." " ,  $_POST['firstname']?> 
        <br> nom de fichier  : <?= $_FILES['myFile']['name']?> <br>
        l'extension de votre fichier est: <?=$imageInfos[1] ?> </p>
        
<?php   
}else
{
?>
  <form method="post" action="" enctype="multipart/form-data">
  <label for="gender">Civilité : </label>
  <select id="gender" name="gender" required>
      <option value="" disabled selected>-- Choisir une civilité --</option>
      <option value="Mme">Mme</option>
      <option value="Mr">Mr</option>
  </select>
  <label for="firstname">Prénom :</label>
  <input type="text" id="firstname" name="firstname" required placeholder="Jean">
  <label for="lastname">Nom : </label>
  <input type="text" id="lastname" name="lastname" required placeholder="MARTIN">
  <label for="myFile">Fichier : </label>
  <input type="file" id="myFile" name="myFile" required>
  <input name="btnSubmit" type="submit" value="Envoyer">
</form>
<?php }; ?>
</body>
</html>