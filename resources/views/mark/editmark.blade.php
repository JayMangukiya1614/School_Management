<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- icon --}}
    <link
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5wuq8DgoApJ-ie_RwkF8_pRFJ7EOTFXnaRpJLmboyBEBoUmYJemqkBD0ZpWp26Q5x-iY&usqp=CAU "
        rel="icon">

    <title>Update Class</title>
</head>

<body>
    <form action="{{ route('markupdatesave', $MarkE->id) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md- border mt-5 pl-5 pr-5">
                            <h1 class="mt-5 text-center text-success">Enter Update Mark</h1>
                            <h5 class="mt-5 ">Student_id :-</h5>
                            <select class="form-control  shadow-lg bg-white rounded-3" name="Student_Id" id="">
                                <option disabled class="">Student_Id</option>
                                @foreach ($Sname as $Sid)
                                    <option {{ $MarkE->Student_Id == $Sid->ST_ID ? 'selected' : '' }}>
                                        {{ $Sid->ST_ID }}
                                    </option>
                                @endforeach

                            </select>
                            <h5 class="mt-3 ">Student_Name :-</h5>
                            <select class="form-control  shadow-lg bg-white rounded-3" name="Student_Name"
                                id="">
                                <option disabled class="">Student_Name</option>
                                @foreach ($Sname as $sname)
                                    <option {{ $MarkE->Student_Name == $sname->Student_Name ? 'selected' : '' }}>
                                        {{ $sname->Student_Name }}
                                    </option>
                                @endforeach

                            </select>
                            <h5 class="mt-3 ">Student Class:-</h5>
                            <select class="form-control  shadow-lg bg-white rounded-3" name="Class" id="">
                                <option disabled class="">Class</option>
                                @foreach ($Class as $class)
                                    <option {{ $MarkE->Student_Class == $class->Class ? 'selected' : '' }}>
                                        {{ $class->Class }}
                                    </option>
                                @endforeach

                            </select>
                            <h5 class="mt-3 ">Student Year :-</h5>
                            <select class="form-control  shadow-lg bg-white rounded-3" name="Year" id="">
                                <option disabled class="">Year</option>
                                @foreach ($Year as $year)
                                    <option {{ $MarkE->Student_Year == $year->Year ? 'selected' : '' }}>
                                        {{ $year->Year }}
                                    </option>
                                @endforeach

                            </select>
                            <h5 class="mt-3 ">Student Subject:-</h5>
                            <select class="form-control  shadow-lg bg-white rounded-3" name="Subject" id="">
                                <option disabled class="">Subject</option>
                                @foreach ($Subject as $subject)
                                    <option {{ $MarkE->Student_Subject == $subject->Subject ? 'selected' : '' }}>
                                        {{ $subject->Subject }}
                                    </option>
                                @endforeach
                            </select>
                            <h5 class="mt-3 ">Total Marks :-</h5>
                            <input name="Total_Marks" value="{{ $MarkE->Total_Marks }}"
                                class="form-control  shadow-lg bg-white rounded-3" type="number">

                            <h5 class="mt-3 ">Obtain Marks:-</h5>
                            <input name="Obtain_Marks" value="{{ $MarkE->Obtain_Marks }}"
                                class="form-control  shadow-lg bg-white rounded-3" type="number">

                            <h5 class="mt-3 ">Student Grade:-</h5>
                            <select class="form-control  shadow-lg bg-white rounded-3" name="Student_Grade" id="">
                                <option disabled class="">Subject</option>
                                @foreach ($Mgrade as $mgrade)
                                    <option {{ $MarkE->Student_Grade == $mgrade->Grade ? 'selected' : '' }}>
                                        {{ $mgrade->Grade }}
                                    </option>
                                @endforeach
                            </select>

                            <center> <button type="submit" class="btn btn-outline-success  mt-3 mb-2">Update</button>
                            </center>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
