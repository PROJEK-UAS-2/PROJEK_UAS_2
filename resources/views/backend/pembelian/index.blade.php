@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pembelian</h1>
        <div class="d-flex justify-content-between mb-3">
            <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Pembelian</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/pembelian/create" class="btn btn-primary">Tambah Data <i class='bx bx-plus-circle' ></i></a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Penumpang</th>
                                <th>Domisili</th>
                                <th>Tanggal Pembelian</th>
                                <th>Tanggal Keberangkatan</th>
                                <th>Domisili Tujuan</th>
                                <th>Paket Bis ID</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pembelianData as $pembelian)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$nama_penumpang->nama_penumpang}}</td>
                                <td>{{$domisili->domisili}}</td>
                                <td>{{$tanggal_pembelian->tanggal_pembelian}}</td>
                                <td>{{$tanggal_keberangkatan->tanggal_keberangkatan}}</td>
                                <td>{{$domisili_tujuan->domisili_tujuan}}</td>
                                <td>{{$paket_bis_id->paket_bis_id}}</td>
                                <td><span class="badge bg-label-success me-1">Active</span></td>
                                <td>
                                    <a href="/pembelian/edit/{{ $pembelian->id }}">
                                    <button type="button" class="btn rounded-pill btn-icon btn-outline-warning">
                                        <span class="tf-icons bx bxs-pencil"></span>
                                    </button>
                                    </a>
                                    <button type="button" class="btn rounded-pill btn-icon btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalToggle">
                                        <span class="tf-icons bx bxs-trash"></span>
                                    </button>
                                    <!-- Modal 1-->
                                    <div class="modal fade" id="modalToggle">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="alert alert-danger" role="alert">This is a danger alert -- check it out ! <i class="bx bxs-error-alt"></i></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">Are you sure, you want to delete type {{$nama_penumpang->nama_penumpang}} ?</div>
                                                <div class="modal-footer">
                                                    <a href="/pembelian/delete/{{ $pembelian->id }}">
                                                    <button class="btn btn-danger" >
                                                        Delete Data 
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
