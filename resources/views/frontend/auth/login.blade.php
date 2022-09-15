 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">

           
        
@if(Session::has('error'))
    <div class="alert alert-danger">
        <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
        {{ Session::get('error') }}
    </div>
@endif
 <div class="d-flex justify-content-center py-4">
                
                  <h4 class="card-title">WELCOME TO SREENARAYANAGURU OPEN UNIVERSITY JOB PORTAL...</h4>
              
              </div><!-- End Logo -->
               
            <!-- Customers Card -->
            <div class="col-md-4" style="margin:0 auto;">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">USER <span>| LOGIN</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/assets//img/studlog.png')}}" width="50" height="50">
                    </div>
                    <div class="ps-3">
                      <a href="{{route('login')}}">Login</a>
                   
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
<div class="col-md-4" style="margin:0 auto;">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">USER <span>|REGISTER</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="{{asset('backend/assets/img/stafflg.png')}}" width="50" height="50">
                    </div>
                    <div class="ps-3">
                      <a href="{{route('signup')}}">New User Registration</a>
                    

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Reports -->
           

            <!-- Recent Sales -->
         

            <!-- Top Selling -->
           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        
 <div class="col-lg-12">
    <div class="alert alert-secondary alert-dismissible fade show">
     <p style=" text-align: justify;">
              
                <br>
               <marquee  direction="left" scrollamount="3" style="color: blue;"  onmouseover="this.stop();" onmouseout="this.start();" > 
                
                    The last date to apply for the posts of Assistant and Computer Assistant/Data Entry Operator is 21-09-2022.
                 </marquee>
          
    </p>
</div>

             
            </div><!-- End Reports -->
      </div>
    </section>
    @endsection