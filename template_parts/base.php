<?php require_once "components/phpti_0.9/ti.php" ?>
<?php require_once "env.php" ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon.png">    
    <title>
      <?php startblock('title') ?>
        HM-Fishing
      <?php endblock() ?>
    </title>   
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/main.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/profile_box.css" rel="stylesheet">
    <link href="css/reviews.css" rel="stylesheet">
  </head>
  <body class="hatter">
    <?php include "template_parts/menu.php" ?>
    <div class="container main-block">
      <?php startblock('main') ?>
      <?php endblock() ?>
    </div>
    <?php include "template_parts/footer.php" ?>
    <?php include "template_parts/js.php" ?>
  </body>
</html>