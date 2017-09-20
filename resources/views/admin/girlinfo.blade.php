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
              <div class="row" align="center">
                @if($girl->round === 1)
                <img class="info-img"src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->oldID.'.jpg') }}}">
                @else
                <img src="{{{ asset('/girlphotos/'.$girl->round.'/'.$girl->id.$girl->regisID.'.jpg') }}}">
                @endif
              </div>
              <div class="row">
                <table class="responsive-table">
                  <thead>
                    <tr>
                        <th data-field="id">ID</th>
                        <!--th data-field="name">Regis ID</th-->
                        <th data-field="price">Name</th>
                        <th data-field="price">Nickname</th>
                        <th data-field="price">Gender</th>
                        <th data-field="price">Phone</th>
                        <th data-field="price">Parent Phone</th>
                        <th data-field="price">Line</th>
                        <th data-field="price">Facebook</th>
                        <th data-field="price">Size</th>
                        <th data-field="price">Religion</th>

                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>{{ $girl->id }}</td>
                      <td>{{ $girl->txtFirstName }} {{ $girl->txtLastName }}</td>
                      <td>{{ $girl->txtNickName }}</td>
                      <td>{{ $girl->txtSex }}</td>
                      <td>{{ $girl->txtPhone }}</td>
                      <td>{{ $girl->txtParentPhone }}</td>
                      <td>{{ $girl->txtLine }}</td>
                      <td>{{ $girl->txtFacebook }}</td>
                      <td>{{ $girl->txtSize }}</td>
                      <td>{{ $girl->txtReligion }}</td>
                    </tr>

                  </tbody>
                </table>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">settings</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">mode_edit</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">delete</i></a></li>
    </ul>
  </div>
</main>
@stop
