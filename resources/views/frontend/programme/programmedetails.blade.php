
@section("title","SGOU|PROGRAMME")
@extends("frontendlayouts.theme")
@section("maincontent")
<script>
    $(document).ready(function(){
      $("#pgmcategory").change(function(){
        let value = $(this).val();
        $.ajax({url: "{{route('student.ajax-subprogrammes')}}?pgmcategory="+value, success: function(result)
        {
          $("#pgn").html(result);
        }});
      });
    });
</script>
<script type="text/javascript">

    $(document).ready(function(){
      $("#rclist").change(function(){
        let value = $(this).val();
        $.ajax({url: "{{route('student.ajax-lsclist')}}?rclist="+value, success: function(result)
        {
          $("#lsclist").html(result);
        }});
      });
    });
</script>
    <div class="pagetitle">
  
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Create LSC</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             

               <form   class="row g-3" method="POST" action="{{route('student.personaldetails') }}"  autocomplete="off">
                @csrf
              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Programme Category</label>
                  
               <select class="form-control" name="pdpcategory" id="pgmcategory">
                <option value="">SELECT PROGRAMME CATEGORY</option>
                    @foreach($pgmdetails as $pgmdetails)
                          
                           <option value="{{$pgmdetails->id}}" >{{$pgmdetails->pgmcategory}}</option>
                        @endforeach
               </select>

                                 @error("pdpcategory")
                            <p style="color:red">{{$errors->first("pdpcategory")}}</p>
                            @enderror
                </div>
                 
                <div class="col-md-6">
                     <label for="inputName5" class="form-label">Programme Name</label>
             
                 <select class="form-control" name="pdpname" id="pgn">

                     
                           
                 </select>

                            @error("pdpname")
                            <p style="color:red">{{$errors->first("pdpname")}}</p>
                            @enderror
                </div>
              
               
              <div class="col-md-12">
                  <label for="inputName5" class="form-label">Regional Centre</label>
                  
               <select class="form-control" name="pdrclist" id="rclist">
                <option value="">SELECT REGIONAL CENTRE</option>
                    @foreach($rclist as $rcl)
                          
                           <option value="{{$rcl->id}}" >{{$rcl->rcname}}</option>
                        @endforeach
               </select>

                                 @error("pgmcategory")
                            <p style="color:red">{{$errors->first("pgmcategory")}}</p>
                            @enderror
                </div>
    <div class="col-md-12">
          <label for="inputName5" class="form-label">Learning Support Centre</label>
    <TABLE id="dataTable" class="table table-striped">
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD><select class="form-control" name="pdlscopted[]" id="lsclist" >
       
           
       </select>
        @error("lsccourses")
                            <p style="color:red">{{$errors->first("lsccourses")}}</p>
                            @enderror
   </TD>
     
       <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>

      

    </TR>
  </TABLE>
    </div>
            <div class="text-center">
                  <button type="submit" id="continue" class="btn btn-success">Save and Continue</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>

          

          

        </div>
      </div>
      <script type="text/javascript">
          function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>
    </section>
    @endsection