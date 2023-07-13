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
                    <a href="javascript:void(0);">Pembelian</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/pembelian/create" class="btn btn-primary">Tambah Data <i class='bx bx-plus-circle' ></i></a>
        </div>
        @if(session('create'))
        <br><div class="alert alert-success alert-dismissible" role="alert">
            Yeay✔,Kamu berhasil <strong>menambahkan</strong> data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
        @endif
        @if(session('edit'))
        <br><div class="alert alert-warning alert-dismissible" role="alert">
            Yeay🎉,Kamu berhasil <strong>mengedit</strong> data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
        @endif
        @if(session('delete'))
        <br><div class="alert alert-danger alert-dismissible" role="alert">
            Yeay👍,Kamu berhasil <strong>menghapus</strong> data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
        @endif
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
                        <tbody class="table-border">
                            @foreach($pembelianData as $pembelian)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pembelian->nama_penumpang}}</td>
                                <td>{{$pembelian->domisili}}</td>
                                <td>{{$pembelian->tanggal_pembelian}}</td>
                                <td>{{$pembelian->tanggal_keberangkatan}}</td>
                                <td>{{$pembelian->domisili_tujuan}}</td>
                                <td>{{$pembelian->paket_bis_id}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/pembelian/edit/{{$pembelian->id }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete{{$pembelian->id}}">
                                                <i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete{{$pembelian->id}}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="alert alert-danger" role="alert">This is a danger alert -- check it out ! <i class="bx bxs-error-alt"></i></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Are you sure, you want to delete type {{$pembelian->nama_penumpang}} ?</div>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
