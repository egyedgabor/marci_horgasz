<?php include 'template_parts/base.php' ?>

<?php startblock('title') ?>
  <?php superblock() ?> - Pictures
<?php endblock() ?>

<?php startblock('main') ?>
  <div class="row">
    <div class="col-lg-12">

      <!-- 1. picture -->
      <div class="col-md-3 col-sm-4 col-xs-6">
        <a class="galery thumbnail"
           href="javascript:;"
           data-toggle="modal"
           data-title="Balatonszárszói apartman"
           data-caption="A központi strandon található sekélyvizű gyermeköböl egyedülálló a déli 
                         parton, kifejezetten kisgyermekes családoknak ajánlott. Az itt lévő
                         strandok vize sekély, homokos, nem iszapos partja rendezett, fásított,
                         fűvel borított."
           data-image="image/house 1.jpg"
           data-target="#image-gallery">
          <img class="img-responsive" src="image/house 1.jpg" alt="Short alt text">
        </a>
      </div>
      <!-- 1. picture end -->

      <!-- 2. picture -->
      <div class="col-md-3 col-sm-4 col-xs-6">
        <a class="galery thumbnail"
           href="javascript:;"
           data-toggle="modal"
           data-title="Keszeg Buzogány"
           data-caption="Itt látható a keszeg buzogány :D"
           data-image="image/fish_3.jpg"
           data-target="#image-gallery">
          <img class="img-responsive" src="image/fish_3.jpg" alt="A alt text">
        </a>
      </div>
      <!-- 2. picture  end-->

      <!-- 3. picture -->
      <div class="col-md-3 col-sm-4 col-xs-6">
        <a class="galery thumbnail"
           href="image/fish 1.jpg"
           data-toggle="modal"
           data-title="Héjjjjjja"
           data-caption="Na Mizu?"
           data-image="image/fish 1.jpg"
           data-target="#image-gallery">
          <img class="img-responsive" src="image/fish 1.jpg" alt="Another alt text">
        </a>
      </div>
      <!-- 3. picture end -->

      <div class="modal fade" id="image-gallery" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
              </button>
              <h4 class="black-color modal-title" id="image-gallery-title"></h4>
            </div>

            <div class="modal-body">
              <img id="image-gallery-image" class="img-responsive" src="">
            </div>

            <div class="text-footer-image modal-footer">
              <div class="col-md-2">
                <button type="button" class="btn btn-primary" id="show-previous-image">
                  Previous
                </button>
              </div>
              <div class="col-md-8 text-justify" id="image-gallery-caption"></div>
              <div class="col-md-2">
                <button type="button" id="show-next-image" class="btn btn-success">
                  Next
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endblock() ?>
