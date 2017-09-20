@extends('layouts.main')
@section('page_title', '')
@section('content')
<section class="hero is-light">
  <div class="hero-body">
    <div class="container has-text-centered">
    <h2 class="title">เพิ่มข้อมูลใหม่</h1>
    <h4 class="subtitle">โครงการ{{ $roundname }} ปีการศึกษา 2560</h4>
      <div class="box">
      @if ( $enable === 1)
       <form action="" id="id" method="post">
         <label class="label center">กรุณากรอกเลขประจำตัวสอบ</label>
         <p class="control has-icon">
          <input class="input is-medium" type="text" name="regisID" placeholder="Regis ID" required>
          <i class="fa fa-list"></i>
        </p>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button class="button is-primary is-medium" type="submit">
         <span>ถัดไป</span>
         <span class="icon is-small">
           <i class="fa fa-chevron-right"></i>
         </span>
       </button>
     </form>
     @else     
     <div class="notification is-danger">
       <h5><span class="icon notification-icon"><i class="fa fa-times-circle"></i></span>ขออภัย ขณะนี้ระบบยังไม่เปิดให้ทำการลงทะเบียน</h5>
    </div>
    @endif
    </div>
  </div>
</div>
</section>
@stop
