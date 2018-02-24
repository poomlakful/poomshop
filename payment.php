<?php 
$pagename = 'payment';
include("process/header.php");
?>
  <div class="container body">
    <div class="row">
      <div class="col-sm-3">
        <?php include("process/page-left.php") ?>
      </div>
      <div class="col-sm-9">
      <div class="FormP small-12 medium-6 large-6 columns">
    
    <div id="messages_product_view"></div>
    <div class="page-title">
        <h1>แจ้งชำระเงิน</h1>
    </div>
    <form action="https://www.425degree.com/billing/index/post" id="paymentconfirmationForm" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();">
        <div class="fieldset">
            <h2 class="legend">กรุณากรอกข้อมูลด้านล่างให้ตรบถ้วนเพื่อแจ้งชำระเงิน</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="field">
                        <label for="name" class="required"><em>*</em>ชื่อ</label>
                        <div class="input-box">
                            <input name="name" id="name" title="ชื่อ" value="" class="input-text required-entry" type="text">
                        </div>
                    </div>
                    <!-- <div class="field">
                        <label for="email" class="required"><em>*</em>อีเมล์</label>
                        <div class="input-box">
                            <input name="email" id="email" title="อีเมล์" value="" class="input-text required-entry validate-email" type="text" />
                        </div>
                    </div> -->
                </li>
                <li>
                    <label for="telephone" class="required"><em>*</em>เบอร์โทรศัพท์</label>
                    <div class="input-box">
                        <input name="telephone" id="telephone" title="เบอร์โทรศัพท์" value="" class="required-entry input-text" type="text">
                    </div>
                </li>
                <li>
                    <label for="order_id" class="required"><em>*</em>เลขที่คำสั่งซื้อ (Order ID)</label>
                    <div class="input-box">
                        <input name="order_id" id="order_id" title="เลขที่คำสั่งซื้อ (Order ID)" value="" class="required-entry input-text" type="text">
                        <p>ตัวอย่าง: 100000011 คุณสามารถดูได้จากในอีเมลล์ของคุณ</p>
                    </div>
                </li>
    <!--             <li>
                    <label for="bank_from" class="required"><em>*</em>Bank From</label>
                    <div class="input-box">
                        <input name="bank_from" id="bank_from" title="Bank From" value="" class="required-entry input-text" type="text" />
                    </div>
                </li> -->
                <!-- <li>
                    <label for="account_holder" class="required"><em>*</em>Bank Account Holder</label>
                    <div class="input-box">
                        <input name="account_holder" id="account_holder" title="Bank Account Holder" value="" class="required-entry input-text" type="text" />
                    </div>
                </li> -->
                                <li class="select-list">
                    <label for="bank_to" class="required"><em>*</em>เลือกธนาคารที่ชำระเงิน</label>
                    <div class="input-box input-box-select">
                        <select name="bank_to" id="bank_to" title="เลือกธนาคารที่ชำระเงิน" class="required-entry input-box" style="display: none;">
                            <option value="">กรุณาเลือก</option><option>บริษัท 425ดีกรี จำกัด ธนาคารกสิกรไทย สาขาเดอะมอลล์ ท่าพระ เลขที่บัญชี  028-3-50777-7</option><option>บริษัท 425ดีกรี จำกัด ธนาคารไทยพาณิชย์ สาขาเดอะมอลล์ ท่าพระ เลขที่บัญชี 170-2-72420-7</option><option>บริษัท 425ดีกรี จำกัด ธนาคารกรุงเทพ สาขาเดอะมอลล์ ท่าพระ เลขที่บัญชี 245-0-74689-2</option><option>บริษัท 425ดีกรี จำกัด ธนาคารกรุงไทย สาขาเดอะมอลล์ ท่าพระ เลขที่บัญชี 878-0-35877-2</option><option>บริษัท 425ดีกรี จำกัด ธนาคารทหารไทย สาขาเดอะมอลล์ ท่าพระ เลขที่บัญชี 164-1-00750-3</option>                        </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: auto;" title="เลือกธนาคารที่ชำระเงิน" id="bank_to_chosen"><a class="chosen-single" tabindex="-1"><span>กรุณาเลือก</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
                    </div>
                </li>
                               
                <li>
                    <label for="transfer_date" class="required"><em>*</em>ระบุวันที่ชำระเงิน</label>
                    <div class="input-box">
                        <input autocomplete="off" width="20px" name="transfer_date" id="transfer_date" title="ระบุวันที่ชำระเงิน" value="" class="required-entry input-text" type="text">
                        <p>Date format: day/month/year</p>
                        
                       
                        
                       
    
    
    
    <link rel="stylesheet" type="text/css" href="https://www.425degree.com/skin/frontend/425degree/default/css/jquery.datetimepicker.css">
    <script type="text/javascript" src="https://www.425degree.com/js/jquery.datetimepicker.js"></script>
                       
                        <script type="text/javascript">
                        //<![CDATA[
                            
                            
                                //jQuery('#transfer_date').datetimepicker();
                                //jQuery('#transfer_date').datetimepicker({
                                    
									//timepicker:false,
									//formatDate:'d.m.Y'
                               // });
                            
							
							//jQuery.datetimepicker.setLocale('de');

							jQuery('#transfer_date').datetimepicker({
							// i18n:{
							 // de:{
							 //  months:['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember',  ],
							 //  dayOfWeek:["So.", "Mo", "Di", "Mi", "Do", "Fr", "Sa.", ]
							 // }
							// },
							 timepicker:false,
							 format:'d.m.Y'
							});
                            
                        //]]>
                        </script>
                        
                        
                        
                    </div>
                </li>
                
                <li>
                    <label for="transfer_time" class="required"><em>*</em>เวลา</label>
                    
                    
                    <div class="input-box">
                        <input name="transfer_time" id="transfer_time" title="เวลา" value="" class="required-entry input-text" type="text">
                        
                        <script type="text/javascript">
                       			 //jQuery('#time_transfered').timepicker();
								 
								// jQuery('#time_transfered').datetimepicker({
								//  datepicker:false,
								//  format:'H:i'
								//});
								
								

							


								
								
						</script>
                    </div>
                </li>
                
                <li>
                    <label for="amount_transfered" class="required"><em>*</em>จำนวนเงินที่โอน</label>
                    <div class="input-box">
                        <input name="amount_transfered" id="amount_transfered" title="Amount Transfered" value="" class="required-entry input-text" type="text">
                    </div>
                </li>
                                <li>
                                            <label for="image" class="required"><em>*</em>อัพโหลดสลิปโอนเงิน</label>
                        <div class="input-box">
                            <input type="file" name="image" id="image" class="required-entry">
                            <!--p>ขนาดสูงสุดไม่เกิน 1000KB</p-->
                        </div>
                                    </li>
                    <!--             <li class="wide">
                    <label for="comment">ข้อคิดเห็น</label>
                    <div class="input-box">
                        <textarea name="comment" id="comment" title="ข้อคิดเห็น" class="input-text" cols="5" rows="3"></textarea>
                    </div>
                </li> -->
                                    
                <p id="f1_upload_process" style="z-index:100; position:absolute; visibility:hidden;">Sending.. please wait <img src="https://www.425degree.com/skin/frontend/base/default/images/opc-ajax-loader.gif"></p>
                <p id="result"></p>
                <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                
            </ul>
        </div>
                
        <div class="buttons-set" id="submit_conf">
            <p class="required">* ฟิลด์ที่จำเป็น</p>
            <input type="text" name="hideit" id="hideit" value="" style="display:none !important;">
            <button type="submit" title="ยืนยัน" class="button"><span><span>ยืนยัน</span></span></button>
        </div>
    </form>
    
    </div>s
      </div>
    </div><!-- row -->
  </div><!-- container body -->
<?php include("process/footer.php") ?>