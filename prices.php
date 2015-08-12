<?php include 'template_parts/base.php' ?>

<?php startblock('title') ?>
  <?php superblock() ?> - Index
<?php endblock() ?>

<?php startblock('main') ?>
  <div><h1>Balatonszárszó</h1></div>
  <!-- Slider -->
  <div class="row">
    <div class="col-xs-12" id="slider">
      <!-- Top part of the slider -->
      <div class="row">
        <div class="col-sm-8" id="carousel-bounding-box">
          <div class="carousel slide" id="myCarousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item" data-slide-number="0">
              <img src="http://placehold.it/770x300"></div>

              <div class="item" data-slide-number="1">
              <img src="http://placehold.it/770x300"></div>

              <div class="item" data-slide-number="2">
              <img src="http://placehold.it/770x300"></div>

              <div class="item" data-slide-number="3">
              <img src="http://placehold.it/770x300"></div>

              <div class="item" data-slide-number="4">
              <img src="http://placehold.it/770x300"></div>

              <div class="item" data-slide-number="5">
              <img src="http://placehold.it/770x300"></div>
            </div>

            <!-- Carousel nav -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>

        <div class="col-sm-4" id="carousel-text"></div>

        <div id="slide-content" style="display: none;">
          <div id="slide-content-0">
            <h2>Slider One</h2>
            <p>Lorem Ipsum Dolor</p>
            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
          </div>

          <div id="slide-content-1">
            <h2>Slider Two</h2>
            <p>Lorem Ipsum Dolor</p>
            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
          </div>

          <div id="slide-content-2">
            <h2>Slider Three</h2>
            <p>Lorem Ipsum Dolor</p>
            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
          </div>

          <div id="slide-content-3">
            <h2>Slider Four</h2>
            <p>Lorem Ipsum Dolor</p>
            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
          </div>

          <div id="slide-content-4">
            <h2>Slider Five</h2>
            <p>Lorem Ipsum Dolor</p>
            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
          </div>

          <div id="slide-content-5">
            <h2>Slider Six</h2>
            <p>Lorem Ipsum Dolor</p>
            <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/Slider-->
  <div class="row hidden-xs" id="slider-thumbs">
    <!-- Bottom switcher of slider -->
    <ul class="hide-bullets">
      <li class="col-sm-2">
        <a class="thumbnail pic1" id="carousel-selector-0">
          <img src="http://placehold.it/170x100">
        </a>
      </li>

      <li class="col-sm-2">
        <a class="thumbnail pic2" id="carousel-selector-1">
          <img src="http://placehold.it/170x100">
        </a>
      </li>

      <li class="col-sm-2">
        <a class="thumbnail pic3" id="carousel-selector-2">
          <img src="http://placehold.it/170x100ee">
        </a>
      </li>

      <li class="col-sm-2">
        <a class="thumbnail pic4" id="carousel-selector-3">
          <img src="http://placehold.it/170x100r">
        </a>
      </li>

      <li class="col-sm-2">
        <a class="thumbnail pic5" id="carousel-selector-4">
          <img src="http://placehold.it/170x100e">
        </a>
      </li>

      <li class="col-sm-2">
        <a class="thumbnail pic6" id="carousel-selector-5">
          <img src="http://placehold.it/170x100">
        </a>
      </li>
    </ul>
  </div>
<?php endblock() ?>

<?php startblock('custom_js') ?>
  <script type="text/javascript">
    $(function() {
      $('#myCarousel').carousel({interval: 5000});

      $('.thumbnail').click(function () {
        $('#myCarousel').carousel(parseInt($(this).attr('id').split('-')[2]));
      });

      $('#carousel-text').html($('#slide-content-0').html());

      $('#myCarousel').on('slid.bs.carousel', function (e) {
        $('#carousel-text').html(
          $('#slide-content-'+ $('.item.active').data('slide-number')).html());
      });
    });
  </script>
<?php endblock() ?>
