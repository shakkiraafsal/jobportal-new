 @section("title","SGOU|LOGIN")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section">
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
                
                  <h5 class="card-title">LOGIN</h5>
              
              </div><!-- End Logo -->
               


         

                     <form method="POST" action="{{ route('postAdminLogin') }}" autocomplete="off" class="row g-3 needs-validation">
                        @csrf
                  
                       @if(Session::has('success'))
    <div class="alert alert-success">
        <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger">
        <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
        {{ Session::get('error') }}
    </div>
@endif
         

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                        
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                            autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-eye-fill"></i></span>
                      <input type="password" placeholder="Password" id="password" class="form-control" name="password"
                            required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                     
                    </div>
</div>
                   
                    <div class="col-12">
                      
                       

                                <button type="submit" class="btn btn-dark btn-block w-100">Login</button>
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
     
 
      </div>
    </section>
    @endsection