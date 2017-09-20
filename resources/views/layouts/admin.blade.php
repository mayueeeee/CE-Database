<html>
<head>
  <title>CE Database Management - @yield('page_title')</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti:400,600" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="{{{ asset('/css/materialize.css') }}}"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{{ asset('/css/admin.css') }}}"  media="screen,projection"/>
</head>
<body>
  <!--Navigation bar section -->
  <header>
    <div class="navbar-fixed">
      <nav>
        <div class="container">
          <div class="nav-wrapper navbar">
            <ul class="left hide-on-med-and-down">
               <li><a href="#" data-activates="slide-out" class="left-menu-btn"><i class="material-icons">menu</i></a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo">CE Database Management</a>
            <ul class="right hide-on-med-and-down nav-menu">
              <li><a href="badges.html">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <ul id="slide-out" class="side-nav">
     <li><div class="userView">
       <div class="background">
         <img src="{{{ asset('/images/bg.jpg') }}}">
       </div>
       <img class="circle" src="{{{ asset('/images/you.jpg') }}}">
       <a href="#!name"><span class="white-text name">Sarunyu Chankong</span></a>
       <a href="#!email"><span class="white-text email">sarunyu.you@gmail.com</span></a>
     </div></li>
     <li><a class="waves-effect" href="{{ action('GirlController@postHome') }}"><i class="material-icons">home</i>Home</a></li>
     <li><a class="waves-effect" href="{{ action('AdminController@dashboard') }}"><i class="material-icons">dashboard</i>Dashboard</a></li>
     <li><a class="subheader">Data management</a></li>
     <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header waves-effect">จัดการข้อมูลน้อง<i class="material-icons">account_circle</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="{{ action('AdminController@getAllGirls') }}">ดูข้อมูลทั้งหมด</a></li>
              <li><a href="#!">ดูข้อมูลแยกตามรอบ</a></li>
              <li><a href="#!">บันทึกผ่านสัมภาษณ์</a></li>
              <li><a href="#!">บันทึกยืนยันสิทธิ์</a></li>
            </ul>
          </div>
        </li>
      </ul>
     </li>

     <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header waves-effect">ส่งออกข้อมูล<i class="material-icons">cloud_upload</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">Chart</a></li>
              <li><a href="#!">Table</a></li>
              <li><a href="#!">CSV</a></li>
            </ul>
          </div>
        </li>
      </ul>
     </li>
     <li><div class="divider"></div></li>
     <li><a class="subheader">System Management</a></li>
     <li><a href="{{ action('AdminController@sys_setting') }}" class="waves-effect"><i class="material-icons">settings</i>จัดการระบบ</a></li>
     <li class=""><a href="{{ action('AdminController@sys_setting') }}" class="waves-effect"><i class="material-icons">lock_outline</i>Logout</a></li>
   </ul>
  </header>

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
  <script type="text/javascript" src="{{{ asset('/js/materialize.min.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('/js/admin.js') }}}"></script>
</body>
</html>
