@extends('Admin_layouts.app')

@section('content')
    @parent
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ asset('admin_template/template/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h2 class="mb-1 mb-sm-0">Selamat Datang di Halaman Admin</h2>
                            </div>
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="card-title m-0 align-items-center">Dokumen Smart City</h4>

                                            <a href="{{ route('admin_dokumen.create') }}"
                                                class="btn btn-primary align-self-center">
                                                <i class="fas fa-plus"></i>
                                                Tambah data
                                            </a>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="color: rgb(233, 232, 232)">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th> No </th>
                                                        <th> Judul </th>
                                                        <th> Deskripsi </th>
                                                        <th> File </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    @isset($dokumenDatas)
                                                        @foreach ($dokumenDatas as $dokumenData)
                                                            <tr>
                                                                <td>{{ $dokumenData->id }}</td>
                                                                <td>{{ $dokumenData->judul }}</td>
                                                                <td>{{ $dokumenData->deskripsi }}</td>
                                                                <td>{{ $dokumenData->file }}</td>
                                                                <td>
                                                                    <a href="" class="btn btn-success">
                                                                        <i class="fas fa-pen"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a href="" class="btn btn-danger">
                                                                        <i class="fas fa-trash-can"></i>
                                                                        Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endisset
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
