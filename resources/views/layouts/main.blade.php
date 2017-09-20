<html>
<head>
  <title>CE Registration 2017 - @yield('page_title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bulma.css">
  <link rel="stylesheet" type="text/css" href="css/hint.min.css">
  <link rel="stylesheet" type="text/css" href="css/dimmer.min.css">
  <link rel="stylesheet" type="text/css" href="css/loader.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <link href="https://fonts.googleapis.com/css?family=Athiti:400,600" rel="stylesheet">
</head>
<body>
  <!--Navigation bar section -->
  <nav class="navbar nav has-shadow">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item is-brand" href="#">
          <p>
            ซีอีดาด้าเบส เวอร์ชันสองมั้งอิ๊อิ๊
          </p>
          <!--img src="http://bulma.io/images/bulma-type.png" alt="Bulma logo"-->
        </a>
      </div>
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>
      <div class="nav-right nav-menu">
        <a class="nav-item is-tab is-active">เพิ่มข้อมูล</a>
        <a class="nav-item is-tab">จัดการรายชื่อ</a>
        <a class="nav-item is-tab">จัดการระบบ</a>
        <span class="nav-item">
          <!--div class="usrname">
            <! Blade Template > if user login. show this text >
            Welcome Sarunyu Chankong
          </div-->
          <a class="button is-primary" href="#">
             <span class="icon">
               <i class="fa fa-sign-in"></i>
             </span>
             <span>Login</span>
           </a>
         </span>
      </div>
    </div>
  </nav>
  <!--Body Section-->
  @yield('content')
  <!--Footer Section -->
  <footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>CE Database V.2</strong> by <a href="http://www.ce.kmitl.ac.th/">55D KMITL</a>. All Rights Reserved.

      </p>
    </div>
  </div>
</footer>
<!-- Load Javascript -->
  @yield('javascript')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/validator/6.2.0/validator.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/dimmer.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
