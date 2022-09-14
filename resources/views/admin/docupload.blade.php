<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>DOCUMENT UPLOAD</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        
          <h3 class="text-center mb-5">DOCUMENT UPLOAD</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <div class="card">


<div class="card-body">
    Upload your files 
    <form name="files-upload" method="POST"  action="{{ route('File.store') }}" accept-charset="utf-8" enctype="multipart/form-data">

      @csrf
              
        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <input type="file" name="files[]" placeholder="Choose files" multiple="true" >
                </div>
                @error('files')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
        </div>     
    </form>
       </script>
     
    </div>
    </div>
</body>
</html> 
