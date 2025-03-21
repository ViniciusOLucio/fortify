@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="container">
        <!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->
            <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Sign up now</h2>
                            <form action="{{route('login.store')}}" method="post" name="login">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 mb-4">--}}
{{--                                        <div data-mdb-input-init class="form-outline">--}}
{{--                                            <input type="text" id="form3Example1" class="form-control"/>--}}
{{--                                            <label class="form-label" for="form3Example1">First name</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 mb-4">--}}
{{--                                        <div data-mdb-input-init class="form-outline">--}}
{{--                                            <input type="text" id="form3Example2" class="form-control"/>--}}
{{--                                            <label class="form-label" for="form3Example2">Last name</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control"/>
                                    <label class="form-label" for="email">Email</label>

                                    @error('email')
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill"/>
                                        </svg>
                                        <div>
                                            Email incorreto
                                        </div>
                                    </div>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control"/>
                                    <label class="form-label" for="password">Password</label>
                                </div>



                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign up <a href="{{route('register')}}">Registrar</a> :</p>
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
@endsection
