@extends('admin.layouts.Master')
@section('body')
    <style>
        .card {

            margin: 0 auto;
            border: 2px solid #000;
            padding: 0 20px;
            /* text-indent: 175px; */
        }
    </style>
    <div class="col-md-6 offset-1">


        <div class="card">
            <div class="card-body">


                <h3 align="center">
                    <span style="color:#911d1d">Payment Form</span>
                </h3>


                <form data-message="Application will be submitted" id="applicationConfirmation"
                    action="{{ route('Payment.store') }}" method="POST">
                    @csrf
                    <div class="row text-center">
                        <div class="col-sm-12 mb-1">
                            <a target="_blank" href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=4344157">
                                Click here to pay ( Application fees: <strong> Rs 5000</strong> )</a>
                        </div>
                        <div class="col-sm-12 mb-1">After completing the payment,enter
                            the payment reference number here and click on Proceed button</div>
                            
                        <div class="col-sm-12 form-group">
                            <label for="" class="float-left">Payment Reference Number</label>
                          <input class="form-control" type="text"
                                name="reference_no">
                        </div>
                       

                        <div class="col-md-12 form-group">
                            <button class="btn btn-primary">Proceed</button>
                        </div>

                </form>

            </div>
        </div>
    </div>
@endsection
