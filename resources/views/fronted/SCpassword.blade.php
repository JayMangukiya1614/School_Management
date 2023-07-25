<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Change Password</title>
</head>
<style>
    .pass_show .ptxt:hover {
        color: #333333;
    }
</style>

<body>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row ">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 border  ">
                <h1 class="mb-5 ml-2 " style="text-decoration: underline">Change Password</h1>
                @if (session()->has('Old_Password'))
                    <div class="alert alert-danger">{{ session()->get('Old_Password') }} </div>
                @endif
                @if (session()->has('New_Password'))
                    <div class="alert alert-danger">{{ session()->get('New_Password') }} </div>
                @endif
                <form action="{{ route('SupdateP') }}">
                    <label>Current Password</label>
                    <div class="form-group pass_show">
                        <input type="password" name="Old_Password" class="form-control" placeholder="Current Password">
                        <span class="text-danger">
                            @error('Old_Password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <label>New Password</label>
                    <div class="form-group pass_show">
                        <input type="password" name="New_Password" class="form-control" placeholder="New Password">
                        <span class="text-danger">
                            @error('New_Password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <label>Confirm Password</label>
                    <div class="form-group pass_show">
                        <input type="password" name="Confirm_Password" class="form-control"
                            placeholder="Confirm Password">
                        <span class="text-danger">
                            @error('Confirm_Password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <a href="{{route('Fpassword')}}" class="" style="text-decoration:none">Forget Password</a>
                    <br>
                    <button type="submit" class="btn btn-primary float-right mb-2">Confirm</button>
                </form>
            </div>
            <div class="col-md-4"></div>

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
