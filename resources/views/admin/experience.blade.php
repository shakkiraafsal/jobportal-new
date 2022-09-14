<!DOCTYPE html>
<html>

<head>
    <title>Experience Information</title>
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

        <h3 align=center>EXPERIENCE & SPECIALISATION</h3>
        <br>
        <br>
        <form action="{{ route('Experience.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped product-table">
                    <thead>
                        <tr>
                            <th class="text-center">From Date</th>
                            <th class="text-center">To Date</th>
                            <th class="text-center">Duration(No. of Years)</th>
                            <th class="text-center">Employer Name/Address</th>
                           
                            <th class="text-center">Designation</th>
                            <th class="text-center">Specialisation</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate" id="fromdate">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate" id="todate">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration" id="duration">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="empname" id="empname" rows="4"></textarea>
                            </div>
                        </td>
                       
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig" id="desig">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="specialisation" id="specialisation" rows="4"></textarea>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate1" id="fromdate1">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate1" id="todate1">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration1" id="duration1">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="empname1" id="empname1" rows="4"></textarea>
                            </div>
                        </td>
                       
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig1" id="desig1">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="specialisation1" id="specialisation1" rows="4"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate2" id="fromdate2">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate2" id="todate2">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration2" id="duration2">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="empname2" id="empname2" rows="4"></textarea>
                            </div>
                        </td>
                       
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig2" id="desig2">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="specialisation2" id="specialisation2" rows="4"></textarea>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="fromdate3" id="fromdate3">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <input type="date" class="form-control" name="todate3" id="todate3">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration3" id="duration3">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="empname3" id="empname3" rows="4"></textarea>
                            </div>
                        </td>
                       
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="desig3" id="desig3">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control" name="specialisation3" id="specialisation3" rows="4"></textarea>
                            </div>
                        </td>
                    </tr>
                </table>

                <input type="submit" name="submit" value="Submit" class="btn btn-dark">

        </form>




    </div>
</body>

</html>
