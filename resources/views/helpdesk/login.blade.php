@extends('admin.layouts.Master')
@section('body')
    <div class="col-sm-6 offset-1">

        <div class="card">
            <h3 class="card-header text-center">LOGIN</h3>
            <div class="card-body">

                @include('admin.includes.msgbox')
                <form method="POST" action="{{ route('postAdminLogin') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                            autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password"
                            required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>                    
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
