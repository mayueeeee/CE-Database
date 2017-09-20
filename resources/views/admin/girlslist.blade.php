@extends('layouts.admin')
@section('page_title', 'น้องทั้งหมด')

@section('content')
<main>

  <div class="body">
    <div class="container">
      <div class="row">
        <h4 class="section-head page-title">น้องทั้งหมด</h4>
        <div class="section">
          <div class="row">
            <div class="col s12">
             <ul class="tabs">
               <li class="tab col s3"><a class="active" href="#round1">ช้างเผือก</a></li>
               <li class="tab col s2"><a href="#round2">โอลิมปิก</a></li>
               <li class="tab col s2"><a href="#round3">รับตรง</a></li>
               <li class="tab col s2"><a href="#round4">ต่อเนื่อง</a></li>
               <li class="tab col s3"><a href="#round5">Admission</a></li>
             </ul>
           </div>
           <div id="round1">
            @foreach($girls as $girl)
              @if($girl->round ===1)
              <div class="col s12 m3">
                <a href="{{ url('girls/'. $girl->id) }}">
                  <div class="card hoverable">
                   <div class="card-image">
                     <img src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->oldID.'.jpg') }}}">
                     <span class="card-title">{{ $girl->txtFirstName }} {{ $girl->txtLastName }}</span>
                   </div>
                   <div class="card-content">
                     <div class="chip right red accent-1 white-text">{{ get_status($girl->isPass,$girl->isConfirm) }}</div>
                     <p class="card-text black-text">น้อง{{ $girl->txtNickName }}</p>
                   </div>
                 </div>
               </a>
              </div>
              @endif
            @endforeach
            </div>
            <div id="round2">
             @foreach($girls as $girl)
               @if($girl->round ===2)
               <div class="col s12 m3">
                 <a href="{{ url('girls/'. $girl->id) }}">
                   <div class="card hoverable">
                    <div class="card-image">
                      <img src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->id.$girl->regisID.'.jpg') }}}">
                      <span class="card-title">{{ $girl->txtFirstName }} {{ $girl->txtLastName }}</span>
                    </div>
                    <div class="card-content">
                      <div class="chip right red accent-1 white-text">{{ get_status($girl->isPass,$girl->isConfirm) }}</div>
                      <p class="card-text black-text">น้อง{{ $girl->txtNickName }}</p>
                    </div>
                  </div>
                </a>
               </div>
               @endif
             @endforeach
             </div>
             <div id="round3">
              @foreach($girls as $girl)
                @if($girl->round ===3)
                <div class="col s12 m3">
                  <a href="{{ url('girls/'. $girl->id) }}">
                    <div class="card hoverable">
                     <div class="card-image">
                       <img src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->id.$girl->regisID.'.jpg') }}}">
                       <span class="card-title">{{ $girl->txtFirstName }} {{ $girl->txtLastName }}</span>
                     </div>
                     <div class="card-content">
                       <div class="chip right red accent-1 white-text">{{ get_status($girl->isPass,$girl->isConfirm) }}</div>
                       <p class="card-text black-text">น้อง{{ $girl->txtNickName }}</p>
                     </div>
                   </div>
                 </a>
                </div>
                @endif
              @endforeach
              </div>
              <div id="round4">
               @foreach($girls as $girl)
                 @if($girl->round ===4)
                 <div class="col s12 m3">
                   <a href="{{ url('girls/'. $girl->id) }}">
                     <div class="card hoverable">
                      <div class="card-image">
                        <img src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->id.$girl->regisID.'.jpg') }}}">
                        <span class="card-title">{{ $girl->txtFirstName }} {{ $girl->txtLastName }}</span>
                      </div>
                      <div class="card-content">
                        <div class="chip right red accent-1 white-text">{{ get_status($girl->isPass,$girl->isConfirm) }}</div>
                        <p class="card-text black-text">น้อง{{ $girl->txtNickName }}</p>
                      </div>
                    </div>
                  </a>
                 </div>
                 @endif
               @endforeach
               </div>
               <div id="round5">
               @foreach($girls as $girl)
                 @if($girl->round ===5)
                 <div class="col s12 m3">
                   <a href="{{ url('girls/'. $girl->id) }}">
                     <div class="card hoverable">
                      <div class="card-image">
                        <img src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->id.$girl->regisID.'.jpg') }}}">
                        <span class="card-title">{{ $girl->txtFirstName }} {{ $girl->txtLastName }}</span>
                      </div>
                      <div class="card-content">
                        <div class="chip right red accent-1 white-text">{{ get_status($girl->isPass,$girl->isConfirm) }}</div>
                        <p class="card-text black-text">น้อง{{ $girl->txtNickName }}</p>
                      </div>
                    </div>
                  </a>
                 </div>
                 @endif
               @endforeach
               </div>




         </div>


        </div>
      </div>
    </div>
  </div>
</main>
@stop
