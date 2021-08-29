<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>انتخابات 2021</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <!-- css -->
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">

</head>

<body style="font-family: 'Cairo', sans-serif!important">

<div class="wrapper" style="font-family: 'Cairo', sans-serif!important">

    <!--=================================
preloader -->

    <div id="pre-loader">
        <img src="images/pre-loader/loader-01.svg" alt="">
    </div>

    <!--=================================
preloader -->

    <!--=================================
login-->

    <section class="height-100vh d-flex align-items-center page-section-ptb login"
             style="background-image: url('/assets/images/bg.jpg'); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center no-gutters vertical-align">
                <div class="col-lg-6 col-md-8 bg-white">
                    <div class="login-fancy pb-40 clearfix">
                        <h3 class="mb-30">تسجيل الدخول</h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="section-field mb-20">
                                <label class="mb-10" for="name">البريدالالكتروني*</label>
                                <input id="email" type="text"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                            <div class="section-field mb-20">
                                <label class="mb-10" for="Password">كلمة المرور * </label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>
                            <div class="section-field">
                                <div class="remember-checkbox mb-30">
                                    <input type="checkbox" class="form-control" name="two" id="two"/>
                                    <label for="two"> تذكرني</label>
                                    <a href="#" class="float-right">هل نسيت كلمة المرور ؟</a>
                                </div>
                            </div>
                            <button class="button"><span>دخول</span><i class="fa fa-check"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
login-->

</div>

<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ asset('assets/js/plugins-jquery.js') }}"></script>
<!-- validation -->
<script src="{{ asset('assets/js/validation.js') }}"></script>
<!-- custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
