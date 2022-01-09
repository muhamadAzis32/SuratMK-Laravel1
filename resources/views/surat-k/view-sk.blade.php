@extends("layouts.main")

@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Surat Keluar </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="input-sk" type="button" class="btn btn-gradient-primary btn-icon-text btn-sm">
                        <i class="mdi mdi mdi-plus btn-icon-prepend"></i>Tambah Surat</a>
                </ol>
            </nav>
        </div>

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Surat Keluar</h4>

                    </p>
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nomor Surat </th>
                                <th> Tanggal Surat </th>
                                <th> Tujuan </th>
                                <th> Perihal</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>001/XAAC/29/3AS8/KL/2020</td>
                                <td>2020-07-16</td>
                                <td>Mandra Club 290 </td>
                                <td>Surat Undangan</td>
                                <td>
                                    <a href="edit-sk" class="btn-sm btn-inverse-dark btn-rounded m-lg-1">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a class="btn-sm btn-inverse-danger btn-rounded m-lg-1">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>002/XAAC/29/3AS8/KL/2020</td>
                                <td>2020-07-16</td>
                                <td>Mandra Club 290 </td>
                                <td>Surat Undangan</td>
                                <td>
                                    <a class="btn-sm btn-inverse-dark btn-rounded m-lg-1">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a class="btn-sm btn-inverse-danger btn-rounded m-lg-1">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
