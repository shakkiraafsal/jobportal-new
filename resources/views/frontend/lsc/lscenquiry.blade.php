 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
             <div class="col-lg-12" >
        @if($lscdetails->isNotEmpty())
            <!-- Reports -->
            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LEARNING SUPPORT CENTRE</h5>

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">

                @foreach($lscdetails as $lscdetails)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$lscdetails->id}}" aria-expanded="false" aria-controls="flush-{{$lscdetails->id}}">
                     {{$lscdetails->lscname}}
                    </button>
                  </h2>
                  <div id="flush-{{$lscdetails->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-striped">
                        <tr>
                          <th>Code</th>
                          <td></td>
                        </tr>
                           <tr>
                          <th>State</th>
                          <td>{{$lscdetails-> lscstate}}</td>
                        </tr>
                           <tr>
                          <th>District</th>
                          <td>{{$lscdetails->lscdistrict}}</td>
                        </tr>
                            <tr>
                          <th>Director</th>
                          <td>{{$lscdetails->lsccoordinator}}</td>
                        </tr>
                            <tr>
                          <th>Contat</th>
                          <td>{{$lscdetails->lscmobile}}</td>
                        </tr>
                            <tr>
                          <th>Email</th>
                          <td>{{$lscdetails->lscemail}}</td>
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