

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<form enctype="multipart/form-data" action="profile.php" method="Post">
<input type= "radio" name="civilite" value="Mr" required/> Mr
<input type= "radio" name="civilite" value="Mme" required/> Mme
 <p>Votre nom : <input type="text" name="name" required /></p>
 <p>Votre prenom : <input type="text" name="firstname" required /></p>
 <label for="start"> date de naissance:</label>

<input type="date" name="dateN"
       value="2021-02-01"
       min="1900-01-01" max="2008-12-31" required>
      
 <p>ta photo ?? : <input name="userfile" type="file" />
 <p><input type="submit" value="OK" ></p></p>
</form>

</body>
</html>