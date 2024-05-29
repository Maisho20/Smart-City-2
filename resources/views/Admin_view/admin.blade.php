@extends('Admin_layouts.app')

@section('content')
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
                                        <h4 class="card-title">Home data</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="color: rgb(233, 232, 232)">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Smart Ico</th>
                                                        <th>Smart Img</th>
                                                        <th>Routes</th>
                                                        <th>Judul Smart</th>
                                                        <th>Sub Judul Smart</th>
                                                        <th>Deskripsi Smart</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($homeDatas)
                                                        @foreach ($homeDatas as $homeData)
                                                            <tr {{-- onclick="window.location='{{ route('detail_admin.show', ['id' => $homeData->id]) }}'" --}}>
                                                                <td>{{ $homeData->id }}</td>
                                                                <td>{{ $homeData->smartIco }}</td>
                                                                <td>{{ $homeData->smartImg }}</td>
                                                                <td>{{ $homeData->routes }}</td>
                                                                <td>{{ $homeData->judulSmart }}</td>
                                                                <td>{{ $homeData->subJudulSmart }}</td>
                                                                <td>{{ $homeData->smartDesc }}</td>
                                                                {{-- <td>
                                                                    @if ($homeData->status != 'Dibatalkan')
                                                                        <form action="{{ route('batal_admin') }}"
                                                                            method="GET">
                                                                            @csrf
                                                                            <input type="hidden" name="tiket_id"
                                                                                value="{{ $homeData->id }}">
                                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                                onclick="return confirm('Apakah Anda yakin ingin membatalkan tiket ini?')">Batal</button>
                                                                        </form>
                                                                    @endif
                                                                </td> --}}
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
