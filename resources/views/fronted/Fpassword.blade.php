<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Forget Password</title>
    <style>
        .pass_show .ptxt:hover {
            color: #333333;
        }
    </style>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container  ">
        <div class="row  mt-4">
            <div class="col-sm-4 "></div>
            <div class="col-sm-4  border">
                <form action="{{ route('Upassword') }}">
                    <h1 class="mb-2 ml-2 " style="text-decoration: underline">Forget Password</h1>
                    @if (session()->has('Student_id'))
                        <div class="alert alert-danger">{{ session()->get('Student_id') }} </div>
                    @endif
                    @if (session()->has('E_mail'))
                        <div class="alert alert-danger">{{ session()->get('E_mail') }} </div>
                    @endif
                    @if (session()->has('Password'))
                        <div class="alert alert-danger">{{ session()->get('Password') }} </div>
                    @endif
                    <label>Student ID:-</label>
                    <div class="form-group pass_show">
                        <input name="Student_id" type="text" class="form-control" placeholder="Student Id">
                    </div>
                    <label>E Mail:-</label>
                    <div class="form-group pass_show">
                        <input name="E_mail" type="email" class="form-control" placeholder="Current E Mail">
                    </div>
                    <label>New Password</label>
                    <div class="form-group pass_show">
                        <input name="New_Password" type="password" class="form-control" placeholder="New Password">
                    </div>
                    <label>Confirm Password</label>
                    <div class="form-group pass_show">
                        <input name="Confirm_Password" type="password" class="form-control"
                            placeholder="Confirm Password">
                    </div>

                    <input id="check" type="checkbox">
                    <label for="check">Remember Me..</label>
                    <br>
                    <button type="submit" class="btn btn-primary float-right mb-1">Confirm</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
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
