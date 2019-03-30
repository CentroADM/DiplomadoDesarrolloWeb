<?php

define(
  'SITE_URL',
  'http://localhost:8000/'
);

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/estilos.css">
  <title>Document</title>
</head>
<body>

  <?php include 'templates/components/header.php'; ?>
  <main>
      <?php include 'templates/pages/home.php'; ?>
  </main>
  <?php include 'templates/components/footer.php'; ?>
</body>
</html>
