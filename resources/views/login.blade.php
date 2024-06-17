@extends('Auth_layout.app')

@section('form')
    <form class="user" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group mt-5 mb-3">
            <label class="form-label font-weight-bold ">Email</label>
            <div class="input-group input-group-md">
                <div class="input-group">
                    <input class="no-border form-control" aria-describedby="inputGroup-sizing-md"
                        placeholder="Silahkan masukkan email anda" type="email" name="email" required autofocus>
                </div>
            </div>
        </div>

        <div class="form-group mt-2 mb-3">
            <label class="form-label font-weight-bold ">Password</label>
            <div class="input-group input-group-md">
                <div class="input-group">
                    <input class="no-border form-control" aria-describedby="inputGroup-sizing-md" name="password"
                        placeholder="Silahkan masukkan password anda" type="password" value="" required>
                </div>
            </div>
        </div>

        @if ($errors->has('email'))
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif

        <div class="text-center mt-2">
            <button type="submit" class="btn btn-primary btn-user btn-block shadow-sm mt-1"
                style="border-radius: 15px; font-size: 1.2rem; font-weight: 600; border-width: 2pt ; padding: 8px 15px; margin: auto;">
                Login
            </button>
        </div>
    </form>
@endsection
