@extends('main.admin_master')


@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                
                <form action="{{route('searchstudent')}}">
                    <div class="input-group">
                        <input type="search" name="search" value="{{$search_text}}" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                        <a href="{{url('studentdetails')}}"><button type="button" class="btn btn-outline-danger">Reset</button></a>
                      </div>
                </form>
            </div>
            <h1 class="mt-5 text-success">Students Details.. </h1>
        </div>
     

    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table mt-5">
                <thead>
                    <tr class="bg-success">
                        <th scope="col">S profile</th>

                        <th scope="col">Student id</th>
                        <th scope="col">First_Name</th>
                        <th scope="col">Middle_Name</th>
                        <th scope="col">Last_Name</th>

                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Class</th>
                        <th scope="col">Year</th>

                        <th scope="col">MobileNo</th>
                        <th scope="col">Religion</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    

                    @foreach ($Search as $All)
                        <tr>
                            <td><img width="40px" height="40px"
                                    src="{{ !empty($All->Student_image) ? url('profile/' . $All->Student_image) : url('profile/default.jpeg') }}"
                                    alt=""></td>
                            <td>{{ $All->ST_ID }}</td>
                            <td>{{ $All->First_Name }}</td>
                            <td>{{ $All->Middle_Name }}</td>
                            <td>{{ $All->Last_Name }}</td>
                            <td>{{ $All->Gender }}</td>
                            <td>{{ $All->Address }}</td>
                            <td>{{ $All->Class }}</td>
                            <td>{{ $All->Year }}</td>
                            <td>{{ $All->MobileNo }}</td>
                            <td>{{ $All->Religion }}</td>

                            {{-- <td><a class="btn btn-danger mr-3">Delete</a>
                            <a href="{{ route('SRupdate', $All->id) }}" class="btn btn-primary">Update</a>
                        </td> --}}

                            <td>

                                <a href="{{ route('SRdelete', $All->id) }}" class="btn btn-danger">Delete</a>

                                <a href="{{ route('SRupdate', $All->id) }}" class="btn btn-primary">Update</a>
                            </td>

                        </tr>
                    @endforeach
                

                </tbody>
            </table>
            {{-- <div class="row">
                {{ $Search->links() }}
            </div> --}}
            <span>
                {{ $Search->links() }}

            </span>
            <style>
                .w-5{
                    display: none;
                }
            </style>
        </div>
    </div>
@endsection
