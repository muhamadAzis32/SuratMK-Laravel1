@extends("layouts.main")

@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Data User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="/input-user" type="button" class="btn btn-gradient-primary btn-icon-text btn-sm">
                        <i class="mdi mdi mdi-plus btn-icon-prepend"></i>Tambah User</a>
                </ol>
            </nav>
        </div>

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data User</h4>
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nama </th>
                                <th> Email </th>
                                <th> Gambar </th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $x)
                                <tr>
                                    <td>{{ $x->id }}</td>
                                    <td>{{ $x->name }}</td>
                                    <td>{{ $x->email }}</td>
                                    <td><img src="{{ $x->image }}" width="100px" height="auto" alt="file"></td>
                                    <td>
                                        <a href="/edit-user/{{ $x->id }}" class="btn-sm btn-inverse-dark btn-rounded m-lg-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="/hapus-user/{{ $x->id }}" class="btn-sm btn-inverse-danger btn-rounded m-lg-1">
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

@endsection
