@extends('admin.layouts.Master')
@section('body')
    
        <div class="col-md-6 offset-3">

            <div class="card">
                <h3 class="card-header text-center"> ENQUIRY/COMPLAINT REGISTRATION</h3>
                <div class="card-body">


                    @include('admin.includes.msgbox')
                    <form action="{{ route('postSignUp') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                        <label>Name</label>
                            <input type="text"  id="name" class="form-control" name="name" required
                                autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                        <label>Email</label>
                            <input type="text" id="email_address" class="form-control" name="email"
                                required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group mb-3">
                        <label>Phone No. </label>
                            <input type="text"  id="phone" class="form-control"
                                name="phone" required>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                        <label>Category </label>
                        <select class="form-control" id="category" name="category"  required>
                            <option value="" disabled selected hidden>- </option>
                            <option  value="Query">Query</option>
                            <option  value="Grievance">Grievance</option>
                            
                            </select>
                            </div>
                         <div class="form-group">
                         <label>Query type</label>
                         <select class="form-control" id="query_type" name="query_type"  required>
                            <option value="" disabled selected hidden>- </option>
                            <option  value="Academic">Academic</option>
                            <option  value="Non-Academic">Non-Academic</option>
                            </select>
                            </div>
                        <div class="form-group">
                        <label>Query </label>
                        <textarea class="form-control" name="" id="" rows="4" required></textarea>
                    </div>
                    
                      <div class="col-md-12">
                     <div class="form-group">
                     <input type="file" name="files[]" placeholder="Choose files" multiple="true" >
                      </div>
                      @error('files')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                      </div>
              
                        <div class="col-md-12 offset-md-4" center>
                            <button type="submit" class="btn btn-info" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
@endsection
