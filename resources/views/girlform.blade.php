@extends('layouts.main')
@section('page_title', '')
@section('content')
<section class="hero is-light">
  <div class="hero-body">
    <div class="container has-text-centered">
    <h2 class="title">เพิ่มข้อมูลใหม่</h1>
    <h4 class="subtitle">โครงการ{{ $roundname }} ปีการศึกษา 2560</h4>
       <label class="label center">ข้อมูลส่วนตัว</label>
       <div class="box">
       @if ( $enable === 1)
       <button class="button is-primary is-medium modal-button" data-target="#photo-modal">
        <span>ถ่ายรูป</span>
        <span class="icon is-small">
          <i class="fa fa-camera"></i>
        </span>
       </button>
       <!--div class="notification">
         <h4>เลขประจำตัวสอบของน้องคือ {{ $regis }}</h4>
       </div-->

       <form action="{{ action('GirlController@savedata') }}" id="gForm" method="post">
         <!--input name="regisID" type="hidden" value="{{ $regis }}"-->
         <div class="columns">
           <div class="column">
             <label class="label">ชื่อ</label>
             <p class="control has-icon">
               <input class="input is-medium" type="text" placeholder="Name" name="txtFirstName" required>
               <i class="fa fa-list"></i>
             </p>
             <label class="label">ชื่อเล่น</label>
             <p class="control has-icon">
               <input class="input is-medium" type="text" placeholder="Nickname" name="txtNickName" required>
               <i class="fa fa-list"></i>
             </p>
             <label class="label">เบอร์โทรศัพท์</label>
             <p class="control has-icon">
               <input class="input is-medium" type="text" placeholder="Phone number" name="txtPhone">
               <i class="fa fa-phone"></i>
             </p>
             <label class="label">เบอร์โทรศัพท์ผู้ปกครอง</label>
             <p class="control has-icon">
               <input class="input is-medium" type="text" placeholder="Parent phone number" name="txtParentPhone">
               <i class="fa fa-phone"></i>
             </p>
             <label class="label">โรงเรียน</label>
             <p class="control has-icon">
               <input class="input is-medium" type="text" placeholder="School name" name="txtSchoolName" required>
               <i class="fa fa-graduation-cap"></i>
             </p>
             <label class="label">ขนาดเสื้อ</label>
             <p class="control">
               <span class="select is-fullwidth is-medium">
                 <select name="txtSize">
                   <option value="S">S</option>
                   <option value="M">M</option>
                   <option value="L">L</option>
                   <option value="XL">XL</option>
                   <option value="XXL">XXL</option>
                   <option value="TITAN">TITAN</option>
                 </select>
               </span>
             </p>

           </div>
           <div class="column">
             <label class="label">นามสกุล</label>
             <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Surname" name="txtLastName" required>
              <i class="fa fa-list"></i>
            </p>
            <label class="label">เพศ</label>
            <p class="control">
              <span class="select is-fullwidth is-medium">
                <select name="txtSex">
                  <option value="male">ชาย</option>
                  <option value="female">หญิง</option>
                </select>
              </span>
            </p>
            <label class="label">ไลน์ไอดี</label>
            <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Line ID" name="txtLine">
              <i class="fa fa-commenting"></i>
            </p>
            <label class="label">เฟสบุ๊ค</label>
            <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Facebook" name="txtFacebook">
              <i class="fa fa-facebook-official"></i>
            </p>
            <label class="label">อีเมล</label>
            <p class="control has-icon">
              <input class="input is-medium" type="email" placeholder="E-mail" name="txtEmail">
              <i class="fa fa-envelope"></i>
            </p>
            <label class="label">ศาสนา</label>
            <p class="control">
              <span class="select is-fullwidth is-medium">
                <select name="txtReligion">
                  <option value="Buddha">พุทธ</option>
                  <option value="Islam">อิสลาม</option>
                  <option value="Christian">คริสต์</option>
                  <option value="Hinduism">ฮินดู</option>
                </select>
              </span>
            </p>
            <!--label class="label">REGIS ID</label>
            <p class="control has-icon">

              <i class="fa fa-id-badge"></i>
            </p-->
           </div>
         </div>
         <input class="input is-medium" type="hidden" value="" name="imageURI" id="imgdata" >
         <input class="input is-medium" type="hidden" value="{{ $regis }}" name="regisID">

         <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
         <button class="button is-primary is-medium" type="button" onclick="fillComfirm()">
          <span>บันทึกข้อมูล</span>
          <span class="icon is-small">
            <i class="fa fa-floppy-o"></i>
          </span>
        </button>
        <button class="button is-danger is-medium" type="reset">
         <span>ล้างข้อมูล</span>
         <span class="icon">
           <i class="fa fa-trash"></i>
         </span>
       </button>
      </form>
      @else
      <div class="notification is-danger">
        <h5><span class="icon notification-icon"><i class="fa fa-times-circle"></i></span>ขออภัย ขณะนี้ระบบยังไม่เปิดให้ทำการลงทะเบียน</h5>
     </div>
     @endif

      <!-- Take photo modal -->
      <div class="modal" id="photo-modal">
        <div class="modal-background"></div>
          <div class="modal-content" id="modal">
            <!-- Any other Bulma elements you want -->
            <div class="box modal-box" align="center">
              บุย
             <div>
               <div id="my_camera" class="videoarea"></div>
               <!-- A button for taking snaps -->
               <form>
                <div id="pre_take_buttons">
                  <input class="button is-danger is-medium inputtxt" value ="ถ่ายรูป" onClick="preview_snapshot()">
                </div>
                <div id="post_take_buttons" style="display:none">
                  <input class="button is-danger is-medium inputtxt" type=button value="ถ่ายใหม่" onClick="cancel_preview()">
                  <input class="button is-primary is-medium inputtxt" type=button value="เรียบร้อย" onClick="save_photo()">
                </div>
              </form>
             </div>
            </div>
          </div>
          <button class="modal-close"></button>
      </div>
      <!-- Confirm modal -->
      <div class="modal" id="confirm-modal">
        <div class="modal-background"></div>
          <div class="modal-content" id="modal">
            <!-- Any other Bulma elements you want -->
            <div class="box modal-box" align="center">
              <label class="label center">กรุณาตรวจสอบความถูกต้องของข้อมูล</label>
              <div class="notification is-warning" id="nophoto_notification" style="">
                <h5><span class="icon notification-icon"><i class="fa fa-exclamation-circle"></i></span>ยังไม่ได้ถ่ายรูป</h5>
              </div>
              <img class="preview-img" src="" id="cImg">
              <table class="table">
                <tbody>
                  <tr>
                    <td>ชื่อ</td>
                    <td id="cFirstName"></td>
                  </tr>
                  <tr>
                    <td>นามสกุล</td>
                    <td id="cLastName"></td>
                  </tr>
                  <tr>
                    <td>ชื่อเล่น</td>
                    <td id="cNickName"></td>
                  </tr>
                  <tr>
                    <td>เพศ</td>
                    <td id="cSex"></td>
                  </tr>
                  <tr>
                    <td>เบอร์โทรศัพท์</td>
                    <td id="cPhone"></td>
                  </tr>
                  <tr>
                    <td>เบอร์โทรศัพท์ผู้ปกครอง</td>
                    <td id="cParentPhone"></td>
                  </tr>
                  <tr>
                    <td>โรงเรียน</td>
                    <td id="cSchoolName"></td>
                  </tr>
                  <tr>
                    <td>ไลน์ไอดี</td>
                    <td id="cLine"></td>
                  </tr>
                  <tr>
                    <td>เฟสบุ๊ค</td>
                    <td id="cFacebook"></td>
                  </tr>
                  <tr>
                    <td>อีเมล</td>
                    <td id="cEmail"></td>
                  </tr>
                  <tr>
                    <td>ศาสนา</td>
                    <td id="cReligion"></td>
                  </tr>
                  <tr>
                    <td>ขนาดเสื้อ</td>
                    <td id="cSize"></td>
                  </tr>
                </tbody>
              </table>

              <button class="button is-warning is-medium closebtn">
                <span class="icon is-small">
                  <i class="fa fa-chevron-left"></i>
                </span>
               <span>กลับไปแก้ไขข้อมูล</span>

             </button>

              <button class="button is-info is-medium" onclick="submitForm()" id="submitbtn" disabled>
               <span>บันทึกข้อมูล</span>
               <span class="icon is-small">
                 <i class="fa fa-floppy-o"></i>
               </span>
             </button>

           </div>

          </div>
          <button class="modal-close"></button>
      </div>
    </div>
  </div>
</div>
</section>
@stop

@section('javascript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.16/webcam.min.js"></script>
@stop
