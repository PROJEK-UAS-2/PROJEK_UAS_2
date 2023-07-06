@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4">Supir</h1> 
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
                        <input type="text" class="form-control" name="supir" required> 
					</div> 
                    <div class="form-group"> 
                        <label for="">Kode Supir</label> 
                        <input type="text" class="form-control" name="supir" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Kontak 1</label> 
                        <input type="text" class="form-control" name="supir" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Kontak 2</label> 
                        <input type="text" class="form-control" name="supir" required> 
					</div>
                    <div class="form-group"> 
                        <label for="">Bis ID</label> 
                        <input type="text" class="form-control" name="supir" required> 
					</div>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button><br><br>
                        <button class="form-control btn btn-outline-danger" type="reset">Reset</button>
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection