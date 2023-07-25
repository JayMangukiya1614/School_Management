@extends('main.admin_master')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-5 text-success d-inline-block">Students Year </h3>
                <button type="button" class="btn btn-outline-success " style="margin-left: 63%;" data-bs-toggle="modal"
                    data-bs-target="#yearModal">
                    Enter Year
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="yearModal" tabindex="-1" aria-labelledby="yearModalLabel" aria-hidden="true">
        <form action="{{ route('yearsave') }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="yearModalLabel">Enter Year</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label for="class" class=" ml-3 mt-5 d-block  ">Year:</label>
                                    <input name="Year" required class="ml-3 mb-5 form-control"type="number">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr class="bg-success">
                    <th scope="col">id</th>
                    <th scope="col">Year</th>
                    <th class="w-25"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($Alldata as $Key => $All)
                    <tr>
                        <td scope="row">{{ $Key + 1 }}</td>
                        <td>{{ $All->Year }}</td>
                        <td><a href="{{ route('yeardelete', $All->id) }}" class="btn btn-danger mr-3">Delete</a>
                            <a href="{{ route('yearupdate', $All->id) }}"class="btn btn-primary">Update</a>
                        </td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
