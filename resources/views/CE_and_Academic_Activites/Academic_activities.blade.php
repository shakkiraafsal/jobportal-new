@extends('admin.layouts.Master')
@section('body')
    <div class="col-sm-6 offset-3">

        <div class="card">
            <h3 class="card-header text-center">LOGIN</h3>
            <div class="card-body">

                @include('admin.includes.msgbox')
                <form method="POST" action="{{ route('postAcademic') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" placeholder="Enrollment Number" id="enrollmentnumber" class="form-control" name="enrollmentnumber" autofocus>
                        @if ($errors->has('enrollmentnumber'))
                            <span class="text-danger">{{ $errors->first('enrollmentnumber') }}</span>
                        @endif
                    </div>                   
                    <div class="d-grid mx-auto col-md-4">
                        <button type="submit" class="btn btn-info btn-block">Track</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
