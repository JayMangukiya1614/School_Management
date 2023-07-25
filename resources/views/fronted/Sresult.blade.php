    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- icon --}}
    <link href="images\iconm.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Result</title>
</head>

<body>
    <div class="container mb-3 border border-dark">

        <div class="row mt-4 p-2">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class=" mt-4 mb-4 shadow-lg bg-light p-2 text-center"
                            style="text-shadow: 2px 2px rgb(154, 243, 141);">
                            Miracle Global International School</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile">

                            <a href="{{ route('Adprofile') }}"><img class="img logo my-4  "
                                    style="width: 140px; height:140px;margin-left:40%;  " {{-- src="{{ (!empty($data->wallpaper_url))? url('backend/wallpaper/'.$data->wallpaper_url):url('img/logoimg.jpg') }}" --}}
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIEMqCaPz3dsMQLBrTOZWzXz6OYnaeUISnaQ&usqp=CAU">
                            </a>


                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 p-0">
                        <h3 class="d-inline-block">Student Name:-</h3>
                        <p class="d-inline-block" style="font-size: 20px;">{{ $Sname->Last_Name }}  {{ $Sname->First_Name }}  {{ $Sname->Middle_Name }} </p>
                    </div>
                    <div class="col-md-6">
                        <p class="d-inline-block float-right " style="font-size: 20px;">{{ $Syear->Student_Year }}
                        </p>
                        <h4 class="d-inline-block float-right">Year:-</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-0">
                        <h3 class=" d-inline-block  ">Student Id:-</h3>
                        <p class="d-inline-block" style="font-size: 20px;">{{ $Sname->ST_ID }} </p>
                    </div>

                    <div class="col-md-6">
                        <p class="d-inline-block float-right " style="font-size: 20px;">{{ $Syear->Student_Class }}
                        </p>
                        <h4 class="d-inline-block float-right">Class:-</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-0">
                        <h3 class=" d-inline-block  ">Date Of Birth:-</h3>
                        <p class="d-inline-block" style="font-size: 20px;">{{ $Sname->Date_Of_Birth }} </p>
                    </div>
                </div>
                <hr class="border-dark">


                <div class="row">
                    <div class="col-md-12 p-0">

                        <div class="table-responsive">
                            <table class="table   ">
                                <thead>
                                    <tr class="table" style="background-color: #5fcf80">
                                        <th>No.</th>
                                        <th class="w-50" scope="col">Subject Name</th>
                                        <th scope="col">Total Marks</th>
                                        <th scope="col">Obtain Marks</th>
                                        <th scope="col">Grade</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $Ttotal = null;
                                    
                                    $OTotal = null;
                                    ?>

                                    @foreach ($mark as $key => $res)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td scope="row">{{ $res->Student_Subject }}</td>
                                            <td>{{ $res->Total_Marks }}</td>
                                            @if ($res->Obtain_Marks > 35)
                                                <td>{{ $res->Obtain_Marks }}</td>
                                            @else
                                                <td class="text-danger font-weight-bold">{{ $res->Obtain_Marks }} </td>
                                            @endif
                                            <td>{{ $res->Student_Grade }}</td>
                                            <?php
                                            $Ttotal = $Ttotal + $res->Total_Marks;
                                            
                                            $OTotal = $OTotal + $res->Obtain_Marks;
                                            
                                            ?>


                                        </tr>
                                    @endforeach

                                    <tr>
                                        <th class="border-top border-light"></th>
                                        <th class="float-right" scope="row">Total:-</th>
                                        <td><?php echo $Ttotal; ?></td>
                                        <td><?php echo $OTotal; ?></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr class="border-dark">
                <div class="row table-responsive">
                    <div class="col-md-12 p-0  ">
                        <table class="">
                            <tr style="font-size: 20px; background-color:#5fcf80">
                                <th class="w-25  text-center">Percentage</th>
                                <th class="w-25 text-center">Percentile</th>
                                <th class="w-25 text-center">Grade</th>

                            </tr>
                            <tr>
                                <td class="text-center"><?php $per = ($OTotal / $Ttotal) * 100;
                                ?>{{ round($per, 2) }}%</td>
                                <td class="text-center">{{ round($per, 2) }}%</td>
                                <td class="text-center">
                                    <?php
                                    switch ($per) {
                                        case $per > 90:
                                            echo 'A+';
                                            break;
                                    
                                        case $per > 80:
                                            echo 'A';
                                            break;
                                        case $per > 70:
                                            echo 'B+';
                                            break;
                                        case $per > 60:
                                            echo 'B';
                                            break;
                                        case $per > 50:
                                            echo 'C';
                                            break;
                                        case $per > 40:
                                            echo 'D';
                                            break;
                                        case $per < 35:
                                            echo 'Fail';
                                            break;
                                    }
                                    ?>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>


            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 p-0 mt-3 text-center ">
                <h5 class=" p-2 mb-0 " style="background-color:#5fcf80; font-size:1rem; ">Genrated by <a
                        href="">Miracle Global International School </a></h5>
            </div>
        </div>
    </div>



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
