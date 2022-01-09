@extends("layouts.main")

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Tambah Surat Masuk</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Surat Masuk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Surat Masuk</li>
                </ol>
            </nav>
        </div>

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Surat Masuk</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="POST" action="/save-sm" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nomor Surat</label>
                            <input type="text" name="noSmasuk" class="form-control" id="exampleInputEmail3"
                                placeholder="Nomor Surat" value="{{ old('noSmasuk') }}">
                            @error('noSmasuk')
                                <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Tanggal Surat</label>
                            <input type="date" name="tglMasuk" class="form-control" id="exampleInputPassword4"
                                placeholder="Tanggal Surat" value="{{ old('tglMasuk') }}">
                            @error('tglMasuk')
                                <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Pengirim</label>
                            <input type="text" name="pengirim" class="form-control" id="exampleInputCity1"
                                placeholder="Pengirim" value="{{ old('pengirim') }}">
                            @error('pengirim')
                                <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Perihal</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="jenisSurat_id"
                                value="{{ old('jenisSurat_id') }}">
                                <option selected disabled>Select one</option>
                                @foreach ($data as $x)
                                    <option value="{{ $x->id }}">{{ $x->keterangan }}</option>
                                @endforeach
                            </select>
                            @error('jenisSurat_id')
                                <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="file" class="file-upload-default" value="{{ old('file') }}">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload File">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            @error('file')
                                <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Tambah Surat</button>
                        <a href="view-sm" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
