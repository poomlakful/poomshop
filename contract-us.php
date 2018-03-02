<?php
   $pagename = 'contract-us';
   include("process/header.php");
   ?>
<div class="container body">
   <div class="row">
      <div class="col-sm-3">
         <?php include("process/page-left.php") ?>
      </div>
      <div class="col-sm-9">
         <form name="sentMessage" id="contactForm" novalidate="">
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>ชื่อ-นามสกุล</label>
                  <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" id="name" required="" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>อีเมล</label>
                  <input type="email" class="form-control" placeholder="อีเมล" id="email" required="" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>เบอร์ติดต่อ</label>
                  <input type="tel" class="form-control" placeholder="เบอร์ติดต่อ" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <div class="row control-group">
               <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>ข้อความ</label>
                  <textarea rows="5" class="form-control" placeholder="ข้อความ" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
               </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
               <div class="form-group col-xs-12">
                  <button type="submit" class="btn btn-success btn-lg">ส่ง</button>
               </div>
            </div>
         </form>
      </div>
   </div>
   <!-- row -->
</div>
<!-- container body -->
<?php include("process/footer.php") ?>