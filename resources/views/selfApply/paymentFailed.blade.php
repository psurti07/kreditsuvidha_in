@extends('layouts.selfapply-dark')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<section id="contacts"
    class="bg--white-100 bg--fixed pb-80 personal-details-form d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-12 m-auto">
                <div class="bg--blue-500 r-18">
                    <div class="card-body p-4">
                        <div class="mb-20 text-center">
                            <i class="far fa-times-circle text-danger display-2"></i>
                        </div>
                        <div class="text-center mb-20">
                            <h4 class="fw-bolder text-danger mb-15">Payment Unsuccessful </h4>

                            <p class="color--grey">Your Subscription Plan Payment Was not Successful. </p>
                        </div>



                        <div class="text-center mb-20">
                            <p class="color--grey">Common Reasons for Payment Failure:</p>

                            <div class="row gy-2 gx-2">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-3 p-2 bg--blue-300 border border-secondary h-100">
                                        <p class="fw-bold mb-2 text-white">Card Issue</p>
                                        <p class="mt-0 color--grey">Insufficient balance or card limit exceeded.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-3 p-2 bg--blue-300 border border-secondary h-100">
                                        <p class="fw-bold mb-2 text-white">Network</p>
                                        <p class="mt-0 color--grey">Connection timeout or bank service issue.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-3 p-2 bg--blue-300 border border-secondary h-100">
                                        <p class="fw-bold mb-2 text-white">Cancelled</p>
                                        <p class="mt-0 color--grey">Transaction was cancelled by user.</p>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-20 mb-0 small text-danger">Don't worry! No amount has been deducted from
                                your account.</p>
                        </div>



                        <div class="text-center">
                            <a href="{{ route('self.apply.offer4') }}"
                                class="btn btn-xs r-100 btn--theme hover--tra-black px-3 py-3">Try another payment
                                method</a>

                            <p class="text-center mt-20 color--grey">If you've any queries/ issues, kindly raise a request here:
                                <a href="{{ route('front.raise.request') }}" class="text-success">Click Here</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection