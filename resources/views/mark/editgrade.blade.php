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
    <form action="{{route('gradeupdatesave',$Mgrade->id)}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md- border mt-5 pl-5 pr-5">
                            <h1 class="mt-5 text-center text-success">Enter Update Mark</h1>
                            <h5 class="mt-5 ">Grade:-</h5>
                            <input value="{{ $Mgrade->Grade }}" name="Grade" value=""
                                class="form-control  shadow-lg bg-white rounded-3" type="text">
                            <h5 class="mt-3 ">Start Mark:-</h5>
                            <input name="Star_Mark" value="{{ $Mgrade->Star_Mark }}"
                                class="form-control  shadow-lg bg-white rounded-3" type="number">
                            <h5 class="mt-3 ">End Mark:-</h5>
                            <input name="End_Mark" value="{{ $Mgrade->End_Mark }}"
                                class="form-control  shadow-lg bg-white rounded-3" type="number">
                            <h5 class="mt-3 ">Remarks:-</h5>
                            <input name="Remark" value="{{ $Mgrade->Remark }}"
                                class="form-control  shadow-lg bg-white rounded-3" type="text">


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
