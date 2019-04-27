<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi cuenta</title>
  </head>
  <body>
      <?php include 'template/components/header.php'; ?>
      <?php
            echo $_POST['nombre'] ;

      ?><br>
      <?php
      echo $_POST['correo'] ;
      ?>
  </body>
</html>
