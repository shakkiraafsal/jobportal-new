 @section("title","SGOU|DOCUMENT UPLOAD")
@extends("frontendlayouts.theme")
  @section("maincontent")


   <section class="section">
        <div class="container">
        
        <div class="row justify-content-center">
         
            <div class="col-12">
           
              <div class="card mb-3" id="cardlogin">
<div class="card">
<div class="card-body">

              <h5 class="card-title" style="text-align: center;">DOCUMENT UPLOAD</h5>
 
              <!-- Multi Columns Form -->
             

               <form class="row g-3" method="POST" action="{{route('File.store')}}" enctype="multipart/form-data" autocomplete="off">
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
               
                    

            <div class="col-md-6">
                 <div class="row">
                <div class="form-group">
                    <input type="file" name="files[]" placeholder="Choose files" multiple="true" class="form-control" >
                </div>
                @error('files')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
</div>
               

                 
                 
  
                <div class="text-center">
                  <button type="submit" id="continue" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
              <div class="col-lg-12">
              <div class="alert alert-secondary alert-dismissible fade show">
             <p style=" text-align: justify;">
              
                <br>
               <marquee  direction="left" scrollamount="3" style="color: blue;"  onmouseover="this.stop();" onmouseout="this.start();" > 
                
                   IF YOU WANT TO UPLOAD MULTIPLE DOCUMENTS , CLICK CTRL + 
                 </marquee>
          
    </p>
</div>

             
            </div><!-- End Reports -->
</div>
            </div>
          </div>
                

              
            </div>
          </div>
        </div>

      </section>
    @endsection