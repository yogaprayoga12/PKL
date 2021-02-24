@extends('layouts.master1')
@section('content1')
<div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Data kota
                      <a href="{{route('kota.create')}}" class="btn btn-primary btn-small float-right">create</a>
                      @if(Session::has('sukses'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                                    {{ Session::get('sukses') }}
                                </div>
                                @endif

                                @if(Session::has('gagal'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                    {{ Session::get('gagal') }}
                                </div>
                                @endif
                    </div>  
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <tr>
                            <th>No</th>
                            <th>Kode Kota</th>
                            <th>Nama Kota</th>
                            <th>Provinsi</th>
                          
                                <th style='text-align:center'>Action</th>
                          
                        </tr>
                  @php $no = 1; @endphp
                  @foreach ($kota as $data)
                  <tr>
                        <td>{{$no++}}</td>
                       <TD>{{$data->kode_kota}}</td>
                       <td>{{$data->nama_kota}}</td>
                       <td>{{$data->provinsi->nama_provinsi}}</td>
                        <td>
                        <form action="{{route('kota.destroy',$data->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                                     
                        <a href="{{route('kota.edit',$data->id)}}" class="btn btn-succes btn-small ">edit</a>
                        <a href="{{route('kota.show',$data->id)}}" class="btn btn-warning btn-small float-center">show</a>
                        <button type="submit" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini? Data Yang Berada Di Tabel Lain Dengan Nama Yang Sama Akan Terhapus!');"  class="btn btn-danger btn-small float-center">delete</button>
                        </form>                    
                        </td>                 
                  </tr>
                  @endforeach
 </table>
 </div>
 </div>
</div>
</div>
</div>
</div>
  @endsection