<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Poom Shop</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Main -->
  <link href="css/main.css" rel="stylesheet">

  <!-- font-awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<header>
  <nav class="navbar navbar-default top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shoping Mall</a>
      </div>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <select id="disabledSelect" class="form-control">
                <option>ทั้งหมด</option>
                <option>หมวดหมู่ที่ 1</option>
                <option>หมวดหมู่ที่ 2</option>
                <option>หมวดหมู่ที่ 3</option>
              </select>
            </span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </button>
            </span>
          </div>
        </div>
      </form>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ตระกร้าสินค้า</a></li>
          <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> สมัครสมาชิค</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slideshow.jpg" alt="...">
      </div>
      <div class="item">
        <img src="img/slideshow.jpg" alt="...">
      </div>
      <div class="item">
        <img src="img/slideshow.jpg" alt="...">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <nav class="navbar navbar-default main">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li <?php if($pagename == 'home') echo 'class="active"' ?>><a href="index.php">หน้าหลัก</a></li>
          <li <?php if($pagename == 'item-list') echo 'class="active"' ?>><a href="item-list.php">รายการสินค้า</a></li>
          <li <?php if($pagename == 'promotion') echo 'class="active"' ?>><a href="promotion.php">โปรโมชั่น</a></li>
          <li <?php if($pagename == 'payment') echo 'class="active"' ?>><a href="payment.php">แจ้งชำระเงิน</a></li>
          <li <?php if($pagename == 'howto') echo 'class="active"' ?>><a href="howto.php">วิธีการสั่งซื้อสินค้า</a></li>
          <li <?php if($pagename == 'board') echo 'class="active"' ?>><a href="board.php">เว็บบอร์ด</a></li>
          <li <?php if($pagename == 'about') echo 'class="active"' ?>><a href="about.php">เกี่ยวกับเรา</a></li>
          <li <?php if($pagename == 'contract-us') echo 'class="active"' ?>><a href="contract-us.php">ติดต่อเรา</a></li>
        </ul>
      </div>
    </div><!-- container -->
  </nav>
</header>