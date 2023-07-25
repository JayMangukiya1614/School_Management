<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Attendane Sheet</title>
  </head>
  <body>
  <div class="container-fluid border m-0 p-0 border-dark">
    <div class="row">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-12">
                    <h1 class=" mt-4 mb-4 shadow-lg bg-light p-2 text-center"
                        style="text-shadow: 2px 2px rgb(154, 243, 141);">
                        Miracle Global International School</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="d-inline-block ">Class:-</h4>
                    <p class="d-inline-block " style="font-size: 20px;">{{$YEARCLASS->Class}}
                    </p>
                </div>
            <div class="col-md-12">
                <h4 class="d-inline-block ">Year:-</h4>
                <p class="d-inline-block " style="font-size: 20px;">{{$YEARCLASS->Year}}
                </p>
            </div>
            <hr class=" border-dark ">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            {{-- <caption>List of users</caption> --}}
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th class="w-75" scope="col">Student Name</th>
                                <th class="text-center" scope="col">Attendance</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              
                                @foreach ($class as $key => $Attendance )
                                <tr>
                                 <td>{{$Attendance->ST_ID}}</td>   
                                <td>{{$Attendance->Last_Name}} {{$Attendance->First_Name}} {{$Attendance->Middle_Name}}</td>
                             
                                <td>
                                  <input name="{{$Attendance->ST_ID}}" class="ml-5" id="Present" type="radio">
                                <label class="ml-0" for="Present">Present</label>
                                <input name="{{$Attendance->ST_ID}}" class="ml-auto" id="Absent" type="radio">
                                <label class="ml-auto"for="Absent">Absent</label></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>