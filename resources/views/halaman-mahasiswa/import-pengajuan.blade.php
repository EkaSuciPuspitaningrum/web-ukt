@extends('layouts.app')

@section('title', 'Default Layout')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet"
    href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
    href="{{ asset('library/selectric/public/selectric.css') }}">

@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Import Berkas</h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Form Pengisian Berkas</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="section-title mt-0">Data Diri</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text"
                                class="form-control"
                                id="email"
                                placeholder="Email">
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
                        <div class="form-group col-md-3">
                            <label>Jurusan</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Program Studi</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Alamat</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nama">Kota</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email">Kode Pos</label>
                            <input type="text"
                                class="form-control"
                                id="email"
                                placeholder="Email">
                        </div>
                    </div>
                    <br>
                    <div class="section-title mt-0">Data Keluarga</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Lengkap Ayah</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nama">Pekerjaan Ayah</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email">Nomor Telepon Ayah</label>
                            <input type="text"
                                class="form-control"
                                id="email"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Lengkap Ibu</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nama">Pekerjaan Ibu</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email">Nomor Telepon Ibu</label>
                            <input type="text"
                                class="form-control"
                                id="email"
                                placeholder="Email">
                        </div>
                    </div>
                    <br>
                    <div class="section-title mt-0">Import Berkas</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">KTM (Scan - PDF)</label>
                            <div class="custom-file">
                                <div class="input-group mb-3">
                                    <label style="color: white" class="input-group-text btn btn-primary"  for="customFile" >Upload</label>
                                    <input type="file" class="choose form-control" id="customFile">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Kartu Keluarga (Scan - PDF)</label>
                            <div class="custom-file">
                                <div class="input-group mb-3">
                                    <label style="color: white" class="input-group-text btn btn-primary"  for="customFile" >Upload</label>
                                    <input type="file" class="choose form-control" id="customFile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Slip Gaji Orang Tua (Scan - PDF)</label>
                            <div class="custom-file">
                                <div class="input-group mb-3">
                                    <label style="color: white" class="input-group-text btn btn-primary"  for="customFile" >Upload</label>
                                    <input type="file" class="choose form-control" id="customFile">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Foto Rumah (Bagian Luar dan Dalam - File:PDF)</label>
                            <div class="custom-file">
                                <div class="input-group mb-3">
                                    <label style="color: white" class="input-group-text btn btn-primary"  for="customFile" >Upload</label>
                                    <input type="file" class="choose form-control" id="customFile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>

                </form>

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
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
    <script src="../../js/table.js"></script>
    <script src="../../js/style.js"></script>
@endpush
