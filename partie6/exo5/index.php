<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form action="index.php" method="Post">
<label for="civilité">Choose a pet:</label>

<select name="civilite" id="civilite">
    <option value="">--Please choose an option--</option>
    <option value="Mr">Mr</option>
    <option value="Mme">Mme</option>
    </select>
 <p>Votre nom : <input type="text" name="name" /></p>
 <p>Votre prenom : <input type="text" name="firstname" /></p>
 <p><input type="submit" value="OK"></p>
</form>


</body>
</html>