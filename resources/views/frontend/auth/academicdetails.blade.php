 @section("title","SGOU|ACADEMIC PROFILE")
@extends("frontendlayouts.theme")
  @section("maincontent")


   <section class="section">
        <div class="container">
        
        <div class="row justify-content-center">
         
            <div class="col-12">
           
              <div class="card mb-3" id="cardlogin">
<div class="card">
<div class="card-body">

              <h5 class="card-title" style="text-align: center;">ACADEMIC PROFILE</h5>
 
              <!-- Multi Columns Form -->
             

               <form class="row g-3" method="POST" action="{{route('Academic.store')}}" enctype="multipart/form-data" autocomplete="off">
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
                <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Examination Passed</th>
                            <th class="text-center">Specialization</th>
                            {{--<th class="text-center">Institution</th>--}}
                            <th class="text-center">Board/University</th>
                            <th class="text-center">Year of Passing</th>
                            
                        </tr>
                    </thead>
                   
                    <tr>
                        <td>
                            <div class="form-group">                               
                                <input type="text" class="form-control" name="pg" id="pg" placeholder="PG eg.MSc,MA" value="{{old('pg')}}">                                
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pgsubject" id="pgsubject" value="{{old('pgsubject')}}">                                
                            </div>
                        </td>
                       

                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pgboard" id="pgboard" value="{{old('pgboard')}}">
                            </div>
                        </td>

                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="pgyear" id="pgyear" value="{{old('pgyear')}}">
                            </div>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ug" id="ug" placeholder="UG eg.BSc,BA" value="{{old('ug')}}">                               
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="ugsubject" id="ugsubject" value="{{old('ugsubject')}}">                                
                            </div>
                        </td>
                       
                        <td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="ugboard" id="ugboard" value="{{old('ugboard')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="ugyear" id="ugyear" value="{{old('ugyear')}}">
                            </div>
                        </td>
                     
                    </tr>
                      <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" placeholder="Others" class="form-control" name="others"
                                    id="others" value="{{old('others')}}">

                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}">
                            </div>
                        </td>
                        
                        <td>

                            <div class="form-group">

                                <input type="text" class="form-control" name="board" id="board" value="{{old('board')}}">
                            </div>
                        </td>
                        <td>

                            <div class="form-group">

                                <input type="integer" class="form-control" name="year" id="year" value="{{old('year')}}">
                            </div>
                        </td>
                        
                    </tr>
                    
                </table>


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