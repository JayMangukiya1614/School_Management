@extends('main.admin_master')
@section('admin')
    <style>
        body {}

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
    <div class="container border rounded-2 shadow-lg bg-white mb-2 form-group mt-5 p-4">
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-shadow: 2px 2px rgb(154, 243, 141);"
                    class="text-center text-dark  shadow-lg bg-white p-4 border">
                    Miracle Global School Admin Registration </h3>
            </div>
        </div>

        <form action="{{ route('admin_save') }}">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded mt-5 w-75"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU"><span
                            class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span>
                        </span></div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mt-5" for="">First Name</label>
                            <input name="First_Name" class="form-control shadow-lg bg-white" type="text">
                        </div>
                        <div class="col-md-6">
                            <label class="mt-5" for="">Last Name</label>
                            <input name="Last_Name" type="text" class="shadow-lg bg-white form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mt-4" for="">Mobile Nomber</label>
                            <input name="Mobile_Nomber" class="form-control shadow-lg bg-white" type="number">
                        </div>
                        <div class="col-md-6">
                            <label class="mt-4" for="">Education</label>
                            <select name="Education" class="form-control shadow-lg bg-white rounded-3" id="">
                                <option selected value="Undergraduate">Undergraduate</option>
                                <option value="Postgraduate">Postgraduate</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="mt-5" for="Address">Address</label>
                            <textarea name="Address" class="form-control shadow-lg bg-white rounded-3" type="text"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mt-4" for="">Gender</label>
                            <select name="Gender" class="form-control shadow-lg bg-white rounded-3" id="">
                                <option selected value="Male">Male</option>
                                <option value="Feale">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="mt-4" for="City">City</label>
                            <select name="City" class="form-control  shadow-lg bg-white rounded-3" name="Gender"
                                id="">
                                <option selected value="Delhi">Delhi</option>
                                <option value="Bombay">Bombay</option>
                                <option value="Banglore">Banglore</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mt-4" for="">E_mail</label>
                            <input name="E_mail" class="form-control shadow-lg bg-white" type="email">
                        </div>
                        <div class="col-md-6">
                            <label class="mt-4" for="">Password</label>
                            <input name="Password" class="form-control shadow-lg bg-white" type="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#"
                                class="btn btn-outline-warning shadow-lg  rounded-3 form-control mt-5">Reset</a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit"
                                class="btn btn-outline-success shadow-lg  rounded-3 form-control mt-5">Register</button>
                        </div>
                    </div>
                </div>
        </form>

    </div>

    </div>
@endsection
