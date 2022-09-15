<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
 <link href="{{asset('backend/assets/img/logo.png')}}" rel="icon">
  <link href="{{asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">
  <script src="{{asset('backend/assets/js/function.js')}}"></script>
  <script src="{{asset('backend/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/selectize.min.js')}}"></script>

  <!-- Template Main CSS File -->
 
 <link href="/backend/assets/css/selectize.bootstrap3.min.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: white;
  text-align: center;
}
</style>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
       <img src="{{asset('/backend/assets/img/sgou.png')}}"  alt="">
        
      </a>
     
    </div><!-- End Logo -->

   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
 
    


        <li class="nav-item dropdown pe-3">
@if (Auth::check())
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
         <span class="d-none d-md-block dropdown-toggle ps-2">

 {{ Auth::user()->email ?? ""}}

@endif</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>@if (Auth::check())

 {{ Auth::user()->name ?? ""}}

@endif</h6>
             
           
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                            <a class="dropdown-item d-flex align-items-center" href="{{route('adminLogout')}}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span class="menu-title">Logout</span>


                            </a>

                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

              
         
     
  
      </li>     

       

           
           

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

 

  <main id="main" class="main" style="margin-left: 0px;">

     @yield("maincontent")

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SGOU</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    
      Designed by <a href="">SGOU</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



<script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>
</body>

</html>