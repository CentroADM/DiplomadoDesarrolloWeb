<?php
  define(
    'SITE_URL',
    'http://localhost:8000'
  );
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/main.css">

  </head>
  <body >
    <?php include 'template/components/header.php'; ?>
    <?php include 'template/pages/home.php'; ?>
    <?php include 'template/components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/js/micodigo.js"> </script>
  </body>
</html>
