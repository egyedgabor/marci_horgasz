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
    <div class="container-fluid ">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://www.facebook.com/marton.hejja?fref=ts" target="_blank">
              <img alt="Brand" class="fb_image" src="image/face.jpg">
              <span>Héjja Márton Kristóf</span>
            </a>
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar" aria-expanded="false" 
                    aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav menu">
              <li class="menu-item">
                <a class="glyphicon glyphicon-home" href="index.php"></a>
              </li>
              <li class="menu-item"><a href="about_me.php">Rólam</a> </li>
              <li class="menu-item"><a href="contact.php">Kapcsolat</a></li>
              <li class="menu-item"><a href="prices.php">Akciós ajánlatok</a></li>                            
              <li class="menu-item"><a href="pictures.php">Képek</a></li>
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

    <!-- JS 3th party -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS 3th party end-->

    <!-- JS EXTRA 3th party -->
    <?php startblock('extra_3th_party') ?>
    <?php endblock() ?>
    <!-- JS EXTRA 3th party end -->

    <script type="text/javascript">
      $(function () {
        //active menu
        $(".nav li a").each(function() {
          if (this.href === window.location.href) $(this).parent().addClass("active");
        });

        //menu (show and hide)
        function showMenu () {
          $('.navbar-header').show(1000);
          $('.navbar').removeClass('shrink');
          $('.sponsors').show(1000);
          $('.menu-item').show();
        }

        function hideMenu () {
          $('.navbar-header').hide(1000);
          $('.sponsors').hide(1000);
          $('.navbar').addClass('shrink');
          $('.menu-item').hide();
          $('.active').show(); 
        }

        $(window).scroll(function() {
          $(document).scrollTop() > 50 ? hideMenu() : showMenu();
        });

        $('.navbar').mouseenter(function(){
          if ($(document).scrollTop() > 50) showMenu();
        });

        $('.navbar').mouseleave(function(){
          if ($(document).scrollTop() > 50) hideMenu();
        });
      });
    </script>

    <!-- My JS -->
    <script src="js/main.js"> </script>
    <script src="js/pictures.js"></script>
    <!-- My JS END -->
    <?php startblock('custom_js') ?>
    <?php endblock() ?>
  </body>
</html>
