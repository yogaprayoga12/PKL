@extends('layouts.master1')

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Kelurahan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label>Nama Kelurahan</label>
                            <input type="text" name="nama_kelurahan" class="form-control" value="{{ $kelurahan->nama_kel }}" readonly>
                            <label>Kode Kelurahan</label>
                            <input type="number" name="kode_kelurahan" class="form-control" value="{{ $kelurahan->kode_kel }}" readonly>
                            <label>Nama Kecamatan</label>
                            <input type="text" name='kecamatan_id' class="form-control" value="{{$kelurahan->kecamatan->nama_kec}}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url()->previous() }}" class="btn btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
