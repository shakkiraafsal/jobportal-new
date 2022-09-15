 @section("title","SGOU|VERIFY")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
        


            <!-- Customers Card -->
             <div class="col-lg-8" style="margin:0 auto;">

          
              <div class="card mb-3" id="cardlogin">

                <div class="card-body">

                  
              <div class="d-flex justify-content-center py-4">
                
                  <h5 class="card-title">VERIFY YOUR EMAIL</h5>
              
              </div><!-- End Logo -->
               


         

                     <form method="POST" action="{{ route('login') }}" autocomplete="off" class="row g-3 needs-validation">
                        @csrf
                  
                         @if( Session::get('error'))
                                     <div class="alert alert-danger">
                                         {{ Session::get('error') }}
                                     </div>
                                @endif
                               @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
         

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">{{$body}}</label>
                    
                    </div>

                   
                   
                    <div class="col-12">
                      
                       <a href="{{$actionLink}}" class="btn btn-success">VERIFY EMAIL</a>
                    </div>
                    

                   
                  </form>

                </div>
              </div>

        </div>
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
    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show " style="margin-bottom: 0px;padding: 5px;border-top-left-radius:20px;text-align:right ;">  <a href="{{ route('userregistration') }}" class="btn btn-success">APPLY FOR YOUR ADMISSION</a></div>



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