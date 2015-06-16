<?php?>
<html>
    <?php include "template_parts/header.php" ?>
    <body class="hatter main">
        <?php include "template_parts/menu.php" ?>
        <div class="container-fluid">
            <div class="container">
                <div class="row white-color">
                    <div class="col-md-5">
                        <div class="hatter_box panel panel-default">
                            <div class="hatter_box panel-heading ">
                                <h4 class="panel-title hatter_box_header">Kapcsolat</h4>
                            </div>
                            <div class="panel-body">  
                                <addres><strong> Héjja Márton Kristóf</strong><br>Balatonszárszó<br> Magyarország</addres>
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
            </div>
        </div>
       <div>    
            
        </div>
        <?php include "template_parts/js.php" ?>
        <?php include "template_parts/footer_contact.php" ?>       
    </body>
</html>