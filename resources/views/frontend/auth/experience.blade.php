 @section("title","SGOU|EXPERIENCE PROFILE")
@extends("frontendlayouts.theme")
  @section("maincontent")


   <section class="section">
        <div class="container">
        
        <div class="row justify-content-center">
         
            <div class="col-12">
           
              <div class="card mb-3" id="cardlogin">
<div class="card">
<div class="card-body">

              <h5 class="card-title" style="text-align: center;">EXPERIENCE & SPECIALISATION</h5>
 
              <!-- Multi Columns Form -->
             

               <form class="row g-3" method="POST" action="{{route('Experience.store')}}" enctype="multipart/form-data" autocomplete="off">
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
                <table class="table table-hover table-bordered table-striped product-table">
                    <thead>
                        <tr>
                            <th class="text-center">From Date</th>
                            <th class="text-center">To Date</th>
                            <th class="text-center">Duration(No. of Years)</th>
                            <th class="text-center">Employer Name</th>
                           
                            <th class="text-center">Designation</th>
                          
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate" id="fromdate" value="{{old('fromdate')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate" id="todate" value="{{old('todate')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration" id="duration" value="{{old('duration')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                            
                                <input type="text" class="form-control" name="empname" id="empname" value="{{old('empname')}}">
                            </div>
                        </td>
                       
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig" id="desig" value="{{old('desig')}}">
                            </div>
                        </td>
                       
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate1" id="fromdate1" value="{{old('fromdate1')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate1" id="todate1" value="{{old('todate1')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration1" id="duration1" value="{{old('duration1')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                              
                                <input type="text" class="form-control" name="empname1" id="empname1" value="{{old('empname1')}}" >
                            </div>
                        </td>
                       
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig1" id="desig1" value="{{old('desig1')}}">
                            </div>
                        </td>
                      
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate2" id="fromdate2" value="{{old('fromdate2')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate2" id="todate2" value="{{old('todate2')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration2" id="duration2" value="{{old('duration2')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="empname2" id="empname2" value="{{old('empname2')}}" >
                            </div>
                        </td>
                       
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig2" id="desig2" value="{{old('desig2')}}">
                            </div>
                        </td>
                        
                       
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate3" id="fromdate3" value="{{old('fromdate3')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate3" id="todate3" value="{{old('todate3')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration3" id="duration3" value="{{old('duration3')}}">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                               
                                <input type="text" class="form-control" name="empname3" id="empname3" value="{{old('empname3')}}" >
                            </div>
                        </td>
                       
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig3" id="desig3" value="{{old('desig3')}}">
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