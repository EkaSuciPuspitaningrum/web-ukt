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
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Berkas Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-striped table"
                                id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Lihat Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress"
                                                data-height="4"
                                                data-toggle="tooltip"
                                                title="100%">
                                                <div class="progress-bar bg-success"
                                                    data-width="100%"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image"
                                                src="{{ asset('img/avatar/avatar-2.png') }}"
                                                class="rounded-circle"
                                                width="35"
                                                data-toggle="tooltip"
                                                title="Rizal Fakhri">
                                            <img alt="image"
                                                src="{{ asset('img/avatar/avatar-5.png') }}"
                                                class="rounded-circle"
                                                width="35"
                                                data-toggle="tooltip"
                                                title="Isnap Kiswandi">
                                            <img alt="image"
                                                src="{{ asset('img/avatar/avatar-4.png') }}"
                                                class="rounded-circle"
                                                width="35"
                                                data-toggle="tooltip"
                                                title="Yudi Nawawi">
                                            <img alt="image"
                                                src="{{ asset('img/avatar/avatar-1.png') }}"
                                                class="rounded-circle"
                                                width="35"
                                                data-toggle="tooltip"
                                                title="Khaerul Anwar">
                                        </td>
                                        <td>
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                        <td><button class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#exampleModal">Lihat</button>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>


<div class="modal fade"
    tabindex="-1"
    role="dialog"
    id="exampleModal">
    <div class="modal-dialog"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button"
                    class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
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
