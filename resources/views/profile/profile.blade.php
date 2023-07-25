@extends('main.admin_master')

@section('admin')
    <style>

    </style>

    <section style="background-color: #eee;">
        <div class="container py-5 form-group">
            <div class="row">
                <div class="col">

                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                @if (Session()->has('loginid'))
                                    @if ($All->Gender == 'Male')
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYS9jDpFR5ohk8-5GwL3ADuCN7TohQW0ghTg&usqp=CAU"
                                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    @endif
                                    @if (Session()->has('loginid'))
                                        @if ($All->Gender == 'Female')
                                            <img src="https://www.freeiconspng.com/thumbs/female-icon/female-icon-27.png"
                                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        @endif
                                    @endif
                                    @if (Session()->has('loginid'))
                                        @if ($All->Gender == 'Other')
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS24C9Uvd6UCTeQ6_rl_mtHCwUNSASiGNf0Qw&usqp=CAU"
                                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        @endif
                                    @endif
                                @endif

                                <h5 class="my-3">{{ $All->First_Name }} {{ $All->Last_Name }}</h5>
                                <p class="text-muted mb-1">{{ $All->Address }}</p>

                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route('delete', $All->id) }}" style="font-size:20px" title="Delete Account"
                                        class=" "><i class="fa-solid fa-trash-can"></i></a>
                                    <a href="{{ route('edit_profile', $All->id) }}" style="font-size:20px" class="ml-5"
                                        title="Edit Profile"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('editpassword') }}" style="font-size:20px" class="ml-5"
                                        title="Edit Password"><i class="fa-solid fa-key"></i></a>
                                    <a href="{{ route('admin_logout') }}"style="font-size:20px" class="ml-5"
                                        title="Log Out"><i class="fa-solid fa-right-from-bracket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                @if (session()->has('Upassword'))
                                    <div class="text-success text-center mb-5">{{ session()->get('Upassword') }}</div>
                                @endif
                                @if (session()->has('Uprofile'))
                                    <div class="text-success text-center mb-5">{{ session()->get('Uprofile') }}</div>
                                @endif
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p for="">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p name="First_Name" class=" form-control" type="text">
                                            {{ $All->First_Name }} {{ $All->Last_Name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p for="">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="form-control">{{ $All->E_mail }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p for="">Mobile_No</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p name="Mobile_Nomber" class=" form-control" type="text">
                                            {{ $All->Mobile_Nomber }} </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
