 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

           
        


            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">USER <span>| LOGIN</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="backend/assets//img/studlog.png" width="50" height="50">
                    </div>
                    <div class="ps-3">
                      <a href="{{route('login')}}">Login</a>
                   
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
<div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">USER <span>|REGISTER</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="backend/assets/img/stafflg.png" width="50" height="50">
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
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
          

            <div class="card-body">
              
           
             <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show " style="margin-top: 0px;padding: 5px; border-bottom-right-radius: 20px;">
                <marquee  direction="left" scrollamount="8" style=""  onmouseover="this.stop();" onmouseout="this.start();" > 
                   ONLINE ADMISSION PORTAL
                </marquee>
             
         </div>

              <div class="activity" style="max-height: 100%;">
 <img src="/backend/assets/img/admission.jpg" height="50%" width="100%">
  


              </div>

            </div>
          </div><!-- End Recent Activity -->

       

    
          <!-- News & Updates Traffic -->
   

        </div><!-- End Right side columns -->
 <div class="col-lg-12">
    <div class="alert alert-secondary alert-dismissible fade show">
     <p style=" text-align: justify;">
              
                <br>
               <marquee  direction="left" scrollamount="3" style="color: blue;"  onmouseover="this.stop();" onmouseout="this.start();" > 
                
                     We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.
                 </marquee>
          
    </p>
</div>

             
            </div><!-- End Reports -->
      </div>
    </section>
    @endsection