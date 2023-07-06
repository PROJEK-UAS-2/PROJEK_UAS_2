@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4">Bis</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <ol class="breadcrumb"> 
                <li class="breadcrumb-item active">Edit Data Bis</li> 
            </ol> 
            <a href="/bis" class="btn btn-warning">kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/bis/update/{{$BisData->id}}" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Nama</label> 
                        <input type="text" class="form-control" name="bis" value="{{$bisData->nama}}" required> 
					</div> 
                    <div class="form-group"> 
                        <label for="">Kode</label> 
                        <input type="text" class="form-control" name="bis" value="{{$bisData->kode}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Nomor Polisi</label> 
                        <input type="text" class="form-control" name="bis" value="{{$bisData->nomor_polisi}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Jumlah Unit</label> 
                        <input type="text" class="form-control" name="bis" value="{{$bisData->jumlah_unit}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Jurusan</label> 
                        <input type="text" class="form-control" name="bis" value="{{$bisData->jurusan}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Tipe Bis ID</label> 
                        <input type="text" class="form-control" name="bis" value="{{$bisData->tipe_bis_id}}" required> 
					</div>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection 