@extends('Smain.Sadmin_master')

@section('Sadmin')
    <section class="h-100 bg-light">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 w-100  d-none d-xl-block">
                                <img class="shadow-lg p-3  bg-white rounded "
                                    src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c3R1ZGVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6 ">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Student registration </h3>
                                    @if (session()->has('ID'))
                                <div class="alert alert-danger">{{ session()->get('ID') }}</div>
                                    @endif
                                    <form action="{{ route('regsave') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Student ID</label>
                                                    <input type="text" value="{{ old('Student_ID') }}"
                                                        id="form3Example1n"name="Student_ID"
                                                        class="form-control form-control-lg" />
                                                    <span class="text-danger">
                                                        @error('Student_ID')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                    <input type="text" value="{{ old('First_Name') }}"
                                                        id="form3Example1m" name="First_Name"
                                                        class="form-control form-control-lg" />
                                                    <span class="text-danger">
                                                        @error('First_Name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                            <input type="text" value="{{ old('E_mail') }}" id="form3Example97"
                                                class="form-control form-control-lg" name="E_mail" />
                                            <span class="text-danger">
                                                @error('E_mail')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">Mobile No.</label>
                                            <input type="number" value="{{ old('Mobile_No') }}" id="form3Example97"
                                                class="form-control form-control-lg" name="Mobile_No" />
                                            <span class="text-danger">
                                                @error('Mobile_No')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">Password</label>
                                            <input type="number" value="{{ old('Password') }}" id="form3Example97"
                                                class="form-control form-control-lg" name="Password" />
                                            <span class="text-danger">
                                                @error('Password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="d-flex justify-content-end ">
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="submit" class="btn btn-warning btn-lg ms-2">Submit
                                                form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
