@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bx-purchase-tag-alt bx-md"></i> Paket Bis</h1> 
        <div class="d-flex justify-content-between mb-3"> 
        <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/paketbis">Paket Bis</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Edit Data Paket Bis</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb --> 
        <a href="/paketbis" class="btn btn-warning">kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/paketbis/update/{{$paketBisData->id}}" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Bis ID </label> 
                        <select name="bis_id" class="form-control">
                            <option value="">-- Bis ID --</option>
                            @foreach ($bisData as $bis)
                                <option value="{{ $bis->id }}">{{ $bis->nama }}</option>
                            @endforeach
                        </select><br>
					</div><br>
                    <div class="form-group"> 
                        <label for="">Harga Tiket</label> 
                        <input type="text" class="form-control" name="harga_tiket" value="{{$paketBisData->harga_tiket}}" required> 
					</div><br>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection