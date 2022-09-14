@extends('admin.layouts.Master')
@section('body')

<head>
    <title>SGOU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     
</head>



<body>

            
<div class="container">

  <ul class="nav nav-pills nav-justify">
   @guest
    
                        <li class="nav-item">
                            <a  class="nav-link" href="https://sgou.ac.in/wp-content/uploads/sgou_notification_registrar_fo.pdf"><font size="5"> View notification for the post of Registrar and Finance Officer here<font></a>
                        </li>
                        </ul>
                @endguest
    <ul class="nav nav-pills nav-justify">
    @guest
    
                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('login') }}"><font size="5"> Login <font></a>
                        </li>
                        </ul>
                @endguest
                <ul class="nav nav-pills nav-justify">
    
   
                        <ul class="nav nav-pills nav-justify">
    
    @guest

                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('signup') }}"> New Registration</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adminLogout') }}"><font size="5">Logout<font></a>
                        </li>
                    @endguest
  </ul>
       
  </div>
    </div>
    </div>

</body>
@include('admin.includes.msgbox')
@endsection
</html>
