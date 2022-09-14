<!DOCTYPE html>
<html>

<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-6 offset-3">
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

                <h3 align=center>PERSONAL INFORMATION</h3>
                <form action="{{ route('Candidate.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{ Auth::user()->name }}" class="form-control" readonly name="name"
                            id="name">
                    </div>

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="age" id="age">
                    </div>


                    {{-- <div class="form-group">
                <label>Age</label>
                <input type="number" min="18" class="form-control" name="age" id="age">
            </div> --}}

                    <div class="form-group">
                        <label>Gender</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="male" id="male" name="gender">
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="female" id="female" name="gender">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="other" id="other" name="gender">
                            <label class="custom-control-label" for="other">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input value="{{ Auth::user()->email }}" type="text" readonly class="form-control"
                            name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Applying Post</label>
                        <select class="form-control" id="post" name="post" placeholder="select">
                             <option value="" disabled selected hidden>select </option>
                            <option>Registrar</option>
                            <option>Finance Officer</option>

                        </select>
                    </div>
                    <input type="submit" name="submit" value="Proceed" class="btn btn-dark">

                </form>
            </div>
        </div>
    </div>
</body>

</html>
