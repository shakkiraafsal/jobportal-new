<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .malayalam {
            font-family: 'Gayathri', sans-serif;
        }

        .image {
            display: inline;
            margin: 0 auto;
            width: 60px;
            height: auto;

        }

        .image-div {
            text-align: center;
            padding-top: 20px;
        }

        .watermark {
            position: fixed;

            width: 40%;
            top: 30%;
            right: 30%;
            text-align: center;
            opacity: .2;

            z-index: -1000;
        }

        .card {

            margin: 0 auto;
            border: 2px solid #000;
            padding: 0 20px;
            /* background: linear-gradient(rgba(255, 255, 255, 0.9),
                    rgba(255, 255, 255, 0.9)),
                url("{{ public_path('logo-2.png') }} ");
            background-position: center;
            background-repeat: no-repeat; */
            /* background-size: 30% auto; */


        }

        @page {
            size: A4;
        }


        .table3 {
            table-layout: fixed;
        }

        .table2 {
            border-top: 1px solid rgb(48, 47, 47);
            border-left: 1px solid rgb(48, 47, 47);
            width: 100%;
            table-layout: fixed;
            border-spacing: 0;


        }

        .table {
            padding: 7px 2px;
        }

        .table2.a td,
        th {
            padding: 5px 2px;
            border-bottom: 1px solid #000;
            border-right: 1px solid #000;
            
        }

        .candidate-sid {
            padding-right: 100px;
        }

        .candidate-inv {
            float: right;
        }


        .footer {
            margin-top: 60px;
        }

        .seal {

            width: 80px;
            height: auto;
            padding: 10px 20px;
        }

        .sign {

            width: 80px;
            height: auto;
            padding-top: 5px;
            padding-right: 40px;

        }

        .grade {

            display: inline;
            margin: 0 auto;
            width: 750px;
            height: auto;
            padding-top: 5px;
            padding: 20px;


        }

        .table-head th {
            text-align: left;
        }

        td {
            height: 18px;
        }

        .table-head td {
            padding-left: 10px;
        }

        th {
            text-align: left;
        }

        .center {
            text-align: center
        }

        .margin-b-t-10 {
            margin: 10px 0;
        }
    </style>
</head>

<body>



    <div class="card">
        <div class="card-body">

            {{-- <img class="watermark" src="{{ public_path('assets/public/images/logo-2.png') }}" alt="">
            <div class="image-div ">
                <img class="image" src="{{ public_path('assets/public/images/logo-2.png') }}" alt="" align="center">
                <img class="image" src="{{ asset('assets/public/images/logo-2.png') }}" alt="" align="center">
            </div> --}}
            <h2 align="center">
                <font color="#911d1d">SREENARAYANAGURU OPEN UNIVERSITY</font>
            </h2>
            {{-- <h5 align="center">(The University for education,training and research in blended format)<br>
                University Building, Kureepuzha, Kollam, Kerala-691601<br>
                www.sgou.ac.in
            </h5> --}}

            <h3 align="center">
                <font color="#911d1d">Application Form</font>
            </h3>

            <h5 class="footer">
                <span class="candidate-sid">Application id : {{ $file->application_id }}</span>

            </h5>

            <h4 class="margin-b-t-10">PERSONAL INFORMATION</h4>


            <table class="table2 a">

                <tr>
                    <th class="center" style="width: 25%">Name</th>
                    <th class="center" style="width: 5% ">Age</th>
                   
                    <th class="center" style="width: 15%">Phone</th>
                    >
                    <th class="center" style="width: 30%">E-mail</th>
                    <th class="center" style="width: 13%">Applying <br>Post</th>
                </tr>
                <tr>
                    <td class="center" style="width: 25%">{{ $candidate->name }}</td>

                    <td style="width: 5% ">{{ $age }}</td>
                   

                    <td class="center" style="width: 15%">{{ $candidate['phone'] }}</td>
                   
                    <td class="center" style="width: 30%">{{ $candidate['email'] }}</td>
                    <td class="center" style="width: 13%">{{ $candidate['post'] }}</td>


                </tr>

            </table>
            <h4 class="margin-b-t-10">ACADEMIC INFORMATION</h4>

            <table class="table2 a">

                <tr>
                    <th class="center" style="width: 25%">Examination Passed</th>
                    <th class="center" style="width: 35% ">Specialization</th>
                    <th class="center" style="width: 35% ">Board or<br>University</th>
                    <th class="center" style="width: 13%">Year of Passing<< /th>
                   

                </tr>
                
                <tr>
                    <td class="center" style="width: 25%">{{ $academic['pg'] }}</td>

                    <td  class="center"style="width: 35% ">{{ $academic['pgsubject'] }}</td>
                    <td class="center" style="width: 35% ">{{ $academic['pgboard'] }}</td>

                    <td class="center" style="width: 15%">{{ $academic['pgyear'] }}</td>
                 

                </tr>
                <tr>
                    <td class="center" style="width: 25%">{{ $academic['ug'] }}</td>

                    <td  class="center"style="width: 35% ">{{ $academic['ugsubject'] }}</td>
                    <td class="center" style="width: 35% ">{{ $academic['ugboard'] }}</td>

                    <td class="center" style="width: 15%">{{ $academic['ugyear'] }}</td>
                  

                </tr>
                <tr>
                    <td class="center" style="width: 25%">{{ $academic['others'] }}</td>

                    <td class="center" style="width: 35% ">{{ $academic['subject'] }}</td>
                    <td class="center" style="width: 35% ">{{ $academic['board'] }}</td>

                    <td class="center" style="width: 15%">{{ $academic['year'] }}</td>
                   

                </tr>

            </table>

            <h4 class="margin-b-t-10">EXPERIENCE AND SPECIALISATION</h4>

            <table class="table2 a">

                <tr>
                    <th class="center" style="width: 10%">Duration<br>(Years)</th>
                    <th class="center" style="width: 50%">Employer Name </th>
                    <th class="center" style="width: 20%"> Designation</th>
                 


                </tr>

                <tr>
                    <td class="center" style="width: 10%">{{ $exp['duration'] }}</td>

                    <td  class="center"style="width: 50% ">{{ $exp['empname'] }}</td>
                    <td class="center" style="width: 15% ">{{ $exp['desig'] }}</td>
                   
                </tr>
                <tr>
                    <td class="center" style="width: 10%">{{ $exp['duration1'] }}</td>

                    <td  class="center"style="width: 50% ">{{ $exp['empname1'] }}</td>
                    <td class="center" style="width: 15% ">{{ $exp['desig1'] }}</td>
                   

                </tr>
                <tr>
                    <td class="center" style="width: 10%">{{ $exp['duration2'] }}</td>

                    <td class="center" style="width: 50% ">{{ $exp['empname2'] }}</td>
                    <td class="center" style="width: 15% ">{{ $exp['desig2'] }}</td>
                   


                </tr>
                <tr>
                    <td class="center" style="width: 10%">{{ $exp['duration3'] }}</td>

                    <td  class="center"style="width: 50% ">{{ $exp['empname3'] }}</td>
                    <td class="center" style="width: 15% ">{{ $exp['desig3'] }}</td>
                   

                </tr>

            </table>
            <br>
            <div>
                I certify that the information given above is correct to the best of my knowledge and belief.
                <h5 class="footer">
                <span class="candidate-inv">{{ $candidate->name }}</span>

            </h5>

            </div>

            <br>
            <br>
        </div>
    </div>
</body>


</html>
