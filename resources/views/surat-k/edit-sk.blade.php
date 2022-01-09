@extends("layouts.main")

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Surat Keluar</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Surat Keluar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Surat Keluar</li>
                </ol>
            </nav>
        </div>

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Surat Keluar</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Id Surat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Id Surat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nomor Surat</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nomor Surat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Tanggal Surat</label>
                            <input type="date" class="form-control" id="exampleInputPassword4" placeholder="Tanggal Surat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Tujuan</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Tujuan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity2">Perihal</label>
                            <input type="text" class="form-control" id="exampleInputCity2" placeholder="Perihal">
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
                        <button type="submit" class="btn btn-gradient-primary mr-2">Edit Surat</button>
                        <a href="view-sk" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
