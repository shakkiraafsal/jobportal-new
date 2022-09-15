 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
        


            <!-- Customers Card -->
             <div class="col-lg-12" >

          
              
        @if($rcdetails->isNotEmpty())
            <!-- Reports -->
            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">REGIONAL CENTRE LIST LIST</h5>

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">

                @foreach($rcdetails as $rcdetails)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$rcdetails->id}}" aria-expanded="false" aria-controls="flush-{{$rcdetails->id}}">
                     {{$rcdetails->rcname}}
                    </button>
                  </h2>
                  <div id="flush-{{$rcdetails->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-striped">
                        <tr>
                          <th>Code</th>
                          <td></td>
                        </tr>
                           <tr>
                          <th>State</th>
                          <td>{{$rcdetails-> rcstate}}</td>
                        </tr>
                           <tr>
                          <th>District</th>
                          <td>{{$rcdetails->rcdistrict}}</td>
                        </tr>
                            <tr>
                          <th>Director</th>
                          <td>{{$rcdetails->rcdirector}}</td>
                        </tr>
                            <tr>
                          <th>Contat</th>
                          <td>{{$rcdetails->rccontact}}</td>
                        </tr>
                            <tr>
                          <th>Email</th>
                          <td>{{$rcdetails->rcemail}}</td>
                        </tr>
                      </table>
                   
                    </div>
                  </div>
                </div>
                  @endforeach
              



              </div><!-- End Accordion without outline borders -->

            </div>
          </div>

        </div>
@endif
            <!-- Recent Sales -->
         

            <!-- Top Selling -->
           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      
          <!-- News & Updates Traffic -->
   

        </div><!-- End Right side columns -->
 <div class="col-lg-12">

             <div class="alert alert-secondary alert-dismissible fade show">
     <p style=" text-align: justify;">
              
                <br>
               <marquee  direction="left" scrollamount="8" style="color: #0d6efd;"  onmouseover="this.stop();" onmouseout="this.start();" > 
                
                    You should provide a valid email id during registration process.This email id is used as your login credential.
                 </marquee>
         
    </p>
</div>
      </div>
    </section>
    @endsection