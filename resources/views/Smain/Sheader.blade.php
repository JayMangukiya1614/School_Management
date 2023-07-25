 <style>
     nav ul li a{
         display: block !important;

     }

     nav ul li {
         text-align: center !important;
     }
 </style>

 <!-- ======= Header ======= -->
 <header id="header" class="">
     <div class="container-fluid d-flex align-items-center">

         <h1 class="logo me-auto"><a href="{{ route('index') }}"><i class="fa-solid fa-m"></i>iracle <br> <i
                     class="fa-solid fa-earth-europe"></i></i>
                 <i class="fa-solid fa-s"></i>ch00l</a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav id="navbar" class="navbar order-last order-lg-0 ">
             <ul class="w-100">
                 <li><a class="" href="{{ route('Sindex') }}">Home</a></li>
                 <li><a href="{{ route('Sabout') }}">About</a></li>
                 {{-- <li><a href="{{ route('Scourse') }}">Courses</a></li>
                 <li><a href="{{ route('Strainer') }}">Trainers</a></li>
                 <li><a href="{{ route('Sevent') }}">Events</a></li> --}}
                 <li><a href="{{ route('Sid') }}">ID-Card</a></li>
                 <li><a href="{{route('Sresult')}}">Result</a></li>
                 <li><a href="{{ route('Scontact') }}">Contact</a></li>
                 <li><a href="{{ route('Sreg') }}">Registrations</a></li>
                 <li><a href="{{ route('Slogin') }}">Log-In</a></li>

                 <li><a class="profile " type="" href="{{ route('Sprofile') }}"><i style="font-size: 30px;"
                             class="fa-solid fa-user"></i></a></i></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->



     </div>
 </header><!-- End Header -->
