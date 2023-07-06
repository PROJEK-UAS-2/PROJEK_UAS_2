@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Bis</h1>
        <div class="d-flex justify-content-between mb-3">
            <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Bis</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/bis/create" class="btn btn-primary">Tambah Data <i class='bx bx-plus-circle' ></i></a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Nomor Polisi</th>
                                <th>Jumlah Unit</th>
                                <th>Jurusan</th>
                                <th>Tipe Bis ID</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bisData as $bis)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$nama->nama}}</td>
                                <td>{{$kode->kode}}</td>
                                <td>{{$nomor_polisi->nomor_polisi}}</td>
                                <td>{{$jumlah_unit->jumlah_unit}}</td>
                                <td>{{$jurusan->jurusan}}</td>
                                <td>{{$tipe_bis_id->tipe_bis_id}}</td>
                                <td><span class="badge bg-label-success me-1">Active</span></td>
                                <td>
                                    <a href="/bis/edit/{{ $bis->id }}">
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
                                                <div class="modal-body">Are you sure, you want to delete type {{$nama->nama}} ?</div>
                                                <div class="modal-footer">
                                                    <a href="/bis/delete/{{ $bis->id }}">
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
                               