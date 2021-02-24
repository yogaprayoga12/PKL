@extends('layouts.master1')
@section('content1')
<div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Data Provinsi
                      <a href="{{route('provinsi.create')}}" class="btn btn-primary btn-small float-right">create</a>
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
                       <th>NO</th>
                       <th>KODE PROVINSI</th>
                       <th>NAMA PROVINSI</th>
                       <th>OPTION</th>
                 </tr>
                  @php $no = 1; @endphp
                  @foreach($provinsi as $data)
                  <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->kode_provinsi}}</td>
                        <td>{{$data->nama_provinsi}}</td>
                        <td>
                        <form action="{{route('provinsi.destroy',$data->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('provinsi.edit',$data->id)}}" class="btn btn-succes btn-small">edit</a>
                        <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-warning btn-small">show</a>
                        <button type="submit" class="btn btn-danger btn-small">delete</button>
           
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