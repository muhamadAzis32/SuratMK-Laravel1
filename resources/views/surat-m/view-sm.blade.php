@extends("layouts.main")

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Surat Masuk </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="input-sm" type="button" class="btn btn-gradient-primary btn-icon-text btn-sm">
                        <i class="mdi mdi mdi-plus btn-icon-prepend"></i>Tambah Surat</a>
                </ol>
            </nav>
        </div>
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="overflow-x:auto;">
                    <h4 class="card-title">Surat Masuk</h4>
                    <div class="table-responsive-md">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-md-1"> # </th>
                                    <th> Nomor Surat </th>
                                    <th class="col-md-1"> Tanggal Surat </th>
                                    <th> Pengirim </th>
                                    <th> Perihal</th>
                                    <th class="col-md-1"> File </th>
                                    <th class="col-md-1"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $x)
                                    <tr>
                                        <td>{{ $x->id }}</td>
                                        <td>{{ $x->noSmasuk }}</td>
                                        <td>{{ $x->tglMasuk }}</td>
                                        <td>{{ $x->pengirim }}</td>
                                        <td>{{ $x->jenisSurat['keterangan'] }}</td>
                                        <td>
                                            @empty($x->file)
                                                <span class="badge badge-danger">Tidak ada</span>
                                            @else
                                                <span class="badge badge-success">Ada</span>
                                            @endempty
                                        </td>
                                        <!-- <td> <img src="{{ $x->file }}" width="100px" height="auto" alt="file"></td> -->
                                        <td>

                                            <a type="button" href="{{ $x->file }}" download
                                                class="btn-sm btn-inverse-info btn-rounded m-lg-1" data-toggle="tooltip"
                                                data-placement="top" title="Download File">
                                                <i class="mdi mdi-format-vertical-align-bottom"></i>
                                            </a>
                                            <a type="button" href="/edit-sm/{{ $x->id }}"
                                                class="btn-sm btn-inverse-dark btn-rounded m-lg-1" data-toggle="tooltip"
                                                data-placement="top" title="Edit">
                                                <i class="mdi mdi-border-color"></i>
                                            </a>


                                            <a type="button" data-toggle="modal" data-target=".bd-example-modal-sm"
                                                class="btn-sm btn-inverse-danger btn-rounded m-lg-1" data-toggle="tooltip"
                                                data-placement="top" title="Delete">
                                                <i class="mdi mdi-delete"></i>
                                            </a>

                                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete data</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Jika anda yakin klik Delete!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a type="button" href="/hapus-sm/{{ $x->id }}"
                                                                class="btn-sm btn-primary text-decoration-none">Delete</a>
                                                            <a type="button"
                                                                class="btn-sm btn-secondary text-decoration-none"
                                                                data-dismiss="modal">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Digunakan untuk alert-->
    @include('sweetalert::alert')

@endsection
