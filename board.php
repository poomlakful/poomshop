<?php 
$pagename = 'board';
include("process/header.php");
?>
  <div class="container body">
    <div class="row">
      <div class="col-sm-3">
        <?php include("process/page-left.php") ?>
      </div>
      <div class="col-sm-9">
        <?php for($i=0;$i<5;$i++) { ?>
          <div class="panel panel-default item">
            <div class="row" style="margin:0 0 0 -15px">
              <div class="col-sm-3">
                <img src="img/item.jpg" alt="" style="width:100%">
              </div>
              <div class="col-sm-9"style="padding-top:15px">
                <h4 class="media-heading">
                  <a href="#">นาฬิกา</a>
                </h4>
                <p>
                นาฬิกา (อังกฤษ: Clock) เป็นเครื่องมือสำหรับใช้บอกเวลา โดยมากจะมีรอบเวลา 12 ชั่วโมง หรือ 24 ชั่วโมง 
                สำหรับนาฬิกาทั่วไป มีเครื่องหมายบอกชั่วโมง นาที หรือวินาที เครื่องมือสำหรับจับเวลาระยะสั้นๆ เรียกว่านาฬิกาจับเวลา 
                เดิมนั้นเป็นอุปกรณ์เชิงกล มีลานหมุนขับเคลื่อนกำลัง และมีเฟืองเป็นตัวทดความเร็วให้ได้รอบที่ต้องการ และใช้เข็มบอกเวลา 
                โดยใช้หน้าปัดเขียนตัวเลขระบุเวลาเอาไว้ ลักษณนามของนาฬิกา เรียกว่า “เรือน” แต่ก็มีนาฬิกาแบบอื่นๆ ซึ่งใช้บอกอีก 
                เช่น นาฬิกาทราย ใช้จับเวลา, นาฬิกากะลา เป็นกะลาเจาะรูใช้จับเวลา โดยการลอยในน้ำ จนกว่าจะจมก็ถือว่าหมดเวลา, นาฬิกาแดด 
                เป็นการตั้งเครื่องมือเพื่อให้...<a target="_blank" href="article.php?action=detail&amp;id=6" title="อ่านต่อ">อ่านต่อ</a>                      
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div><!-- row -->
  </div><!-- container body -->
<?php include("process/footer.php") ?>