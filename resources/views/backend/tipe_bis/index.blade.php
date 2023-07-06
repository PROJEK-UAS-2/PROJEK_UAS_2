@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tipe Bis</h1>
        <div class="d-flex justify-content-between mb-3">
            <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Tipe Bis</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/tipebis/create" class="btn btn-primary">Tambah Data <i class='bx bx-plus-circle' ></i></a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipe Bis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipeBisData as $tipeBis)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$tipeBis->tipe}}</td>
                                <td>
                                    <a href="/tipebis/edit/{{ $tipeBis->id }}">
                                    <button type="button" class="btn rounded-pill btn-icon btn-outline-warning">
                                        <span class="tf-icons bx bxs-pencil"></span>
                                    </button>
                                    </a>
                                    <a href="/tipebis/delete/{{ $tipeBis->id }}">
                                    <button type="button" class="btn rounded-pill btn-icon btn-outline-danger">
                                        <span class="tf-icons bx bxs-trash"></span>
                                    </button></a>
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
