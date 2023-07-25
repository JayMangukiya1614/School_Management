<!--===============================================================================================-->
<link rel="icon" type="image/png"
    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5wuq8DgoApJ-ie_RwkF8_pRFJ7EOTFXnaRpJLmboyBEBoUmYJemqkBD0ZpWp26Q5x-iY&usqp=CAU" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{route('admin_loginuser')}}">
                    <span class="login100-form-title">
                        Admin Log-In
                    </span>
                    @if (session()->has('Password'))
                        <div class="alert alert-danger">{{ session()->get('Password') }}</div>
                    @endif
                    @if (session()->has('E_mail'))
                        <div class="alert alert-danger">{{ session()->get('E_mail') }}</div>
                    @endif
                    @if (session()->has('fail'))
                        <div class="alert alert-danger">{{ session()->get('fail') }}</div>
                    @endif
                    @if (session()->has('Logout'))
                    <div class="alert alert-danger">{{ session()->get('Logout') }}</div>
                @endif
                    

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="E_mail" placeholder="Email">
						
                        <span class="text-danger">

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="false"></i>
                            </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="Password" placeholder="Password">
						

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="{{route('forgot_password')}}">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{route('admin_registration')}}">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
