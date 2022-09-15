 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">

           
        


            <!-- Customers Card -->
            <div class="col-md-4" style="margin: 0 auto;">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">USER <span>| DOWNLOAD APPLICATION</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/assets//img/download.png')}}" width="50" height="50">
                    </div>
                    <div class="ps-3">
                      <a href="{{route('getApplicationForm')}}">Download</a>
                   
                    </div>
                  </div>
                </div>

              </div>
            </div>
       
            <!-- End Revenue Card -->

<div class="col-12">
   @if(Session::has('success'))
    <div class="alert alert-success">
        <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
        {{ Session::get('success') }}
    </div>
@endif
</div>
            <!-- Reports -->
           

            <!-- Recent Sales -->
         

            <!-- Top Selling -->
           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        
      </div>
    </section>
    @endsection