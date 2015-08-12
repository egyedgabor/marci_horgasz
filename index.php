<?php include 'template_parts/base.php' ?>

<?php startblock('title') ?> 
  <?php superblock() ?> - Index
<?php endblock() ?>

<?php startblock('main') ?>
<h1 style="text-align:center; margin-bottom:30px">Horgásztúrák a Balatonon</h1>
<!-- News -->
<div class="row">
  <div class="col-md-6">
    <div class="col-xs-12">
      <h1>Hírek</h1>
    </div>
    <div class="row">
      <div class="news">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <img class="featurette-image brown-border img-responsive" src="image/fish 1.jpg">
  </div>
</div>
<!-- News end -->

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
<script src="js/jquery.loadTemplate-1.4.5.min.js"></script>
<script src="js/news.js"></script>
<?php endblock() ?>
