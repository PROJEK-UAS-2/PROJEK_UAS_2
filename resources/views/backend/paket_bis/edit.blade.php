@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4">Paket Bis</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <ol class="breadcrumb"> 
                <li class="breadcrumb-item active">Edit Data Paket Bis</li> 
            </ol> 
            <a href="/paketbis" class="btn btn-warning">kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/paketbis/update/{{$paketBisData->id}}" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Bis ID</label> 
                        <input type="text" class="form-control" name="paket" value="{{$paketBisData->bis_id}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Harga Tiket</label> 
                        <input type="text" class="form-control" name="paket" value="{{$paketBisData->harga_tiket}}" required> 
					</div> 
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection