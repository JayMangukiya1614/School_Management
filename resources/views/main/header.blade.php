 <!-- ======= Header ======= -->
 <header id="header" class="">
     <div class="container-fluid d-flex align-items-center form-group">

         <h1 class="logo me-auto"><a href="{{ route('index') }}"><i class="fa-solid fa-m"></i>iracle <br> <i
                     class="fa-solid fa-earth-europe"></i></i>
                 <i class="fa-solid fa-s"></i>ch00l</a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav id="navbar" class="navbar order-last order-lg-0">

             <ul>
                 <li><a class="home" href="{{ route('index') }}">Dashboard</a></li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Setup Management
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('classtable') }}">Class</a>
                         <a class="dropdown-item" href="{{ route('year') }}">Year</a>

                         <a class="dropdown-item" href="{{ route('subject') }}">Subject</a>
                     </div>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Student Management
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('student_registration') }}">Registration</a>
                         <a class="dropdown-item" href="{{ route('studentdetails') }}">Student Details</a>
                     </div>
                 </li>

                 {{-- <li><a class="dropdown-item" href="{{ route('attendance') }}">Student Attendance</a></li> --}}

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Admin Management
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('admin_registration') }}">Registration</a>
                         <a class="dropdown-item" href="{{ route('admin_logout') }}">Admin Log Out</a>
                     </div>
                 </li>


                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Marks Management
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('marksentry') }}">Marks Entry</a>
                         <a class="dropdown-item" href="{{ route('marksgrade') }}">Marks Grade</a>
                     </div>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Report Managment
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('result') }}">Check Result</a>

                     </div>
                 </li>

                 {{-- <li><a class="contact" href="contact.html">Contact Us</a></li> --}}

                 <li><a class="profile" href="{{ route('Adprofile') }}"><i style="font-size: 30px;"
                             class="fa-solid fa-user"></i></a></i></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>


             {{-- class modal --}}

             <!-- Modal -->
             <div class="modal fade" id="ClassModal" tabindex="-1" role="dialog" aria-labelledby="ClassModalLabel"
                 aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="ClassModalLabel">Modal title</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-sm-12">

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                         </div>
                     </div>
                 </div>
             </div>

             {{-- Year modal --}}
             <!-- Modal -->
             <div class="modal fade" id="YearModal" tabindex="-1" role="dialog" aria-labelledby="YearModalLabel"
                 aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="YearModalLabel">Modal title</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <h1>hello word</h1>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                         </div>
                     </div>
                 </div>
             </div>

             {{-- Subject modal --}}
             <!-- Modal -->
             <div class="modal fade" id="SubjectModal" tabindex="-1" role="dialog"
                 aria-labelledby="SubjectModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="SubjectModalLabel">Modal title</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-sm-12">
                                         Class
                                         <input type="text">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                         </div>
                     </div>
                 </div>
             </div>


         </nav><!-- .navbar -->


     </div>
 </header><!-- End Header -->
