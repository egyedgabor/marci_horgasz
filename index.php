<?php include 'template_parts/base.php' ?>

<?php startblock('title') ?> 
  <?php superblock() ?> - Index
<?php endblock() ?>

<?php startblock('main') ?>
<!-- START Marketing Block-->
<div class="row white-color">
</div>
  <!-- 1. block -->
  <div class="col-lg-4 marketing-block">
    <a href="about_me.php">
      <img class="img-circle rotation marketing_image" src="image/fisherman.jpg">
    </a>
    <h2 class="marketing_title">Rólam</h2>
    <div class="marketing_text">
      <p>
          Természetesen kínálatunkat folyamatosan bővítjük, és rendszeresen
          készítünk vonzó ajánlatokat a világ legjobb horgászhelyeire. 2009-ben 
          több új úticélunk szervezésére kizárólagos jogot szereztünk nem csak 
          Magyarországon, hanem a közép-európai régióban is.
      </p>
    </div>
    <a href="about_me.php" class="btn btn-default">
      <i class="glyphicon glyphicon-share-alt"></i>
      <span>Tovább</span>
    </a>
  </div>

  <!-- 2. block -->
  <div class="col-lg-4 marketing-block">
    <a href="http://horgaszutazas.hu/lake-balaton">
      <img class="img-circle rotation marketing_image" src="image/adventure.png">
    </a>
    <h2 class="marketing_title">Adventure Fishing</h2>
    <div class="marketing_text">
      <p>
         Az Adventure Fishing utazási iroda, egy baráti kapcsolatokból kinövő 
         vállalkozás, melyet a közös hobbi szeretete tart össze. Mindannyian
         szeretünk utazni és horgászni, és ki ne szeretne olyan dologgal foglalkozni,
         melyben egyben örömét is leli?
      </p>
      <a href="http://horgaszutazas.hu/lake-balaton" class="btn btn-default">
        <i class="glyphicon glyphicon-share-alt" ></i>
        <span>Tovább</span>
      </a>
    </div>
  </div>

  <!-- 3. block -->
  <div class="col-lg-4 marketing-block" >
    <a href="prices.php">
      <img class="img-circle rotation marketing_image" src="image/house.jpg">
    </a>
    <h2 class="marketing_title">Akciók</h2>
    <div class="marketing_text">
      <p>
        Szeretettel várjuk Öntés és kedves családját! Neves balatoni borászok borait 
        kostólgathatják, vásárolhatják meg itt a környéken lévő összes borászatban.
        Nagyszerű horgászati lehetőségek vannak Balatonszárszón.
      </p>
      <a href="prices.php" class="btn btn-default">
        <i class="glyphicon glyphicon-share-alt"></i>
        <span>Tovább</span>
      </a>
    </div>
  </div>
</div>
<!-- END Marketing Block-->

<!-- START Carousel -->
<div id="myCarousel" class="carousel brown-border" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox" >

    <!-- 1. picture -->
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
              <a class="btn btn-lg btn-primary" href="#" role="button">Jelentkez MOST</a>
            </p>
        </div>
      </div>
    </div>

    <!-- 2. picture -->
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
            <a class="btn btn-lg btn-primary" href="#" role="button">Tudj meg többet</a>
          </p>
        </div>
      </div>
    </div>

    <!-- 3. picture -->
    <div class="item">
      <img src="image/2.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption" >
          <h1>Balaton</h1>
          <p>
            2004-ben elnyerte az Örökségünk Környékén gyógyfürdők,
            termálforrások találhatók. A tavon minden évben megrendezik a
            Kékszalag Nemzetközi Vitorlásversenyt.</p>
          <p>
            <a class="btn btn-lg btn-primary" href="#" role="button">Képek</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- END Carousel -->

<!-- START 1. Detailed description -->
<hr class="featurette-divider">
<div class="row featurette" style="color:white;">
  <div class="col-md-7">
    <h2 class="featurette-heading" >A Balatoni potyka!</h2>
      <p class="lead">
        a sugarasúszójú csontos halak közé tartozó típusfaj,
        a pontyalakúak rendjének és a pontyfélék családjának névadója.
        Palearktikus elterjedésű halfaj. Eredeti őshazája Ázsia,
        valamint Európa keleti fele (Kelet-Európa és a Duna-medence),
        de tenyésztési céllal máshova is betelepítették, így ma már
        gyakorlatilag minden földrész édesvizeiben megtalálható.
        A mérsékelt égövi alföldi vidékek tavait és lassú vizű
        folyóit kedveli.
      </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image brown-border img-responsive" src="image/fish 1.jpg">
  </div>
</div>
<!-- END 1. Detailed description -->

<!-- START 2. Detailed description -->
<hr class="featurette-divider">
<div class="row featurette" style="color:white;">
  <div class="col-md-5">
    <img class="featurette-image brown-border img-responsive" src="image/boat 2.jpg">
  </div>
  <div class="col-md-7">
      <h2 class="featurette-heading">Horgászat Balatoni ladikból.</h2>
      <p class="lead">
        A várakozásomnak megfelelően nagyon stabil alkotmánynak
        bizonyult, nem billeg, és a lapos fenéknek köszönhetően az
        orrát se emelgeti az evezőcsapásokra. Akár két ember is
        kiállhat az oldalára, akkor is messze van a felborulástól.
        Vígan belefér az egész család, de magányos horgászatnál is jól
        jön a tágassága, kényelme. Nagyon tetszik, legszívesebben ki se
        szállnék belőle :-)
      </p>
  </div>
</div>
<!-- END 2. Detailed description -->

<!-- START 3. Detailed description -->
<hr class="featurette-divider">
<div class="row featurette" style="color:white;">
  <div class="col-md-7">
    <h2 class="featurette-heading">Balatonszárszói apartman</h2>
    <p class="lead">
      Balatonszárszó egyre felkapottabb üdülőhely a gyermekes
      családok körében, mivel a környéken 3 szabadstrand is
      található, melyek jól felszereltek
      ( focipálya, tenisz, röplabdapálya) valamint modern játszóterei
      is gondoskodnak gyermekei szórakoztatásáról.A központi strandon
      található sekélyvizű gyermeköböl egyedülálló a déli parton,
      kifejezetten kisgyermekes családoknak ajánlott.
      Az itt lévő strandok vize sekély, homokos, nem iszapos partja
      rendezett , fásított , fűvel borított.
    </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image brown-border img-responsive" src="image/house 1.jpg">
  </div>
</div>
<!-- END 3. Detailed description -->
<?php endblock() ?>

<?php startblock('custom_js') ?>
  <script type="text/javascript">
    $(function() {
      $('#myCarousel').carousel();
    });
  </script>
<?php endblock() ?>
