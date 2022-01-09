@extends("layouts.main")

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Tambah User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                </ol>
            </nav>
        </div>

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah User</h4>
                    <p class="card-description"></p>

                    <form action="save-user" method="POST"  class="forms-sample" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputCity1">Nama Lengkap</label>
                            <input name="name" type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity2">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputCity2" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input name="password" type="text" class="form-control" id="exampleInputPassword4"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Tambah User</button>
                        <a href="/view-user" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
