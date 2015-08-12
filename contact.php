<?php include 'template_parts/base.php' ?>

<?php startblock('title') ?>
  <?php superblock() ?> - Contact
<?php endblock() ?>

<?php startblock('main') ?>
  <div class="row white-color">
    <div class="col-md-5">
      <div class="hatter_box panel panel-default">
        <div class="hatter_box panel-heading ">
          <h4 class="panel-title hatter_box_header">Kapcsolat</h4>
        </div>
        <div class="panel-body">
          <addres>
            <strong> Héjja Márton Kristóf</strong><br/>Balatonszárszó<br/> Magyarország
          </addres>
        </div>
        <div>
  <img style="margin-left: 50;" src="image/lake-balaton-781515__180.png"/>
</div>
<div>
  <a href="https://www.google.hu/maps/place/Balatonsz%C3%A1rsz%C3%B3/@46.8246725,17.8455068,11z/data=!4m2!3m1!1s0x4769b09cc9e6b9f5:0xd95d7ce00d031045">
  <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> BalatonSzárszó</span></a> 
</div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="panel hatter_box panel-default">
        <div class="panel-heading hatter_box">
          <h4 class="panel-title hatter_box_header">Kapcsolat felvétel</h4>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" id="contactform" method="post" form action="php/report.php" role="form">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Név</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="name" placeholder="Név">
              </div>
            </div>
            <div class="form-group">
              <label for="email"class="col-sm-2 control-label">E-mail</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail cím">
              </div>
            </div>
            <div class="form-group">
              <label for="subject"class="col-sm-2 control-label" >Tárgy</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" id="subject" name="subject" placeholder="Tárgy">
              </div>
            </div>
            <div class="form-group">
              <label for="message"class="col-sm-2 control-label">Üzenet</label>
              <div class="col-sm-8">
                  <textarea class="form-control" id="message" name="message" rows="6"></textarea>
              </div>
            </div>
            <div class="col-sm-8 col-md-offset-2">
              <input class="btn btn-default foot" type="submit" name="submit" value="Küldés" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endblock() ?>