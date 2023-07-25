  @extends('main.admin_master')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-5 text-success d-inline-block">Students Subject </h3>
                <button type="button" class="btn btn-outline-success " style="margin-left: 63%;" data-bs-toggle="modal"
                    data-bs-target="#subjectModal">
                    Enter Subject
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="subjectModal" tabindex="-1" aria-labelledby="subjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{route('subjectsave')}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="subjectModalLabel">Enter Subject</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label for="class" class=" ml-3 mt-5 d-block ">Subject:</label>
                                    <input required name="Subject" class="ml-3 form-control mb-5"type="text">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </div>
            </form>
        </div>
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
                        <td>{{ $All->Subject }}</td>
                        <td><a href="{{route('subjectdelete',$All->id)}}" class="btn btn-danger mr-3">Delete</a>
                        <a href="{{route('subjectupdate',$All->id)}}" class="btn btn-primary">Update</a></td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
