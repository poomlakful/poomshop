<?php 
$pagename = 'promotion';
include("process/header.php");
?>
  <div class="container body">
    <div class="row">
      <div class="col-sm-3">
        <?php include("process/page-left.php") ?>
      </div>
      <div class="col-sm-9">
        <h1>โปรโมชั่น</h1>
        <div class="panel panel-default item">
          <div class="panel-body">
            <?php for($i = 0; $i<30; $i++) { ?>
              โปรโมชั่น  
            <?php } ?>
            <img src="img/slideshow.jpg" alt="">
            <?php for($i = 0; $i<30; $i++) { ?>
              โปรโมชั่น  
            <?php } ?>
            <img src="img/slideshow.jpg" alt="">
            <?php for($i = 0; $i<30; $i++) { ?>
              โปรโมชั่น  
            <?php } ?>
          </div>
        </div>
      </div>
    </div><!-- row -->
  </div><!-- container body -->
<?php include("process/footer.php") ?>