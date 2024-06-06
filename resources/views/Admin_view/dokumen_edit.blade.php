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

                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <form class="forms-sample" action="{{ route('admin_dokumen.update', $dokumen->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <h4 class="card-title">Edit Dokumen Smart City</h4>

                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" name="judul" class="form-control text-white"
                                                    id="judul" value="{{ $dokumen->judul }}" placeholder="judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" name="gambar" class="form-control text-white"
                                                    id="gambar">
                                                @if ($dokumen->image)
                                                    <img src="{{ asset('storage/' . $dokumen->image) }}" alt="Current Image"
                                                        class="img-fluid mt-2" width="200">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control text-white"
                                                    id="deskripsi" value="{{ $dokumen->deskripsi }}"
                                                    placeholder="Deskripsi">
                                            </div>
                                            <div class="form-group">
                                                <label for="file">File</label>
                                                <input type="file" name="file" class="form-control text-white"
                                                    id="file" value="{{ $dokumen->file }}">
                                            </div>

                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <a href="{{ route('admin_dokumen') }}" class="btn btn-dark">Cancel</a>
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
