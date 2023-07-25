<style>
    .h3 {
        font-family: cursive;

    }
</style>

@extends('main.admin_master')

@section('admin')
    <div class="container border rounded-5 shadow-lg bg-white mb-5 form-group mt-5 p-5">
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-shadow: 2px 2px rgb(154, 243, 141);"
                    class="text-center text-dark mt-2 shadow-lg bg-white p-4 border">
                    Miracle Global School Student Registration </h3>
            </div>
        </div>
        <form action="{{route('student_registration_save')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label class="mt-5" for="Student Name">First Name</label>
                    <input name="First_Name" class="form-control shadow-lg bg-white rounded-3" type="text">
                </div>
                <div class="col-md-4">
                    <label class="mt-5" for="Father Name">Middle Name</label>
                    <input name="Middle_Name" class="form-control shadow-lg bg-white rounded-3" type="text">
                </div>
                <div class="col-md-4">
                    <label class="mt-5" for="Mother Name">Last Name</label>
                    <input name="Last_Name" class="form-control shadow-lg bg-white rounded-3" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="mt-5" for="Student Name">Mobile Nomber.</label>
                    <input name="MobileNo" class="form-control shadow-lg bg-white rounded-3" type="number">
                </div>

                <div class="col-md-6">
                    <label class="mt-5" for="Mother Name">Gender</label>
                    <select name="Gender" class="form-control text-center shadow-lg bg-white rounded-3" name="Gender" id="">
                        <option name="Gender" selected value="Male">Male</option>
                        <option name="Gender" value="Feale">Female</option>
                        <option name="Gender" value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="mt-5" for="Father Name">Address</label>
                    <input name="Address" class="form-control shadow-lg bg-white rounded-3" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="mt-5" for="Father Name">Class</label>
                    <select  class="form-control  shadow-lg bg-white rounded-3" name="Class" id="">
                        <option  disabled selected
                        class="">Class</option>
                    @foreach ($Class as $class)
                        <option>{{ $class->Class }}</option>
                    @endforeach
                   
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="mt-5" for="Father Name">Year</label>
                    <select  class="form-control  shadow-lg bg-white rounded-3" name="Year" id="">
                        <option  disabled selected
                        class="">Year</option>
                    @foreach ($Year as $year)
                        <option>{{ $year->Year }}</option>
                    @endforeach
                   
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="mt-5" for="Email">E_mail</label>
                    <input name="E_mail" class="form-control shadow-lg bg-white rounded-3" type="email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="mt-5" for="Religion">Religion</label>
                    <input name="Religion" class="form-control shadow-lg bg-white rounded-3" type="text">
                </div>
                <div class="col-md-4">
                    <label class="mt-5" for="D.O.B">D.O.B</label>
                    <input name="Date_Of_Birth" class="form-control shadow-lg bg-white rounded-3" type="date">
                </div>
                <div class="col-md-4">
                    <label class="mt-5" for="Profile Image">Profile Image</label>
                    <input name="Student_image" class="form-control shadow-lg bg-white rounded-3" type="file">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="btn btn-outline-warning shadow-lg  rounded-3 form-control mt-5">Cancel</a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-outline-info form-control shadow-lg  rounded-3 mt-5">Reset</a>

                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-outline-success form-control shadow-lg  rounded-3 mt-5">Register</button>

                </div>
            </div>
        </form>
    </div>
@endsection
