 @section("title","SGOU|PERSONAL PROFILE")
@extends("frontendlayouts.theme")
  @section("maincontent")


   <section class="section">
        <div class="container">
        
        <div class="row justify-content-center">
         
            <div class="col-12">
           
              <div class="card mb-3" id="cardlogin">
<div class="card">
<div class="card-body">

              <h5 class="card-title" style="text-align: center;">PERSONAL PROFILE</h5>
 
              <!-- Multi Columns Form -->
             

               <form   class="row g-3" method="POST" action="{{ route('Candidate.store')}}" enctype="multipart/form-data" autocomplete="off">
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
                     <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                  <label for="inputName5" class="form-label">Full Name</label>
                  
                 
                        <input type="text" value="{{ Auth::user()->name }}" class="form-control" readonly name="name"
                            id="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                </div>
                   <div class="col-md-4">
                  <label for="inputName5" class="form-label">Date of Birth</label>
                  
                   <input type="date" class="form-control" name="age" id="age">
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                </div>
                <div class="col-md-4">
                <label for="inputName5" class="form-label">Gender</label>
                  
                <select class="form-control" name="gender">
                    <option value="" disabled selected hidden>SELECT GENDER</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                </div>

                 
            
              <div class="col-md-4">
                <label class="form-label">Phone</label>
                 <input type="text" class="form-control" name="phone" id="phone">

                  @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                  
              </div>
                  
               

                    <div class="col-md-4">
                        <label class="form-label">Email</label>
                        <input value="{{ Auth::user()->email }}" type="text" readonly class="form-control"
                            name="email" id="email">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Applying Post</label>
                        <select class="form-control" id="post" name="post" placeholder="select">
                             <option value="" disabled selected hidden>SELECT POST </option>
                            <option value="Assistant" >Assistant</option>
                            <option value="Computer Assistant/Data Entry Operator">Computer Assistant/Data Entry Operator</option>

                        </select>
                          @if ($errors->has('post'))
                                <span class="text-danger">{{ $errors->first('post') }}</span>
                            @endif
                    </div>
                 
   <div class="col-md-12">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address" ></textarea>

                         @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
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