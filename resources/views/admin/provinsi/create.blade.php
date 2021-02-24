@extends('layouts.master1')
@section('content1')
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                tambah data Provinsi

                            </div>
                            <div class="card-body">
                                <form action="{{route('provinsi.store')}}" method="POST">
                                  @csrf
                                  <div class="form-group">
                                      <label for="">kode provinsi</label>
                                      <input type="text" name="kode_provinsi" class="form-control" id="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="">nama provinsi</label>
                                      <input type="text" name="nama_provinsi" class="form-control" id="" required>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">simpan</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
          </div>
@endsection