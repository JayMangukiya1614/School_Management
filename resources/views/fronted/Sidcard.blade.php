<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="images\iconm.png" rel="icon">

    <title>Studen ID-Card</title>
    <style>
        body {
            background-color: #d7d6d3;
            font-family: 'verdana';
        }

        .id-card-holder {
            width: 225px;
            padding: 4px;
            margin: 0 auto;
            background-color: #1f1f1f;
            border-radius: 5px;
            position: relative;
        }

        .id-card-holder:after {
            content: '';
            width: 7px;
            display: block;
            background-color: #0a0a0a;
            height: 100px;
            position: absolute;
            top: 105px;
            border-radius: 0 5px 5px 0;
        }

        .id-card-holder:before {
            content: '';
            width: 7px;
            display: block;
            background-color: #0a0a0a;
            height: 100px;
            position: absolute;
            top: 105px;
            left: 222px;
            border-radius: 5px 0 0 5px;
        }

        .id-card {

            background-color: #fff;
            padding: 3px;
            border-radius: 10px;
            text-align: left;
            box-shadow: 0 0 1.5px 0px #b9b9b9;
        }

        .id-card img {
            margin: 0 auto;
        }

        .header img {
            width: 100px;
            /* margin-top: 15px; */
        }

        .photo img {
            width: 80px;
            margin-top: 15px;
        }

        h2 {
            font-size: 15px;
            margin: 5px 0;
        }

        h3 {
            font-size: 12px;
            margin: 2.5px 0;
            font-weight: 300;
        }

        .qr-code img {
            width: 50px;
        }

        p {
            font-size: 5px;
            margin: 2px;
        }

        .id-card-hook {
            background-color: #000;
            width: 70px;
            margin: 0 auto;
            height: 15px;
            border-radius: 5px 5px 0 0;
        }

        .id-card-hook:after {
            content: '';
            background-color: #d7d6d3;
            width: 47px;
            height: 6px;
            display: block;
            margin: 0px auto;
            position: relative;
            top: 6px;
            border-radius: 4px;
        }

        .id-card-tag-strip {
            width: 45px;
            height: 40px;
            background-color: #0950ef;
            margin: 0 auto;
            border-radius: 5px;
            position: relative;
            top: 9px;
            z-index: 1;
            border: 1px solid #0041ad;
        }

        .id-card-tag-strip:after {
            content: '';
            display: block;
            width: 100%;
            height: 1px;
            background-color: #c1c1c1;
            position: relative;
            top: 10px;
        }

        .id-card-tag {
            width: 0;
            height: 0;
            border-left: 100px solid transparent;
            border-right: 100px solid transparent;
            border-top: 100px solid #0958db;
            margin: -10px auto -30px auto;
        }

        .id-card-tag:after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-top: 100px solid #d7d6d3;
            margin: -10px auto -30px auto;
            position: relative;
            top: -130px;
            left: -50px;
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="id-card-tag"></div>
                <div class="id-card-tag-strip"></div>
                <div class="id-card-hook"></div>
                <div class="id-card-holder">
                    <div class="id-card">
                        <div class="header">
                            <img class="" src="images\iconm.png" style="width: 50px; height:50px;" alt="">

                            <h2 class="text-success ml-3 mb-0 m-0 d-inline-block"><i class="fa-solid fa-m"></i>iracle
                                <i class="fa-solid fa-earth-europe"></i></i>
                                <i class="fa-solid fa-s"></i>ch00l
                            </h2>

                        </div>
                        <div class="photo">
                            <img class="img logo   " style="width: 100px; height:100px; margin-left:25%;"
                                {{-- src="{{ (!empty($data->wallpaper_url))? url('backend/wallpaper/'.$data->wallpaper_url):url('img/logoimg.jpg') }}" --}}
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIEMqCaPz3dsMQLBrTOZWzXz6OYnaeUISnaQ&usqp=CAU">
                        </div>
                        {{-- <h6 class="d-inline-block">Name:-</h6> --}}
                        <p class="ml-3 mt-2 text-success" style="font-size:0.8rem;">{{ $icard->Last_Name }}
                            {{ $icard->First_Name }} {{ $icard->Middle_Name }}</p>


                        <p style="font-size: 0.8rem;" class=" ml-0 d-inline-block mt-2">Student_ID:-</p>

                        <p style="font-size:0.6rem; " class="d-inline-block ml-1">{{ $icard->ST_ID }}</p>
                        <br>
                        <p style="font-size: 0.8rem;" class=" ml-0 d-inline-block mt-2">Class:-</p>

                        <p style="font-size:0.6rem; margin-left:21%;" class="d-inline-block ">{{ $icard->Class }} to
                            12th</p>

                        <br>                        
                          
                        <p style="font-size: 0.8rem;" class=" ml-0 d-inline-block mt-2">Year:-</p>
                            <?php
                            $year=1;
                          $p = $year + $icard->Year;
                            ?>
                        <p style="font-size:0.6rem; margin-left:24%;" class="d-inline-block ">{{ $icard->Year }} - <?php echo $p;?>
                            (valid) </p>
                        <br>
                        <p style="font-size: 0.8rem;" class=" ml-0 d-inline-block mt-2">Contact No.:-</p>

                        <p style="font-size:0.6rem; " class="d-inline-block ">{{ $icard->MobileNo }}</p>

                        <br>

                        <p style="font-size:0.6rem; ">{{ $icard->Address }} </p>
                        <p style="font-size:0.6rem; " class="float-right text-danger"> Telephone-No.:-1800-200-1829 </p>
                        <br class="mt-0">

                    </div>
                </div>

            </div>
           
        </div>
        <a href="{{route('Sevent')}}" class="btn btn-dark mt-3" ><i class="fa-solid fa-arrow-left"></i></a>
                <a href="{{route('Scontact')}}" class=" mt-3 btn btn-dark float-right"><i class="fa-solid fa-right-long"></i></a>
        </div>

    <!-- Optional JavaScript -->
    {{-- font-awesome --}}
    <script src="https://kit.fontawesome.com/88bf84b9d4.js" crossorigin="anonymous"></script>

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
