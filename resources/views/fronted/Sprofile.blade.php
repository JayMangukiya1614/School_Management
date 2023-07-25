@extends('Smain.Sadmin_master')

@section('Sadmin')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Profile</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
                quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div><!-- End Breadcrumbs -->
    <section class="" style="background-color: #eee;">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                    <div class="card" style="border-radius: 15px; background-color: #93e2bb;">
                        <div class="card-body p-4 text-black">
                            <div>
                                <h6 class="mb-4">Miracle Global International School</h6>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    {{-- <p class="small mb-0"><i class="far fa-clock me-2"></i>3 hrs</p>
                <p class="fw-bold mb-0">$90</p> --}}
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp"
                                        alt="Generic placeholder image"
                                        class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        {{-- <h5>Name:-</h5> --}}
                                        <p class="mb-0 me-2">{{ $profile->First_Name }}</p>

                                        </ul>
                                    </div>
                                    <div>

                                        <a href="" data-toggle="modal" data-target="#exampleModal"
                                            class="btn btn-outline-dark btn-rounded btn-sm" data-mdb-ripple-color="dark">
                                            Edit Profile</a>
                                        <a href="{{ route('Slogout') }}" class="btn btn-outline-dark btn-rounded btn-sm"
                                            data-mdb-ripple-color="dark"> Logout</a>
                                        <a href="{{ route('SCpassword') }}" class="btn btn-outline-dark btn-rounded btn-sm"
                                            data-mdb-ripple-color="dark"> Change Password</a>

                                        <!-- Button trigger modal -->


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('Seditprofile' ,$profile ->id)}}">
                                                        <div class="modal-body ">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="">Name:-</label>
                                                                        <input required  value="{{$profile->First_Name}}" name="First_Name" type="text"
                                                                            class="form-control">
                                                                        <label for="">E Mail:-</label>
                                                                        <input required value="{{$profile->E_mail}}" name="E_mail" type="email"
                                                                            class="form-control">
                                                                        <label for="">Mobile No.:-</label>
                                                                        <input required  value="{{$profile->Mobile_No}}" name="Mobile_No" type="number"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            {{-- <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button> --}}
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
