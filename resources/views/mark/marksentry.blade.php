@extends('main.admin_master')


@section('admin')
    {{-- <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mt-5 text-success d-inline-block">Students Marks....</h3>
                <button type="button" class="btn btn-outline-success " style="margin-left: 63%;" data-bs-toggle="modal"
                    data-bs-target="#subjectModal">
                    Enter Marks.....
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <form action="">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" value="" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                        <a href="{{ url('studentdetails') }}"><button type="button"
                                class="btn btn-outline-danger">Reset</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Modal -->
    <div class="modal fade" id="subjectModal" tabindex="-1" aria-labelledby="subjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="classModalLabel"
                        style="font-family: 'Courier New', Courier, monospace; text-shadow: 2px 2px rgb(154, 243, 141);">
                        Enter Student Marks</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('markssave') }}">
                    <div class="modal-body">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 for="class" class=" ml-3 mt-1  ">Student Id:</h5>
                                    <select class="form-control mb-3 ml-2 " name="ST_ID" id="">
                                        <option disabled selected class="">Student_Id</option>
                                        @foreach ($Sname as $Student_Id)
                                            <option>{{ $Student_Id->ST_ID }}</option>
                                        @endforeach

                                    </select>


                                    <h5 for="class" class=" ml-3 mt-1  ">Student Name:</h5>
                                    <select class="form-control mb-3 ml-2 " name="Student_Name" id="">
                                        <option disabled selected class="">Student_Name</option>
                                        @foreach ($Sname as $sname)
                                            <option>{{ $sname->First_Name }}  {{ $sname->Middle_Name }}  {{ $sname->Last_Name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="class" class=" ml-3 mt-1  ">Student Class:</label>
                                    <select class="form-control mb-3 ml-2 " name="Student_Class" id="">
                                        <option disabled selected class="">Class</option>
                                        @foreach ($Class as $class)
                                            <option>{{ $class->Class }}</option>
                                        @endforeach

                                    </select>

                                    <h5 for="class" class=" ml-3 mt-1  ">Student Year:</h5>
                                    <select name="Student_Year" class="ml-2 form-control mb-3"type="number">
                                        <option disabled selected class="">Year</option>
                                        @foreach ($Year as $year)
                                            <option>{{ $year->Year }}</option>
                                        @endforeach
                                    </select>

                                    <h5 for="class" class=" ml-3 mt-1  ">Student Subject:</h5>
                                    <select name="Student_Subject" class="ml-2 form-control mb-3"type="text">
                                        <option disabled selected class="">Subject</option>
                                        @foreach ($Subject as $subject)
                                            <option>{{ $subject->Subject }}</option>
                                        @endforeach
                                    </select>

                                    <h5 for="class" class=" ml-3 mt-1  ">Total Marks:</h5>
                                    <input name="Total_Marks" class="ml-2 form-control mb-3"type="number">

                                    <h5 for="class" class=" ml-3 mt-1  ">Obtain Marks:</h5>
                                    <input name="Obtain_Marks" class="ml-2 form-control mb-3"type="number">


                                    <h5 for="class" class=" ml-3 mt-1  ">Student Grade:</h5>
                                    <select name="Student_Grade" class="ml-2 form-control mb-3"type="text">
                                        <option disabled selected class="">Grade</option>
                                        @foreach ($Mgrade as $mgrade)
                                            <option>{{ $mgrade->Grade }}</option>
                                        @endforeach
                                    </select>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="container table-responsive">
        <table class="table mt-5">
            <thead>
                <tr class="bg-success">
                    <th scope="col">Sr.No</th>
                    <th scope="col">Student id</th>
                    <th scope="col">Student Class</th>
                    <th scope="col">Student Year</th>
                    <th scope="col">Student Subject</th>
                    <th scope="col">Total Marks</th>
                    <th scope="col">Obtain Marks</th>
                    <th scope="col">Grade</th>



                    <th class=""></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($MarkE as $key =>$All)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $All->Student_Id }}</td>
                        <td>{{ $All->Student_Class }}</td>
                        <td>{{ $All->Student_Year }}</td>
                        <td>{{ $All->Student_Subject }}</td>
                        <td>{{ $All->Total_Marks }}</td>
                        <td>{{ $All->Obtain_Marks }}</td>
                        <td>{{ $All->Student_Grade }}</td>



               
                        <td>
                        
                            <a href="{{ route('markdelete', $All->id) }}" class="btn btn-danger">Delete</a>
                            <a href="{{ route('markupdate', $All->id) }}" class="btn btn-primary">Update</a>

                        </td>
               

                    </tr>




                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
