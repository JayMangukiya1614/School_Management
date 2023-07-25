@extends('Smain.Sadmin_master')

@section('Sadmin')
    <form action="{{ route('ScheckId') }}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row ">
                        <div class="col-md-3">

                        </div>
                       
                        <div class="col-md-6 border border-dark mt-5 pl-5 pr-5 mb-5">
                            <h1 class="mt-5 text-center text-success text-bold">Check ID-Card Here</h1>
                            @if (Session()->has('Student_ID'))
                                <div class="alert alert-danger">{{ session()->get('Student_ID') }}</div>
                            @endif
                            @if (Session()->has('Password'))
                                <div class="alert alert-danger">{{ session()->get('Password') }}</div>
                            @endif
                            @if (Session()->has('MobileNo'))
                                <div class="alert alert-danger">{{ session()->get('MobileNo') }}</div>
                            @endif
                            @if (Session()->has('E_mail'))
                                <div class="alert alert-danger">{{ session()->get('E_mail') }}</div>
                            @endif
                            @if (session()->has('Value'))
                                <div class="alert alert-danger">{{ session()->get('Value') }}</div>
                            @endif

                            <h4 class="mt-5 ">Student ID:-</h4>
                            <input type="text" name="Student_ID" class="form-control shadow-lg bg-white rounded-3"
                                placeholder=" Enter Student ID">
                            <span class="text-danger">
                                @error('Student_ID')
                                    {{ $message }}
                                @enderror
                            </span>

                            <h4 class="mt-5  ">E_mail</h4>
                            <input type="email" name="E_mail" class="form-control shadow-lg bg-white rounded-3"
                                placeholder="Enter E_mail">
                            <span class="text-danger">
                                @error('E_mail')
                                    {{ $message }}
                                @enderror
                            </span>
                            <h4 class="mt-5  ">Mobile No:-</h4>
                            <input type="number" name="Mobile_No" class="form-control shadow-lg bg-white rounded-3"
                                placeholder="Enter  Number">
                            <span class="text-danger">
                                @error('Mobile_No')
                                    {{ $message }}
                                @enderror
                            </span>
                            <h4 class="mt-5 ">Password:-</h4>
                            <input type="password" name="Password" class="form-control shadow-lg bg-white rounded-3"
                                placeholder=" Enter Password">
                            <span class="text-danger">
                                @error('Password')
                                    {{ $message }}
                                @enderror
                            </span>





                            <button type="submit" class="btn btn-outline-success float-right mt-3 mb-5">Submit</button>

                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
