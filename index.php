<?php include("process/header.php") ?>
  <div class="container body">
    <div class="row">
      <div class="col-sm-3">
        <?php include("process/page-left.php") ?>
      </div>
      <div class="col-sm-9">
        <div class="panel panel-default item">
          <div class="panel-body">
            <?php for($i = 0; $i<12; $i++) { ?>
              ข้อความต้อนรับ 
            <?php } ?>
            <img src="img/slideshow.jpg" alt="">
            <?php for($i = 0; $i<12; $i++) { ?>
              ข้อความต้อนรับ 
            <?php } ?>
            <img src="img/slideshow.jpg" alt="">
            <?php for($i = 0; $i<12; $i++) { ?>
              ข้อความต้อนรับ 
            <?php } ?>
          </div>
        </div>
        <h1>สินค้าทั้งหมด</h1>
        <div class="row">
        <?php for($i = 0; $i<12; $i++) { ?>
          <div class="col-xs-6 col-sm-4">
            <div class="panel panel-default item">
              <div class="panel-body">
                <img src="img/item.jpg" alt="">
              </div>
              <div class="panel-footer">Panel footer</div>
            </div>
          </div>
        <?php } ?>
        </div><!-- row -->
        <center>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </center>
      </div>
    </div><!-- row -->
  </div><!-- container body -->
<?php include("process/footer.php") ?>