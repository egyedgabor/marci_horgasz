<html>
    <?php include "template_parts/header.php" ?>
    <body class="hatter main">
        <?php include "template_parts/menu.php" ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                                <h1>Balaton</h1>
                                <p>
                                    A Balaton (becenevén „a magyar tenger”; latinul Lacus Pelso,
                                    németül Plattensee)[1] Közép-Európa legnagyobb tava, 
                                    Magyarország vízrajzának meghatározó eleme.
                                </p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">
                                        Jelentkez MOST
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/Balaton.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption" >
                                <h1>Balaton</h1>
                                <p>
                                    Déli partjánál medre sekélyebb. Északi oldalán
                                    találhatóa badacsonyi borvidék és a Tapolcai-medence,
                                    jellegzetes vulkáni tanúhegyeivel. A tó egyes részein halászat
                                    folyik.
                                </p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">
                                        Tudj meg többet
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/2.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption" >
                                <h1>Balaton</h1>
                                <p>2004-ben elnyerte az Örökségünk Környékén gyógyfürdők,
                                   termálforrások találhatók. A tavon minden évben megrendezik a 
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
            </div>
        <?php include "template_parts/footer.php" ?>     
        <?php include "template_parts/js.php" ?>  
    </body>
</html>