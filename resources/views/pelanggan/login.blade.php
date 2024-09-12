
@extends('pelanggan.layouts.main')

@section('content')
    <!-- Login Form Area Start -->
    <div class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="login-content mb-100">
                        <div class="section-heading">
                            <h2>Login</h2>
                            <p>Silakan login untuk mengakses akun Anda.</p>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                            </div>
                            <button type="submit" class="btn amado-btn w-100">Login</button>
                        </form>

                        <div class="mt-3">
                            <a href="">Belum punya akun? Daftar di sini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form Area End -->
@endsection
