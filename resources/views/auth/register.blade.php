@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5" id="footer" style="background-color: #1C2833;padding:100px;padding-bottom: 0px;padding-top: 70px;b  ">
        <div class="row">
            <div class="col-12 col-md-3">
                <p class="mb-4 text-light" style="font-size: 25px;">&copy; 2020 Quizizz Inc.</p>
                <div class="d-flex">
                    <span class="mr-3 text-light pb-3">Follow</span>
                    <i class="fab fa-facebook mr-4" style="color:white;font-size: 20px;"></i>
                    <i class="fab fa-instagram mr-4" style="color: white;font-size: 20px;"></i>
                    <i class="fab fa-tiktok mr-4" style="color: white;font-size: 20px;"></i>
                </div>
            </div>
            <div class="col-12 col-md-3 footul">
                <p><a href="">The Quizz Blog</a></p>
                <p><a href="">Teaching Resources</a></p>
                <p><a href="">Help Center</a></p>
                <p><a href="">Quizz for Work</a></p>
            </div>
            <div class="col-12 col-md-3 footul">
                <p><a href="">Terms of Services</a></p>
                <p><a href="">Pravicy Policy</a></p>
                <p><a href="">Careers</a></p>
                <p><a href="">About us</a></p>
            </div>
            <div class="col-12 col-md-3 ">
                <p class="text-light mb-4" style="font-size: 20px;">Search Me</p>
                <!-- Search form -->
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-12">
                <p class="text-light pt-3" style="border-top: 1px solid white;margin-top: 50px;">Copyright &copy; All Right Reserved, Designed By Susu</p>
            </div>
        </div>
    </div>
@endsection
