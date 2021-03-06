<?php require_once "components/phpti_0.9/ti.php" ?>
<?php require_once "env.php" ?>
<html>
<!-- header-->
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
  <!-- header end-->

  <!-- menu-->
  <body class="hatter" data-runMode="<?php echo $ENV['RUN_MODE'] ?>">
    <div class="container-fluid">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://www.facebook.com/marton.hejja?fref=ts" target="_blank">
            <img alt="Brand" class="fb_image" src="image/face.jpg">
            <span>Héjja Márton Kristóf</span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav menu">
            <li class="menu-item">
              <a class="glyphicon glyphicon-home" href="index.php"></a>
            </li>
            <li class="menu-item"><a href="about_me.php">Rólam</a> </li>
            <li class="menu-item"><a href="apartman.php">Szállás</a></li>
            <li class="menu-item"><a href="contact.php">Kapcsolat</a></li>                           
          </ul>
          <ul class="hidden-xs nav navbar-nav navbar-right sponsors">
            <li>
              <a href="http://www.horgaszutazas.hu/adventure-fishingrol">
                <img src="image/adventure.png">
              </a>
            </li>
            <li>
              <a href="http://www.sport-horgasz.hu/">
                <img src="image/SSH_kopf.png">
              </a>
            </li>
            <li>
              <a href="http://www.energofish.hu/">
                <img src="image/energo_logo.jpg">
              </a>
            </li>
            <li>
              <a href="http://www.carplove.com/">
                <img src="image/carplove.png">
              </a>
            </li>
            <li>
              <a href="http://fishingandhuntingtv.com/hungarian/">
                <img src="image/fhtv.jpg">
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- menu end-->

    <!-- main block-->
    <div class="container main-block">
      <?php startblock('main') ?>
      <?php endblock() ?>
    </div>
     <!-- main block end-->

    <!-- footer-->
    <footer class="site-footer footer">
      <div class="container-fluid">
        <p class="white-color">Oldalt Készítete: Egyed Gábor </p>
        <span class="glyphicon glyphicon-envelope"style="color:#8BCBF7"></span>
        <a href="mailto:#" class="white-color" >EgyedG90@gmail.com</a>
      </div>
    </footer>
    <!-- footer end-->

    <!-- modal start -->
    <div class="modal fade" id="mymodal">
      <div class="modal-dialog">
        <div class="modal-content modal-sm" style="background-color: transparent">
          <div class="modal-body" >
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <img src="" style="max-height: 550" id="modal_image">
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
     <!-- modal end -->

    <!-- JS 3th party -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS 3th party end-->

    <!-- JS EXTRA 3th party -->
    <?php startblock('extra_3th_party') ?>
    <?php endblock() ?>
    <!-- JS EXTRA 3th party end -->

    <script type="text/javascript">
    /*global $*/
      $(function () {
        //active menu
        $(".nav li a").each(function() {
          if (this.href === window.location.href) $(this).parent().addClass("active");
        });
      });
    </script>

    <?php startblock('custom_js') ?>
    <?php endblock() ?>

        <!-- My JS -->
    <?php if ($ENV["RUN_MODE"] == "DEV") { ?>
      <script src="js/main.js"></script>
      <script src="js/pictures.js"></script>
    <?php } elseif ($ENV["RUN_MODE"] == "LIVE") { ?>
      <script src="js_min/main.min.js"></script>
      <script src="js_min/pictures.min.js"></script>
    <?php } ?>  
    
    <!-- My JS END -->
  </body>
</html>
