<?php

define(
  'SITE_URL',
  'http://localhost:8000/'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>/estilos.css">
</head>
<body>
    <div class="contenedor">
      <div class="caja"></div>
    </div>
    <button id="boton" type="button" name="button" >Apachurrame</button>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="<?php echo SITE_URL; ?>/micodigo.js">

      </script>
</body>
</html>
