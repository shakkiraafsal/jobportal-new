 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")


   <section class="section">
        <div class="container">
        
        <div class="row justify-content-center">
         
            <div class="col-12">
           
              <div class="card mb-3" id="cardlogin">
<div class="card">
<div class="card-body">

              <h5 class="card-title" style="text-align: center;">USER REGISTRATION</h5>
 
              <!-- Multi Columns Form -->
             

               <form   class="row g-3" method="POST" action="{{route('postSignUp')}}"  autocomplete="off">
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
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Full Name</label>
                  
                 <input type="text"  id="name" class="form-control" name="name" required
                                autofocus value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                </div>
                   <div class="col-md-4">
                  <label for="inputName5" class="form-label">Email</label>
                  
                  <input type="text" id="email_address" class="form-control" name="email"
                                required autofocus value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Password</label>
                  
                 <input type="password" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                </div>

                 
            
              
                  
                
                 

                <div class="text-center">
                  <button type="submit" id="continue" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
                

              
            </div>
          </div>
        </div>

      </section>
    @endsection