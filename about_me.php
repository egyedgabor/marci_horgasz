<?php include 'template_parts/base.php' ?>

<?php startblock('title') ?>
  <?php superblock() ?> - Me
<?php endblock() ?>

<?php startblock('main') ?>
 <!-- 1. block -->
  <div class="container " style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row panel profile-box">
    <!-- picture in the box-->
      <div class="col-md-4 bg_blur ">
        <img src="/marci_horgasz/image/profile_background.jpg">
      </div>
      <!-- profile picture-->
      <div class="col-md-8 col-xs-12 ">
        <img src="/marci_horgasz/image/marci.jpg" class="img-thumbnail picture hidden-xs" />
        <img src="/marci_horgasz/image/marci.jpg" class="img-thumbnail visible-xs picture_mob" />
         <!-- description-->
        <div class="header">
          <h1>Héjja Márton</h1>
          <h4>Horgász túravezető</h4>
          <span>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                "There is no one who loves pain itself, who seeks after it and wants to have it,
                simply because it is pain..."
          </span>
        </div>
      </div>
      </div>  
    <!-- 1. block end-->
    <div style="text-align:center"><h1>Horgászatok</h1></div>
    <div class="simple-template-container"></div>
  </div>

<?php endblock() ?>

<?php startblock('custom_js') ?>
  <script src="js/jquery.loadTemplate-1.4.5.min.js"></script>
  <script src="js/blog.js"></script>
  </script>
    <?php if ($ENV["RUN_MODE"] == "DEV") { ?>
      <script src="js/holder.js"></script>
    <?php } elseif ($ENV["RUN_MODE"] == "LIVE") { ?>
      <script src="js_min/holder.min.js"></script>
    <?php } ?>
    <script type="text/javascript">
$( ".image_mini" ).click(function(event) {
  $('#mymodal').modal('show');
  var original_url = $(event.target).data().original;
  $('#modal_image').attr('src',original_url);
});
</script>

<?php endblock() ?>