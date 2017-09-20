@extends('layouts.main')
@section('page_title', '')
@section('content')
<section class="hero is-light">
  <div class="hero-body">
    <div class="container has-text-centered">
    <h2 class="title">เพิ่มข้อมูลใหม่</h1>
    <h4 class="subtitle">โครงการ{{ $roundname }} ปีการศึกษา 2560</h4>
      <div class="box">

       @if($error===0)
       <div class="notification is-success">
         <h5><span class="icon notification-icon"><i class="fa fa-check-circle"></i></span>บันทึกข้อมูลเรียบร้อย ขอให้โชคดีนะครับน้อง{{ $girlname }}</h5>
       </div>
       @else
       <div class="notification is-danger">
         <h5><span class="icon notification-icon"><i class="fa fa-times-circle"></i></span>พบข้อผิดพลาด กรุณาตรวจสอบข้อมูล</h5>
       </div>
       <button class="button is-info is-medium" onclick="history.back()">
         <span class="icon is-small">
           <i class="fa fa-chevron-left"></i>
         </span>
        <span>กลับไปแก้ไขข้อมูล</span>

      </button>
       @endif

    </div>
  </div>
</div>
</section>
@stop

@section('javascript')
@if($error===0)
<script type="text/javascript">
  setTimeout("location.href = '/';",3000);
</script>
@endif
@stop
