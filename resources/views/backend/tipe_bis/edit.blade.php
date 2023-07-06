@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4">Tipe Bis</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <ol class="breadcrumb"> 
                <li class="breadcrumb-item active">Edit Data Tipe Bis</li> 
            </ol> 
            <a href="/tipebis" class="btn btn-warning">kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/tipebis/update/{{$tipeBisData->id}}" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Tipe Bis</label> 
                        <input type="text" class="form-control" name="tipe" value="{{$tipeBisData->tipe}}" required> 
					</div> 
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection