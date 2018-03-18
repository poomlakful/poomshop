<!-- Modal -->
<div class="modal fade" id="shopping-cart-modal" tabindex="-1" role="dialog" aria-labelledby="shopping-cart-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ตระกร้าสินค้า</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 17px; top: 17px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">#</th>
              <th scope="col" style="text-align: center;">รูปภาพ</th>
              <th scope="col" style="text-align: center;">ชื่อ</th>
              <th scope="col" style="text-align: center;">ราคา</th>
              <th scope="col" style="text-align: center;">จำนวน</th>
              <th scope="col" style="text-align: center;">รวม</th>
              <th scope="col" style="text-align: center;">อื่นๆ</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i=1;$i<=2;$i++) { ?>
              <tr>
                <th scope="row" style="text-align: center;"><?= $i ?></th>
                <td style="text-align: center;"><img src="img/item.jpg" alt="" style="height: 100px"></td>
                <td>สินค้าชิ้นที่ <?= $i ?></td>
                <td style="text-align: center;">299</td>
                <td style="text-align: center;"><input type="number" value="1" min="1" style="width: 50px"></td>
                <td style="text-align: center;">299</td>
                <td style="text-align: center;"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
              </tr>
            <?php } ?>
            <tr>
              <th scope="row" colspan="5" style="text-align: right;">ราคารวมสุทธิ</th>
              <td  style="text-align: center;">299</td>
              <td>บาท</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">สั่งซื้อสินค้า</button>
      </div>
    </div>
  </div>
</div>

<!-- Sign In -->
<div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="sign-in-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เข้าสู่ระบบ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 17px; top: 17px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
            <div class="row">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>อีเมล</label>
                <input type="text" class="form-control" placeholder="อีเมล" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-bottom: 0">
                <label>รหัสผ่าน</label>
                <input type="text" class="form-control" placeholder="รหัสผ่าน" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
         </form>
         <hr>
         <button><i class="fa fa-facebook-official"></i> เข้าสู่ระบบด้วย Facebook</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">เข้าสู่ระบบ</button>
      </div>
    </div>
  </div>
</div>

<!-- Register -->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">สมัครสมาชิค</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 17px; top: 17px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
            <div class="row">        
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>อีเมล</label>
                <input type="text" class="form-control" placeholder="อีเมล" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>รหัสผ่าน</label>
                <input type="text" class="form-control" placeholder="รหัสผ่าน" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>ยืนยันรหัสผ่าน</label>
                <input type="text" class="form-control" placeholder="ยืนยันรหัสผ่าน" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
         </form>
         <hr>
         <button><i class="fa fa-facebook-official"></i> เข้าสู่ระบบด้วย Facebook</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">สมัครสมาชิค</button>
      </div>
    </div>
  </div>
</div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4 box">
          <div class="box">
            <h4>หมวดหมู่สินค้า</h4>
            <ul class="list-inline">
              <li><a href="#">หมวดหมูที่ 1</a></li>
              <li><a href="#">หมวดหมูที่ 2</a></li>
              <li><a href="#">หมวดหมูที่ 3</a></li>
            </ul>
          </div>
          <div class="box">
            <h4>เมนู</h4>
            <ul class="list-inline">
              <li><a href="#">หน้าหลัก</a></li>
              <li><a href="#">รายการสินค้า</a></li>
              <li><a href="#">โปรโมชั่น</a></li>
              <li><a href="#">แจ้งชำระเงิน</a></li>
              <li><a href="#">วิธีการสั่งซื้อสินค้า</a></li>
              <li><a href="#">เว็บบอร์ด</a></li>
              <li><a href="about.php">เกี่ยวกับเรา</a></li>
              <li><a href="contract-us.php">ติดต่อเรา</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="box">
            <h4>สมัครรับข่าวสารโปรโมชั่น</h4>
            <form class="form-inline">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                  <input type="text" class="form-control" placeholder="E-mail">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                      สมัครรับข้อมูล
                    </button>
                  </span>
                </div>
              </div>
            </form>
          </div>
          <div class="box">
            <h4>Fowllow Us</h4>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
              <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Google Plus</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box">
            <h4>เกี่ยวกับเรา</h4>
            <div>
              โทรศัพท์: 088-0316623<br>
              E-mail: poomlak1994@hotmail.com<br>
              ที่อยู่: 184/3 ต.จุมพล อ.โพนพิสัย จ.หนองคาย 43120<br>
            </div>
          </div>
        </div>
      </div><!-- row -->
      <hr style="margin-top: 0">
      <div class="creadit">
        <div class="creadit-left">
          Copyright &copy; 2017 shopingmall.com
        </div>
        <div class="creadit-right">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shoping Mall
        </div>
      </div>
    </div><!-- container -->
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>