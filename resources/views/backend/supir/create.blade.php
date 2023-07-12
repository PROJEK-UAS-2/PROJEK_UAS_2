@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bx-user bx-md"></i> Supir</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <!-- Breadcrum -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="/index">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/supir">Supir</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Tambah Data Supir</a>
                    </li>
                </ol>
            </nav>
            <!-- /Breadcrumb --> 
            <a href="/supir" class="btn btn-warning"><i class="bx bx-arrow-back"></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/supir/simpan-data" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Nama Supir</label> 
                        <input type="text" class="form-control" name="nama_supir" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Kode Supir</label> 
                        <input type="text" class="form-control" name="kode_supir" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="phone">Kontak 1</label> 
                        <input type="tel" class="form-control" name="kontak_1" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="format : 1234-5678-9123" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="phone">Kontak 2</label> 
                        <input type="tel" class="form-control" name="kontak_2" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="format : 1234-5678-9123" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Bis ID</label> 
                        <select name="bis_id" class="form-control">
                            <option value="">-- Bis ID --</option>
                            @foreach ($bisData as $bis)
                                <option value="{{ $bis->id }}">{{ $bis->nama }}</option>
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