@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="/registerForm/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/registerForm/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/loginTheme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- /registerForm/vendor CSS-->
    <link href="/registerForm/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/registerForm/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/registerForm/css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Register</h2>
                </div>
                <div class="card-body">
                    <form　method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name"><i class="fa fa-user mr-1"></i>Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input type="text" class="input--style-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                 <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><i class="fa fa-envelope-square mr-1"></i>Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5 @error('email') is-invalid @enderror" name="email" id="email" type="email"  value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"><i class="fa fa-key mr-1"></i>Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="password" class="input--style-5 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> <i class="fa fa-check-circle mr-1"></i>Confirm password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="password_confirmation" class="input--style-5 @error('password') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name"><i class="fa fa-phone mr-1"></i>Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/registerForm/vendor/jquery/jquery.min.js"></script>
    <!-- /registerForm/vendor JS-->
    <script src="/registerForm/vendor/select2/select2.min.js"></script>
    <script src="/registerForm/vendor/datepicker/moment.min.js"></script>
    <script src="/registerForm/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/registerForm/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
@endsection
