@extends('main.admin_master')

@section('admin')
    <style>

    </style>

    <section style="background-color: #eee;">
        <div class="container py-5 form-group">
            <div class="row">
                <div class="col">
                    {{-- <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('profile') }}">Profile</a></li>

                            <li class="breadcrumb-item "><a href=""> Edit Profile </a></li>


                        </ol>
                    </nav> --}}
                </div>
            </div>
            <form action="{{ route('profileupdatesave', $Edit->id) }}">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                @if (Session()->has('loginid'))
                                    @if ($Edit->Gender == 'Male')
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYS9jDpFR5ohk8-5GwL3ADuCN7TohQW0ghTg&usqp=CAU"
                                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    @endif
                                    @if (Session()->has('loginid'))
                                        @if ($Edit->Gender == 'Female')
                                            <img src="https://www.freeiconspng.com/thumbs/female-icon/female-icon-27.png"
                                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        @endif
                                    @endif
                                    @if (Session()->has('loginid'))
                                        @if ($Edit->Gender == 'Other')
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS24C9Uvd6UCTeQ6_rl_mtHCwUNSASiGNf0Qw&usqp=CAU"
                                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        @endif
                                    @endif
                                @endif
                                <h5 class="my-3">{{ $Edit->First_Name }} {{ $Edit->Last_Name }}</h5>
                                {{-- <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
                                <div class="d-flex justify-content-center mb-2">
                                    {{-- <button type="button" class="btn btn-success">Delete</button> --}}
                                    <button type="submit" class="btn btn-outline-success btn-lg ms-1">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="">First Name</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name="First_Name" value="{{ $Edit->First_Name }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="">Last Name</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name="Last_Name" value="{{ $Edit->Last_Name }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name="Address" value="{{ $Edit->Address }}" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Education</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="Education" value="{{ $Edit->Education }}"
                                            class="select form-control ">

                                            <option name="Education"
                                                {{ $Edit->Education == 'Undergraduate' ? 'selected' : '' }}>Undergraduate
                                            </option>
                                            <option name="Education"
                                                {{ $Edit->Education == 'Postgraduate' ? 'selected' : '' }}>Postgraduate
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Gender</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="Gender" value="{{ $Edit->Gender }}" class="select form-control ">

                                            <option name="Gender" {{ $Edit->Gender == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option name="Gender" {{ $Edit->Gender == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option name="Gender" {{ $Edit->Gender == 'Other' ? 'selected' : '' }}>Other
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name="E_mail" value="{{ $Edit->E_mail }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="">Mobile</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name="Mobile_Nomber" value="{{ $Edit->Mobile_Nomber }}" class="form-control"
                                            type="number">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
