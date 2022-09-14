@extends('admin.layouts.Master')
@section('body')
    <div class="col-sm-6 offset-3">

        <div class="card">
            <h4 class="card-header text-center">Track Assignment and Project Submissions</h4>
            <div class="card-body">

                @include('admin.includes.msgbox')
                <form method="POST" action="{{ route('postCE') }}">
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
