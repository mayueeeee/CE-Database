@extends('layouts.admin')
@section('page_title', 'Dashboard')
@section('content')
<main>
  <div class="body">
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <h4 class="section-head">Summary</h4>
          <div class="section">
            <div class="row">
             <div class="col s12 m3">
               <div class="card-panel">
                 <span class="subtitle">น้องทั้งหมด<br /></span>
                 <span class="title">{{ $all }}</span>
               </div>
             </div>
             <div class="col s12 m3">
               <div class="card-panel">
                 <span class="subtitle">ผ่านสัมภาษณ์<br /></span>
                 <span class="title">{{ $pass }}</span>
               </div>
             </div>
             <div class="col s12 m3">
               <div class="card-panel">
                 <span class="subtitle">ยืนยันสิทธิ์<br /></span>
                 <span class="title">{{ $confirm }}</span>
               </div>
             </div>
             <div class="col s12 m3">
               <div class="card-panel">
                 <span class="subtitle">สละสิทธิ์<br /></span>
                 <span class="title">{{ $bye }}</span>
               </div>
             </div>
           </div>

          </div>



         </div>
        </div>

      </div>
    </div>
  </div>
</main>
@stop
