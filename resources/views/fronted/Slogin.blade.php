<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="images\iconm.png" rel="icon">
    <title>Log-In</title>
</head>
<style>
    /* Importing fonts from Google */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    /* Reseting */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #ecf0f3;
    }

    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }

    .logo {
        width: 80px;
        margin: auto;
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555;
    }

    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px;
        /* border: 1px solid red; */
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }

    .wrapper .form-field .fas {
        color: #555;
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1,
            -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }

    .wrapper .btn:hover {
        background-color: #039BE5;
    }

    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4;
    }

    .wrapper a:hover {
        color: #039BE5;
    }

    @media(max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px;
        }
    }
    
</style>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5wuq8DgoApJ-ie_RwkF8_pRFJ7EOTFXnaRpJLmboyBEBoUmYJemqkBD0ZpWp26Q5x-iY&usqp=CAU"
                alt="" class="p-1">
        </div>
        <div class="text-center mt-4 name">
            Miracle Global School
        </div>
        @if (session()->has('Student_ID'))
            <div class="alert alert-danger">{{ session()->get('Student_ID') }}</div>
        @endif
        @if (session()->has('Password'))
            <div class="alert alert-danger">{{ session()->get('Password') }}</div>
        @endif
        @if (session()->has('Sfail'))
            <div class="alert alert-danger">{{ session()->get('Sfail') }}</div>
        @endif
        <form class="p-3 mt-3" action="{{ route('Sloginuser') }}">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Student_ID" id="userName" placeholder="Student_ID">
            </div>
            <span class="text-danger">
                @error('Student_ID')
                    {{ $message }}
                @enderror
            </span>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="Password" id="pwd" placeholder="Password">
            </div>
            <span class="text-danger">
                @error('Password')
                    {{ $message }}
                @enderror
            </span>
            <button type="submit" class="btn mt-3">Login</button>
          
                  <a class="btn btn-lg btn-google  mt-3 " href="{{route('login.google')}}"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a>
                  <a class="btn btn-lg btn-google  mt-3 " href="{{route('login.facebook')}}"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Facebook</a>
                  <a class="btn btn-lg btn-google  mt-3 " href="{{route('login.github')}}"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Github</a>

          
        </form>
        <div class="text-center fs-6">
            <a href="{{route('Fpassword')}}">Forget password?</a> or <a href="{{ route('Sreg') }}">Sign up</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
