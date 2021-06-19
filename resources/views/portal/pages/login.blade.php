@include('portal.layout.head')
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
                    {{--<img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo" />--}}
                </div>
                <h1 class="w-100"><strong>Login Portal</strong><br />SMA Harapan Bangsa</h1>
            </div>
            <div class="row text-left">
                <div class="col-md-4 m-auto">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form action="{{ url('/portal/login') }}" method="POST">
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="email">Email</label>
                                        <input name="email" type="text" class="form-control" id="email" required maxlength="64" />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password" required minlength="8" maxlength="16" />
                                        <p class="w-100 text-right mb-0 mt-2">
                                            <a class="mt-2" href="{{ url('/portal/lupa-password') }}">Lupa Password?</a>
                                        </p>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                <p class="text-center mt-2 w-100">Belum punya akun? <a href="{{ url('/portal/daftar') }}">Daftar di sini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('portal.layout.foot')