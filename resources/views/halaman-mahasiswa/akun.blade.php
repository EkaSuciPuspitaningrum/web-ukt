@extends('layouts.app')

@section('title', 'Akun Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">

@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Akun Mahasiswa</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg">
                <div class="card author-box card-primary">
                    <div class="card-body">
                        <div class="author-box-left">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-1.png') }}"
                                class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            <br>
                            <div class="author-box-name">
                                <a href="#">Hasan Basri</a>
                            </div>
                            <div class="author-box-job">Web Developer</div>
                        </div>
                        &nbsp;
                        <div class="author-box-details">
                            <div class="author-box-name card-header">
                                <h4>Edit Akun</h4>
                            </div>
                            <div class="author-box-description card-body">
                                <form method="POST">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label for="nama">NIM</label>
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
                                    <br><br>
                                    <div class="form-group text-center">
                                      <button type="submit" class="btn btn-primary btn-lg" style="width: 200px">
                                        Edit
                                      </button>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>    
        </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="../../js/table.js"></script>
    <script src="../../js/style.js"></script>
@endpush
