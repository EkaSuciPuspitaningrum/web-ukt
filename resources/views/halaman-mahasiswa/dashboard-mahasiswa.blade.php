@extends('layouts.app')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">

@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        @if (session('berhasil'))
        <div class="alert alert-primary alert-dismissible show fade">
        <div class="alert-body">
            <button class="close"
                data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ session('status') }}
        </div>
        </div>
    @endif
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Berkas Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-bordered table display nowrap" id="table" style="width: 110%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>tanggal Pengajuan</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nim</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Prodi</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Kode Pos</th>
                                        <th>Nama Ayah</th>
                                        <th>Kerja Ayah</th>
                                        <th>Telp Ayah</th>
                                        <th>Ibu</th>
                                        <th>Kerja Ibu</th>
                                        <th>Telp Ibu</th>
                                        <th>Berkas</th>
                                        <th>Foto</th>
                                        <th>Detail</th>
                                      </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $p => $data) 
                                    <tr>
                                        <td>{{ $p + $posts->firstItem()}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->nim_berkas}}</td>
                                        <td>{{$data->kelas}}</td>
                                        <td>{{$data->jurusan}}</td>
                                        <td>{{$data->prodi}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->kota}}</td>
                                        <td>{{$data->kodepos}}</td>
                                        <td>{{$data->ayah}}</td>
                                        <td>{{$data->kerja_ayah}}</td>
                                        <td>{{$data->telp_ayah}}</td>
                                        <td>{{$data->ibu}}</td>
                                        <td>{{$data->kerja_ibu}}</td>
                                        <td>{{$data->telp_ibu}}</td>
                                        <td>{{$data->berkas}}</td>
                                        <td>{{$data->foto}}</td>
                                        <td>
                                            <a href="/berkas/edit/{{ $data->id }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $posts->links("pagination::bootstrap-4") }}
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
