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

                            <div class="col-12 grid-margin stretch-card mt-3">

                                <div class="card">
                                    <form class="forms-sample" action="{{ route('admin_berita.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <h4 class="card-title">Tambah Berita Smart City</h4>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Gambar</label>
                                                <input type="file" name="gambar" class="form-control text-white"
                                                    id="gambar">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control text-white"
                                                    id="desktipsi" placeholder="Deskripsi">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Link</label>
                                                <input type="text" name="link" class="form-control text-white"
                                                    id="link" placeholder="Link">
                                            </div>

                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-dark">Cancel</button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
