@extends('layouts.app')

@section('title','Register')

@section('content')
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>

                                <form action="#" method="POST">
                                    @csrf

                                    <div class="form-outline form-white mb-4" style="text-align: left">
                                        <label class="form-label" for="name">Nama</label>
                                        <input type="text" id="name" name="name"
                                            class="form-control form-control-lg
                                        @error('name')
                                        is-invalid
                                        @enderror" />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-outline form-white mb-4" style="text-align: left">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="form-control form-control-lg
                                        @error('email')
                                        is-invalid
                                        @enderror" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4" style="text-align: left">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg
                                        @error('password')
                                        is-invalid
                                        @enderror " />
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                                    <a href="/" class="btn btn-outline-light btn-lg px-5">Kembali</a>

                                </form>

                            </div>

                            <div>
                                <p class="mb-0">Sudah punya akun? <a href="/login"
                                        class="text-white-50 fw-bold">Login</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
