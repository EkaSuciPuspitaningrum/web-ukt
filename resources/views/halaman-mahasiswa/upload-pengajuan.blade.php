@extends('layouts.app')

@section('title', 'Upload Berkas')

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
            <h1>Upload Berkas</h1>
        </div>

        @if (session('berhasil'))
            <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
                <button class="close"
                    data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('berhasil') }}
            </div>
            </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <h4>Form Pengisian Berkas</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('/berkas') }}"  enctype="multipart/form-data">
                @csrf
                    <div class="section-title mt-0">Data Diri</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                placeholder="Nama Lengkap" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nim_berkas">NIM</label>
                            <input type="text"
                                class="form-control"
                                id="nim_berkas"
                                name="nim_berkas"
                                placeholder="NIM" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="kelas">Kelas</label>
                            <input type="text"
                                class="form-control"
                                id="kelas"
                                name="kelas"
                                placeholder="Kelas" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                @foreach ($jurusan as $jurusans)
                                    <option value="{{ $jurusans->id }}">{{ $jurusans->jurusan_name }}</option>
                                @endforeach
                            </select required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="prodi">Program Studi</label>
                            <select class="form-control" id="prodi" name="prodi">
                                @foreach ($prodi as $prodis)
                                    <option value="{{ $prodis->id }}">{{ $prodis->prodi_name }}</option>
                                @endforeach
                            </select required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="alamat">Alamat</label>
                            <input type="text"
                                class="form-control"
                                id="alamat"
                                name="alamat"
                                placeholder="Alamat" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="kota">Kota</label>
                            <input type="text"
                                class="form-control"
                                id="kota"
                                name="kota"
                                placeholder="Kota" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="kodepos">Kode Pos</label>
                            <input type="text"
                                class="form-control"
                                id="kodepos"
                                name="kodepos"
                                placeholder="Kode Pos" required>
                        </div>
                    </div>
                    <br>
                    <div class="section-title mt-0">Data Keluarga</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ayah">Nama Lengkap Ayah</label>
                            <input type="text"
                                class="form-control"
                                id="ayah"
                                name="ayah"
                                placeholder="Nama Lengkap Ayah" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="kerja_ayah">Pekerjaan Ayah</label>
                            <input type="text"
                                class="form-control"
                                id="kerja_ayah"
                                name="kerja_ayah"
                                placeholder="Pekerjaan Ayah" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telp_ayah">Nomor Telepon Ayah</label>
                            <input type="text"
                                class="form-control"
                                id="telp_ayah"
                                name="telp_ayah"
                                placeholder="Nomor Telepon Ayah" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ibu">Nama Lengkap Ibu</label>
                            <input type="text"
                                class="form-control"
                                id="ibu"
                                name="ibu"
                                placeholder="Nama Lengkap Ibu" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="kerja_ibu">Pekerjaan Ibu</label>
                            <input type="text"
                                class="form-control"
                                id="kerja_ibu"
                                name="kerja_ibu"
                                placeholder="Pekerjaan Ibu" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telp_ibu">Nomor Telepon Ibu</label>
                            <input type="text"
                                class="form-control"
                                id="telp_ibu"
                                name="telp_ibu"
                                placeholder="Nomor Telepon Ibu" required>
                        </div>
                    </div>
                    <br>
                    <div class="section-title mt-0">Upload Berkas</div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Scan Berkas (PDF _ KTM, KK, KTP, Slip Gaji Orangtua)</label>
                            <div class="custom-file">
                                <div class="input-group mb-3">
                                    <label style="color: white" class="input-group-text btn btn-primary"  for="berkas" >Upload</label>
                                    <input type="file" class="choose form-control" id="berkas" name="berkas" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Foto Rumah (bagian luar dan dalam)</label>
                            <div class="custom-file">
                                <div class="input-group mb-3">
                                    <label style="color: white" class="input-group-text btn btn-primary"  for="foto" >Upload</label>
                                    <input type="file" class="choose form-control" id="foto" name="foto" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
