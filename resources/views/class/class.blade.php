@extends('main.admin_master')

@section('admin')
    <!-- Button trigger modal -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-5 text-success d-inline-block">Students Class Details</h3>
                <button type="button" class="btn btn-outline-success " style="margin-left: 63%;" data-bs-toggle="modal"
                    data-bs-target="#classModal">
                    Enter Class
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="classModal" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="classModalLabel">Enter Class</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('classsave') }}">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label for="class" class=" ml-3 mt-5 d-block ">Class:</label>
                                    <input required name="Class" class=" form-control ml-3 mb-5"type="text">


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
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr class="bg-success">
                    <th scope="col">id</th>
                    <th scope="col">Class</th>
                    <th class="w-25"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($Alldata as $Key => $All)
                    <tr>
                        <td scope="row">{{ $Key + 1 }}</td>
                        <td>{{ $All->Class }}</td>
                        <td><a href="{{ route('classdelete', $All->id) }}" class="btn btn-danger mr-3">Delete</a>
                            <a href="{{ route('classupdate', $All->id) }}" class="btn btn-primary">Update</a>
                        </td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div class="mb-5">
@endsection
