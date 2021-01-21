
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
  </head>
  <body>
  <?php
  
  if (mime_content_type($_FILES["userfile"]["tmp_name"]) == 'image/jpeg'){
    $filename = "image/".$_FILES['userfile']['name'];
    move_uploaded_file($_FILES["userfile"]["tmp_name"],$filename);  
  }
  else
  {
    header('Location: index.php');
  }

?>
<img src= "<?php echo $filename ?>" style="width:300px" >
<div>
<?php echo "bonjour ${_POST['civilite']} ${_POST['name']} ${_POST['firstname']} 
    nous avous bien reçu ".$_FILES['userfile']['name'] ;?>
    </div>
    <div>
<?php echo "vous êtes née le ".$_POST['dateN'];?>
    </div>

</body>
</html>