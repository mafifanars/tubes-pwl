@extends('portal.layout.auth')

@section('content')
<div class="container login vw-100">
    <div class="row vh-100 mt-4">
        <div class="col m-auto">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-arrow-left mr-2"></i>
                        Kembali ke homepage
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{--<img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo"/>--}}
                </div>
                <h1 class="w-100"><strong>Daftar Portal</strong><br />SMA Harapan Bangsa</h1>
            </div>
            <div class="row text-left">
                <div class="col-md-7 m-auto">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form action="{{ route('register')}}" method="POST">
                                @csrf
                                <div class="form-row mb-3">
                                    <div class="col-12 mb-3">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control" id="name" required maxlength="255" minlength="3" />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required maxlength="64" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required minlength="8" maxlength="16" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="confirm-password">Konfirmasi Password</label>
                                        <input type="password" name="confirm_password" class="form-control" id="confirm-password" required minlength="8" maxlength="16" />
                                        <div class="feedback"></div>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Daftar</button>
                                <p class="text-center mt-2 w-100">Sudah punya akun? <a href="{{ url('/portal') }}">Login di sini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
