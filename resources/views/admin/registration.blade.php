
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
        
        .card {

            margin: 0 auto;
            border: 2px solid #000;
            padding: 0 20px;
            /* background: linear-gradient(rgba(255, 255, 255, 0.9),
                    rgba(255, 255, 255, 0.9)),
                url("{{ asset('assets/public/images/logo-2.png') }}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 30% auto;
            height: 100vh; */

        }

        

    </style>
</head>

<body>

<body>
<div class="card">
        <div class="card-body">


            <h2 align="center">
                <font color="#911d1d">SREENARAYANAGURU OPEN UNIVERSITY</font>
            </h2>
            <h5 align="center">(The State Open University of Kerala)<br>
                University Building, Kureepuzha, Kollam, Kerala-691601<br>
                www.sreenarayanaguruou.edu.in
                <h2 align="center">
                <font color="#911d1d"></font>
            </h2>
            
<div class="container">

  <ul class="nav nav-pills nav-fill">
    
    <li class="active"><a data-toggle="tab" href="/personaldet">PERSONAL DETAILS</a></li>
    <li><a data-toggle="tab" href="admin/academicdet">ACADEMIC INFORMATION</a></li>
    <li><a data-toggle="tab" href="admin/experience">EXPERIENCE</a></li>
    <li><a data-toggle="tab" href="admin/file">DOCUMENT UPLOAD</a></li>
  </ul>
       
  </div>
        </div>
    </div>
</div>
</div>
</body>
  if ($status) {
            return redirect()->route('Candidate.create');
        }
