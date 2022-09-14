<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/public/css/responsive.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('super_admin_assets/js/custom.js') }}"></script>

</head>

<body class="bg-image">

    <div class="header">
        <div class="jumbotron clearfix">
            <div class="logo-div">
                <img class="logo-3" src="{{ asset('assets/public/images/logo-2.jpeg') }}" alt="">
            </div>
            <div class="title-div" align="center">
                 Sreenarayana Guru Open University Helpdesk
             </div>
        </div>
    </div>
    
    

    <div class="container">
        
            @yield('body')
        
    </div>
</body>

</html>
