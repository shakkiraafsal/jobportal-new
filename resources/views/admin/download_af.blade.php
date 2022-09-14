@extends('admin.layouts.Master')
@section('body')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="col-sm-8 mb-4">
    
                    <div>
                        <a href="{{ route('getApplicationForm')}}">
                            <button id="new" class="btn btn-success">
                                <i class="fa fa-download"></i>Download Application Form
                            </button>
                        </a>
                    </div>
                    <br/>
                    <div>
                     <form action="{{ route('downloads') }}" method="POST" enctype="multipart/form-data">
            @csrf
               <button id="new" class="btn btn-success"> <i class="fa fa-download"></i>Back
                            </button>
                            </div>

        </form>
                    
    </div>
    </body>
    @endsection
</html>
