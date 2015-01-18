<?php?>
<html >
    <?php include "template_parts/header.php" ?>

    <body class="hatter">
        <?php include "template_parts/menu.php" ?>


    <!-- Carousel
    ================================================== -->
    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

      <!-- Three columns of text below the carousel -->
            <div class="row " style="color: white;">
                <div class="col-lg-4">
                    <a href="#about"><img class="img-circle rotation" src="image/:D.jpg" 
                        style="width: 100px; height: 100px;"></a>
                    <div class="">
                        <h2>Rólam</h2>
                        <p >Az Adventure Fishing utazási iroda, egy baráti kapcsolatokból 
                            kinövő vállalkozás, melyet a közös hobbi szeretete tart össze. 
                            Mindannyian szeretünk utazni és horgászni, és ki ne szeretne olyan 
                            dologgal foglalkozni, melyben egyben örömét is leli?</p>
                    </div>    
                    <a class="btn btn-default">
                        <span class="glyphicon glyphicon-share-alt" aria-hidden="true">
                        </span> Tovább
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#about"><img class="img-circle rotation" src="image/adventure.png" 
                         style="width: 100px; height: 100px;"></a>
                    <h2>Adventure fishing</h2>
                    <p>Az Adventure Fishing utazási iroda, egy baráti kapcsolatokból kinövő 
                       vállalkozás, melyet a közös hobbi szeretete tart össze. Mindannyian
                       szeretünk utazni és horgászni, és ki ne szeretne olyan dologgal foglalkozni,
                       melyben egyben örömét is leli?</p>
                    <a class="btn btn-default">
                        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 
                        Tovább
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="#about"><img class="img-circle rotation " src="image/house.jpg" style="width: 100px; height: 100px;"></a>
                    <h2>Szálások</h2>
                    <p>Az Adventure Fishing utazási iroda, egy baráti kapcsolatokból kinövő vállalkozás, melyet a közös hobbi szeretete tart össze. Mindannyian szeretünk utazni és horgászni, és ki ne szeretne olyan dologgal foglalkozni, melyben egyben örömét is leli?</p>
                    <a class="btn btn-default">
                        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Tovább
                    </a>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox" >
                    <div class="item active">
                        <img src="image/3.jpg" alt="First slide">
                        <div class="container" >
                            <div class="carousel-caption"  >
                                <h1>Balaton.</h1>
                                <p>A Balaton (becenevén „a magyar tenger”; latinul Lacus Pelso,
                                    németül Plattensee)[1] Közép-Európa legnagyobb tava, 
                                    Magyarország vízrajzának meghatározó eleme. </p>
                                <p><a class="btn btn-lg btn-primary" href="#" 
                                      role="button">Jelentkez MOST</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/Balaton.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption" >
                                <h1>Balaton</h1>
                                <p>Keleti medencéjét a Tihanyi-félsziget választja el a tó többi 
                                   részétől. Déli partjánál medre sekélyebb. Északi oldalán 
                                   találhatóa badacsonyi borvidék és a Tapolcai-medence, 
                                   jellegzetes vulkáni tanúhegyeivel. A tó egyes részein halászat 
                                   folyik.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" 
                                      role="button">Tudj meg többet</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/1.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption" >
                                <h1>Balaton</h1>
                                <p>Budapest mellett az ország turisztikailag leglátogatottabb 
                                   területe, 2004-ben elnyerte az Örökségünk Környékén gyógyfürdők, termálforrások találhatók. A tavon minden évben megrendezik a 
                                   Kékszalag Nemzetközi Vitorlásversenyt.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Képek
                                </a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"
                >
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" 
                data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel -->

      <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" >

            <div class="row featurette" style="color:white;">
                <div class="col-md-7">
                    <h2 class="featurette-heading" >A Balatoni potyka! 
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. 
                    Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus 
                    magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="image/fish 1.jpg" style="border-width: 5px; border-style:solid; border-color: #330000; ">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="color:white;">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="image/boat 2.jpg" style="border-width: 5px; border-style:solid; border-color: #330000; ">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Horgászat Balatoni ladikból.</h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. 
                    Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus
                     magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus 
                     commodo.</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="color:white;">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">
                        Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum
                                    id ligula porta felis euismod semper. Praesent commodo cursus 
                                    magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                                    ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="image/house 1.jpg" style="border-width: 5px; border-style:solid; border-color: #330000; ">
                </div>
            </div>

            <hr class="featurette-divider">
        </div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
        <?php include "template_parts/footer.php" ?>
      
        <?php include "template_parts/js.php" ?>

    </body>

</html>

