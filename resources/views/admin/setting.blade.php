@extends('layouts.admin')
@section('page_title', 'ตั้งค่าระบบ')
@section('breadcrumb')
<a href="#!" class="breadcrumb">System Setting</a>
@stop
@section('content')
<main>

  <div class="body">
    <div class="container">
      <div class="row">
        <h4 class="section-head page-title">System Setting</h4>
        <div class="section">
          <div class="col s12 m12">
            <div class="card-panel">
              <div class="row">
                <form class="col s12" action="setting" method="post">
                  <div class="input-field col s12">
                   <select name="selectRound">
                     <option value="" disabled selected>{{ $roundname }}</option>
                     <option value="1">ช้างเผือก</option>
                     <option value="2">โอลิมปิก</option>
                     <option value="3">รับตรง</option>
                     <option value="4">ต่อเนื่อง</option>
                     <option value="5">Admission</option>
                   </select>
                   <label>รอบที่เปิดให้ทำการลงทะเบียน</label>
                 </div>
                 <p class="form-checkbox">
                   <input type="checkbox" id="test5" name="checkEnable" {{ $input_check }}/>
                   <label for="test5">เปิดให้กรอกข้อมูล</label>
                 </p>
                 <br>
                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                 <button class="btn waves-effect waves-light red accent-1" type="submit" name="action">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@stop
