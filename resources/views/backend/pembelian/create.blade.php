@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bxs-food-menu bx-md"></i> Pembelian</h1> 
        <div class="d-flex justify-content-between mb-3"> 
        <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/pembelian">Pembelian</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Tambah Data Pembelian</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/pembelian" class="btn btn-warning"><i class='bx bx-arrow-back' ></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/pembelian/simpan-data" method="POST"> 
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Nama Penumpang</label> 
                        <input type="text" class="form-control" name="nama_penumpang" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Domisili</label> 
                        <input type="text" class="form-control" name="domisili" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Tanggal Pembelian</label> 
                        <input type="date" class="form-control" name="tanggal_pembelian" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Tanggal Keberangkatan</label> 
                        <input type="date" class="form-control" name="tanggal_keberangkatan" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Domisili Tujuan</label> 
                        <input type="text" class="form-control" name="domisili_tujuan" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Paket Bis ID</label> 
                        <select name="paket_bis_id" class="form-control">
                            <option value="">-- Paket Bis ID --</option>
                            @foreach ($paketBisData as $paket)
                                <option value="{{ $paket->id }}">{{ $paket->bis_id }}</option>
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