@extends("layouts.main")

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit User</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                </ol>
            </nav>
        </div>

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit User</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Id User</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Id User">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword4"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity2">Email</label>
                            <input type="email" class="form-control" id="exampleInputCity2" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Edit User</button>
                        <a href="view-user" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
