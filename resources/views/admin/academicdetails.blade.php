<!DOCTYPE html>
<html>

<head>
    <title>Academic Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3 mb-3">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <h3 align=center>ACADEMIC INFORMATION</h3>
        <br>
        <br>
        
        <form action="{{ route('Academic.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Examination Passed</th>
                            <th class="text-center">Specialization</th>
                            {{--<th class="text-center">Institution</th>--}}
                            <th class="text-center">Board/University</th>
                            <th class="text-center">Year of Passing</th>
                            <th class="text-center">CGPA/Percentage</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <div class="form-group">                               
                                <input type="text" class="form-control" name="phd" id="phd" placeholder="Phd">                                
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                            
                                <input type="text" class="form-control" name="phdsubject" id="phdsubject">                                
                          
                                                               
                            </div>
                        </td>
                        
                        </td>

                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phdboard" id="phdboard">
                            </div>
                        </td>

                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="phdyear" id="phdyear">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">                               
                                <input type="text" class="form-control" name="pg" id="pg" placeholder="PG eg.MSc,MA">                                
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pgsubject" id="pgsubject">                                
                            </div>
                        </td>
                        {{--<td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="pginstitute" id="pginstitute">
                            </div>
                        </td>--}}

                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pgboard" id="pgboard">
                            </div>
                        </td>

                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="pgyear" id="pgyear">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="pgpercent" id="pgpercent">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ug" id="ug" placeholder="UG eg.BSc,BA">                               
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="ugsubject" id="ugsubject">                                
                            </div>
                        </td>
                        {{--<td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="uginstitute" id="uginstitute">
                            </div>
                        </td>--}}
                        <td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="ugboard" id="ugboard">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="ugyear" id="ugyear">
                            </div>
                        </td>
                      <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="ugpercent" id="ugpercent">
                            </div>
                        </td>
                    </tr>
                      <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" placeholder="Others" class="form-control" name="others"
                                    id="others">

                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject">
                            </div>
                        </td>
                        {{--<td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="institute" id="institute">
                            </div>
                        </td>--}}
                        <td>

                            <div class="form-group">

                                <input type="text" class="form-control" name="board" id="board">
                            </div>
                        </td>
                        <td>

                            <div class="form-group">

                                <input type="integer" class="form-control" name="year" id="year">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="percent" id="percent">
                            </div>
                        </td>
                    </tr>
                    {{--<tr>
                        <td>
                            <div class="form-group">
                                <input type="text" placeholder="tenth" class="form-control" name="tenth" id="tenth">

                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tsubject" id="tsubject">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="text" class="form-control" name="tinstitute" id="tinstitute">
                            </div>
                        </td>
                        <td>

                            <div class="form-group">

                                <input type="text" class="form-control" name="tboard" id="tboard">
                            </div>
                        </td>
                        <td>


                            <div class="form-group">

                                <input type="integer" class="form-control" name="tyear" id="tyear">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="integer" class="form-control" name="tpercent" id="tpercent">
                            </div>
                        </td>
                    </tr>--}}
                </table>

                <input type="submit" name="submit" value="Proceed" class="btn btn-dark">

        </form>




    </div>
</body>

</html>
