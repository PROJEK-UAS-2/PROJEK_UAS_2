@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class=" bx bx-bus bx-md"></i> Bis</h1> 
        <div class="d-flex justify-content-between mb-3"> 
        <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/bis">Bis</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Tambah Data Bis</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/bis" class="btn btn-warning"><i class='bx bx-arrow-back' ></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/bis/simpan-data" method="POST"> 
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Nama</label> 
                        <input type="text" class="form-control" name="nama" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Kode</label> 
                        <input type="text" class="form-control" name="kode" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Nomor Polisi</label> 
                        <input type="text" class="form-control" name="nomor_polisi" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Jumlah Unit</label> 
                        <input type="number" class="form-control" name="jumlah_unit" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Jurusan</label> 
                        <input type="text" class="form-control" name="jurusan" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Tipe Bis </label> 
                        <select name="tipe_bis_id" class="form-control">
                            <option value="">-- Tipe Bis --</option>
                            @foreach ($tipeBisData as $tipe)
                                <option value="{{ $tipe->id }}">{{ $tipe->tipe }}</option>
                            @endforeach
                        </select><br>
					</div><br>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button><br><br>
                        <button class="form-control btn btn-outline-danger" type="reset">Reset</button>
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection