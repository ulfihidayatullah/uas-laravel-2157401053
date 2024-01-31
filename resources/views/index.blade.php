@extends('layouts.app')

@section('title','Home')

@section('content')
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">SELAMAT DATANG</h3>



                            <a href="/register" class="btn btn-primary btn-lg btn-block px-5">Register</a>
                            <a href="/login" class="btn btn-primary btn-lg btn-block px-5">Login</a>


                            <hr class="my-4">



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
