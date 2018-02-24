<?php 
$pagename = 'about';
include("process/header.php");
?>
  <div class="container body">
    <div class="row">
      <div class="col-sm-3">
        <?php include("process/page-left.php") ?>
      </div>
      <div class="col-sm-9">
        <div class="panel panel-default item">
          <div class="panel-body">
            <?php for($i = 0; $i<30; $i++) { ?>
              เกี่ยวกับเรา  
            <?php } ?>
            <img src="img/slideshow.jpg" alt="">
            <?php for($i = 0; $i<30; $i++) { ?>
              เกี่ยวกับเรา  
            <?php } ?>
            <img src="img/slideshow.jpg" alt="">
            <?php for($i = 0; $i<30; $i++) { ?>
              เกี่ยวกับเรา  
            <?php } ?>
          </div>
        </div>        
      </div>
    </div><!-- row -->
  </div><!-- container body -->
<?php include("process/footer.php") ?>