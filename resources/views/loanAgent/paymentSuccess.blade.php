@extends('layouts.selfapply')
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
                            <i class="far fa-check-circle display-2 color--green-300"></i>
                        </div>
                        <div class="text-center mb-20">
                            <h4 class="fw-bolder text-white mb-15">Congratulations!!! <br> Payment Successful</h4>
                            <p class="color--grey">Your payment has been successfully processed.
                                You can now access your approved offers.</p>

                        </div>
                        <div class="text-center mb-20">
                            <div class="row gy-2 gx-2">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-3 p-2 bg--blue-300 border border-secondary h-100">
                                        <p class="fw-bold mb-2 text-white">Customer Portal</p>
                                        <p class="color--grey fa-sm">Login to track your application</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-3 p-2 bg--blue-300 border border-secondary h-100">
                                        <p class="fw-bold mb-2 text-white">Agent call</p>
                                        <p class="color--grey fa-sm">Within 24 hours</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="rounded-3 p-2 bg--blue-300 border border-secondary h-100">
                                        <p class="fw-bold mb-2 text-white">Documents</p>
                                        <p class="color--grey fa-sm">Upload them online</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('customer.authenticate2') }}"
                                class="btn btn-xs r-100 btn--theme hover--tra-black px-3 py-3">Access Pre-Approved
                                Offers!</a>
                        </div>
                        <div class="mt-3 text-center"> <a class="color--white">Start
                                a new application <span class="fbox-ico ico-10"> <span
                                        class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection