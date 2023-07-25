@extends('main.admin_master')

@section('admin')
    <form action="{{ route('saveresult') }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4 border mt-5 pl-5 pr-5 mb-5">
                            <h1 class="mt-5 text-center text-success text-bold">Check Result Here</h1>
                            @if (session()->has('Value'))
                                <div class="alert alert-danger">{{ session()->get('Value') }}</div>
                            @endif
                            <h4 class="mt-5 ">Enter Student_id:-</h4>
                            <select class="form-control mb-3 ml-2 " name="ST_ID" id="">
                                <option disabled selected class="">Student_Id</option>
                                @foreach ($Sname as $Student_Id)
                                    <option>{{ $Student_Id->ST_ID }}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">
                                @error('Student_Id')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <h4 class="mt-2 ">Enter Student Class:-</h4>
                            <select class="form-control mb-3 ml-2 " name="Student_Class" id="">
                                <option disabled selected class="">Class</option>
                                @foreach ($Class as $class)
                                    <option>{{ $class->Class }}</option>
                                @endforeach

                            </select>
                            <span class="text-danger">
                                @error('Student_Year')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <h4 class="mt-2 ">Enter Student Year:-</h3>
                                <select name="Student_Year" class="ml-2 form-control mb-3"type="number">
                                    <option disabled selected class="">Year</option>
                                    @foreach ($Year as $year)
                                        <option>{{ $year->Year }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('Student_Year')
                                        {{ $message }}
                                    @enderror
                                </span><br>
                                <button type="submit" class="btn btn-outline-success  mt-3 mb-5">Submit</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
