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

          
              <div class="card mb-3" id="cardlogin">

                <div class="card-body">

                  
              <div class="d-flex justify-content-center py-4">
                
                  <h5 class="card-title">SEARCH PROGRAMME</h5>
              
              </div><!-- End Logo -->
               


         

          <form   class="row g-3" method="GET" action="{{ route('searchProgramme') }}"  autocomplete="off">
                      
              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Filter you serach:</label>
         <select class="form-control" name="search" >
           <option value="">SELECT PROGRAMME CATEGORY</option>
           <option value="1">UG</option>
           <option value="2">PG</option>
         </select>

                            @error("search")
                            <p style="color:red">{{$errors->first("search")}}</p>
                            @enderror
                </div>
               
              <div class="col-md-6">
                   <button type="submit" style="margin-top:33px;" class="btn btn-primary">Search</button>
                   <a href="{{route('fetchprogramme')}}"  style="margin-top:33px;"  class="btn btn-success">Vew all course</a>
              </div>
              
            

              
            
              </form><!-- End Multi Columns Form -->

                </div>
             
        </div>
        @if($pgmdetails->isNotEmpty())
            <!-- Reports -->
            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PROGRAMME LIST</h5>

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">

                @foreach($pgmdetails as $programmelist)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$programmelist->id}}" aria-expanded="false" aria-controls="flush-{{$programmelist->id}}">
                     {{$programmelist->pname}}
                    </button>
                  </h2>
                  <div id="flush-{{$programmelist->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-striped">
                        <tr>
                          <th>Code</th>
                          <td>{{$programmelist->pcode}}</td>
                        </tr>
                           <tr>
                          <th>Duration</th>
                          <td>{{$programmelist-> pduration}}</td>
                        </tr>
                           <tr>
                          <th>Eligilibity</th>
                          <td>{{$programmelist->peligibility}}</td>
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