<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <?php 
if (isset($_POST['name'])) {
    echo "bonjour ${_POST['civilite']} ${_POST['name']} ${_POST['firstname']} 
    nous avous bien reçu ".$_FILES['userfile']['name'] ;
}
else{
  echo
'<form enctype="multipart/form-data" action="index.php" method="Post">
<label for="civilité">Choose a pet:</label>

<select name="civilite" id="civilite" required>
    <option value="">--Please choose an option--</option>
    <option value="Mr">Mr</option>
    <option value="Mme">Mme</option>
    </select>
 <p>Votre nom : <input type="text" name="name" required /></p>
 <p>Votre prenom : <input type="text" name="firstname" required /></p>
 <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
 Envoyez ce fichier : <input name="userfile" type="file" accept=".pdf" />
 <p><input type="submit" value="OK" required></p>
</form>';
}

?>
</body>
</html>