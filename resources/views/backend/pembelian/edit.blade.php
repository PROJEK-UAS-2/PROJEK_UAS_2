@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4">Pembelian</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <ol class="breadcrumb"> 
                <li class="breadcrumb-item active">Edit Data Pembelian</li> 
            </ol> 
            <a href="/pembelian" class="btn btn-warning">kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/pembelian/update/{{$pembelianData->id}}" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Nama Penumpang</label> 
                        <input type="text" class="form-control" name="pembelian" value="{{$pembelianData->nama_penumpang}}" required> 
					</div> 
                    <div class="form-group"> 
                        <label for="">Domisili</label> 
                        <input type="text" class="form-control" name="pembelian" value="{{$pembelianData->domisili}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Tanggal Pembelian</label> 
                        <input type="date" class="form-control" name="pembelian" value="{{$pembelianData->tanggal_pembelian}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Tanggal Keberangkatan</label> 
                        <input type="date" class="form-control" name="pembelian" value="{{$pembelianData->tanggal_keberangkatan}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Domisili Tujuan</label> 
                        <input type="text" class="form-control" name="pembelian" value="{{$pembelianData->domisili_tujuan}}" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Paket Bis ID</label> 
                        <input type="text" class="form-control" name="pembelian" value="{{$pembelianData->paket_bis_id}}" required> 
					</div>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection