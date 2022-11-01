@extends('layouts.regis')

@section('title', 'Regis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
<div class="card card-primary">
    <div class="card-header"><h4>Registrasi</h4></div>

    <div class="card-body">
      <form method="POST">
        <div class="form-group">
            <label for="email">Nama Lengkap</label>
            <input id="email" type="email" class="form-control" name="email">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Email</label>
                <input type="text"
                    class="form-control"
                    id="nama"
                    placeholder="Nama Lengkap">
            </div>
            <div class="form-group col-md-6">
                <label for="nama">Password</label>
                <input type="text"
                    class="form-control"
                    id="nama"
                    placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
              <label for="nama">NIM</label>
              <input type="text"
                  class="form-control"
                  id="nama"
                  placeholder="Nama Lengkap">
          </div>
          <div class="form-group col-md-3">
              <label for="nama">Kelas</label>
              <input type="text"
                  class="form-control"
                  id="nama"
                  placeholder="Nama Lengkap">
          </div>
          <div class="form-group col-md-6">
            <label for="nama">Foto</label>
            <div class="custom-file">
                <div class="input-group mb-3">
                    <label style="color: white" class="input-group-text btn btn-primary"  for="customFile" >Upload</label>
                    <input type="file" class="choose form-control" id="customFile">
                </div>
            </div>
        </div>
      </div>
        <br><br>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary btn-lg" style="width: 200px">
            Daftar
          </button>
        </div>
      </form>

      <div class="float-right">
        <a href="{{url("/dashboard")}}"
            class="text-small">
            dashboard
        </a>
    </div>
    </div>
  </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset("/js/page/auth-register.js") }}"></script>
    <!-- Page Specific JS File -->
@endpush
