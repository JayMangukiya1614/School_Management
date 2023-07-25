@extends('main.admin_master')


@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-5 text-success d-inline-block">Students Marks Grade Details </h3>
                <button type="button" class="btn btn-outline-success " style="margin-left: 50%;" data-toggle="modal"
                    data-target="#gradeModal">
                    Enter Grade
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="gradeModal" tabindex="-1" role="dialog" aria-labelledby="gradeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gradeModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form action="{{ route('gradesave.data') }}" mathod="get">
                                @csrf
                                <div class="col-sm-12">

                                    <label for="class" class=" ml-3 mt-1  ">Enter Grade:</label>
                                    <input name="Grade" class="ml-2 form-control mb-3"type="text">

                                    <label for="class" class=" ml-3 mt-1  ">Start Marks:</label>
                                    <input name="Star_Mark" class="ml-2 form-control mb-3"type="number">

                                    <label for="class" class=" ml-3 mt-1  ">End Marks:</label>
                                    <input name="End_Mark" class="ml-2 form-control mb-3"type="text">

                                    <label for="class" class=" ml-3 mt-1  ">Remarks:</label>
                                    <input name="Remark" class="ml-2 form-control mb-3"type="text">
                                    <input type="submit" value="Save" class="btn btn-primary">

                                </div>
                            </form>

                        </div>
                    </div>

                </div>
               
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr class="bg-success">
                    <th scope="col">Sr No.</th>
                    <th scope="col">Grade </th>
                    <th scope="col">Start Marks </th>
                    <th scope="col">End Marks </th>
                    <th scope="col">Remarks</th>
                    <th class="w-25"></th>

                </tr>
            </thead>
            <tbody>

                @foreach ($Alldata as $Key => $All)
                    <tr>
                        <td scope="row">{{ $Key + 1 }}</td>
                        <td>{{ $All->Grade }}</td>
                        <td>{{ $All->Star_Mark }}</td>
                        <td>{{ $All->End_Mark }}</td>
                        <td>{{ $All->Remark }}</td>

                        <td><a href="{{route('deletegrade',$All->id)}}" class="btn btn-danger mr-3">Delete</a>
                            <a href="{{route('editgrade',$All->id)}}" class="btn btn-primary">Update</a>
                        </td>
                @endforeach

                </tr>


            </tbody>
        </table>
    </div>
@endsection
