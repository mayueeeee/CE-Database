@extends('layouts.main')
@section('page_title', 'Login')
@section('content')
<section class="hero is-light">
  <div class="hero-body">
    <div class="container has-text-centered">
    <h2 class="title">Login</h1>
      <div class="box">
        <form action="" id="gForm" method="post">
         <label class="label center">กรุณากรอกข้อมูลผู้ใช้งาน</label>
         <p class="control has-icon">
          <input class="input is-medium" type="text" placeholder="Username" required>
          <i class="fa fa-user"></i>
        </p>
        <p class="control has-icon">
         <input class="input is-medium" type="password" placeholder="Password" required>
         <i class="fa fa-lock"></i>
       </p>
       <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button class="button is-primary is-medium" type="submit">
         <span>เข้าสู่ระบบ</span>
         <span class="icon is-small">
           <i class="fa fa-chevron-right"></i>
         </span>
       </button>
     </form>

     <div class="notification is-danger">
       <h5>ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง</h5>
    </div>

        <!--a class="button is-danger is-medium" type="submit">
         <span>ล้างข้อมูล</span>
         <span class="icon">
           <i class="fa fa-trash"></i>
         </span>
       </a-->
    </div>
  </div>
</div>
</section>
@stop
