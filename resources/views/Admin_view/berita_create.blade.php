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

                            {{-- <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="card-title m-0 align-items-center">Tambah Berita Smart City</h4>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="color: rgb(233, 232, 232)">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th> No </th>
                                                        <th> Gambar </th>
                                                        <th> Deskripsi </th>
                                                        <th> Link </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    @isset($beritaDatas)
                                                        @foreach ($beritaDatas as $beritaData)
                                                            <tr>
                                                                <td>{{ $beritaData->id }}</td>
                                                                <td>{{ $beritaData->gambar }}</td>
                                                                <td>{{ $beritaData->deskripsi }}</td>
                                                                <td>{{ $beritaData->link }}</td>
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
                            </div> --}}

                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tambah Berita Smart City</h4>
                                        {{-- <p class="card-description"> Basic form elements </p> --}}
                                        <form class="forms-sample" action="{{ route('admin_berita.store') }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputName1">Gambar</label>
                                                <input type="text" name="gambar" class="form-control text-white"
                                                    id="exampleInputName1" placeholder="asset('img/berita/Nama gambar')">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control text-white"
                                                    id="exampleInputEmail3" placeholder="Deskripsi">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Link</label>
                                                <input type="text" name="link" class="form-control text-white"
                                                    id="exampleInputPassword4" placeholder="Link">
                                            </div>

                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-dark">Cancel</button>
                                        </form>
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
