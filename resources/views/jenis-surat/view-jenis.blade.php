@extends("layouts.main")

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Jenis Surat</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="input-jenis" type="button" class="btn btn-gradient-primary btn-icon-text btn-sm">
                        <i class="mdi mdi mdi-plus btn-icon-prepend"></i>Tambah Surat</a>
                </ol>
            </nav>
        </div>
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Jenis Surat</h4>
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-1"> # </th>
                                <th> Kode Surat </th>
                                <th> Keterangan </th>
                               <!-- <th> Jumlah Surat </th> -->
                                <th class="col-md-1"> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $x)
                            <tr>
                                <td>{{ $x->id }}</td>
                                <td>{{ $x->kodeSurat }}</td>
                                <td>{{ $x->keterangan }}</td>
                              <!--td>{{ $x->jumlahSurat }}</td> -->
                                <td>
                                    <a type="button" href="/edit-jenis/{{ $x->id }}"
                                        class="btn-sm btn-inverse-dark btn-rounded m-lg-1" data-toggle="tooltip"
                                        data-placement="top" title="Edit">
                                        <i class="mdi mdi-border-color"></i>
                                    </a>
                                    <a href="/hapus-jenis/{{ $x->id }}" class="btn-sm btn-inverse-danger btn-rounded m-lg-1">
                                        <i class="mdi mdi-delete"></i>
                                    </a>                           
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

       <!--Digunakan untuk alert-->
    @include('sweetalert::alert')
@endsection
