<?php
$catalog_menu = '';
if($pagename == 'item-list') {
  $catalog_menu = 'ทั้งหมด';
}
if(isset($_GET['catalog'])) {
  $catalog_menu = $_GET['catalog'];
}
?>

<div class="panel panel-default promotion">
  <div class="panel-heading">หมวดหมู่สินค้า</div>
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li <?php if($catalog_menu == 'ทั้งหมด') echo 'class="active"' ?>><a href="item-list.php?catalog=ทั้งหมด">ทั้งหมด</a></li>
      <li <?php if($catalog_menu == 'หมวดหมู่ที่ 1') echo 'class="active"' ?>><a href="item-list.php?catalog=หมวดหมู่ที่ 1">หมวดหมู่ที่ 1</a></li>
      <li <?php if($catalog_menu == 'หมวดหมู่ที่ 2') echo 'class="active"' ?>><a href="item-list.php?catalog=หมวดหมู่ที่ 2">หมวดหมู่ที่ 2</a></li>
      <li <?php if($catalog_menu == 'หมวดหมู่ที่ 3') echo 'class="active"' ?>><a href="item-list.php?catalog=หมวดหมู่ที่ 3">หมวดหมู่ที่ 3</a></li>
    </ul>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">สิ้นค้าขายดี</div>
  <div class="panel-body">
    <div class="panel panel-default item">
      <div class="panel-body">
        <img src="img/item.jpg" alt="">
      </div>
      <div class="panel-footer">Panel footer</div>
    </div>
    <div class="panel panel-default item">
      <div class="panel-body">
        <img src="img/item.jpg" alt="">
      </div>
      <div class="panel-footer">Panel footer</div>
    </div>
  </div>
</div>
<div class="panel panel-default promotion">
  <div class="panel-heading">โปรโมชั่น</div>
  <div class="panel-body">
    <img src="img/promotion1.jpg" alt="">
    <img src="img/promotion2.jpg" alt="">
    <img src="img/promotion2.jpg" alt="">
  </div>
</div>