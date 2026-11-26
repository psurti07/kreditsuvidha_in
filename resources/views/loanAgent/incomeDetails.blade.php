@extends('layouts.selfapply')
@push('css')
{{-- write or link your css file and styles tag here --}}
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
    .accordion-button {
        background-color: #f8f8fb !important;
    }

    .accordion-button:focus {
        box-shadow: none !important;
    }

    .contact-form .form-select {
        margin-bottom: 0px !important;
    }

    @media screen and (max-width: 767px) {
        .hero-section {
            padding-top: 10px !important;
        }
    }

    .input-group-text {
        color: #666;
        border: none;
        background-color: #f5f6f8;
        line-height: 1.3;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }
</style>
@endpush
@section('content')
<!-- main section starts -->

<section
    class="bg--white-100 bg--fixed pb-80 personal-details-form d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-md-6 col-lg-6 align-items-center m-auto self-apply-form">
                <div id="hero-8-form" class="r-16 p-0 details-form card-right bg-white">
               <div class="bg--blue-500 details-form-wrap p-3">
                        <div class="loan-progress-section">
                            <div class="loan-progress-header">
                                <span class="progress-step-count">STEP 2 OF 6</span>
                                <span class="progress-percentage">33% complete</span>
                            </div>
                            <div class="loan-progress-bar">
                                <div class="loan-progress-fill" style="width: 33.33%;"></div>
                            </div>

                            <div class="loan-progress-steps">
                                <div class="progress-step completed">
                                    <span>Verify OTP</span>
                                </div>

                                <div class="progress-step active">
                                    <span>Personal</span>
                                </div>

                                <div class="progress-step">
                                    <span>Profile</span>
                                </div>

                                <div class="progress-step">
                                    <span>Offers</span>
                                </div>

                                <div class="progress-step">
                                    <span>Hire agent</span>
                                </div>

                                <div class="progress-step">
                                    <span>Done</span>
                                </div>
                            </div>
                        </div>

                        <div class="process-card-header d-flex align-items-start justify-content-between mb-20 mt-20">
                            <span class="process-check bg--blue-300 m-auto">
                                <i class="fas fa-user-alt color--green-500"></i>
                            </span>
                        </div>
                        <div class="text-center pt-0 pb-30">
                            <h4 class="fw-bolder s-25 mb-0 color--white">Personal details</h4>
                            <p class="mb-0 s-14 color--white">Tell us a little about you to check available lenders</p>
                        </div>
                    </div>

                    <form method="post" action="{{ route('loan.agent.loan.details.store') }}"
                        class="request-form save-form-3 needs-validation pt-0 px-3 pb-3" novalidate>
                        <input type="hidden" id="loanAmount" value="500000" name="loan_amount">
                        <div class="row">
                            <!-- <div class="col-md-12 range">
                                <div class="range__value form-group-range">
                                    <div class="form-group-range">
                                        <label class="flex-display align-items-center">Select Loan Amount :</label>
                                        <span class="ml-20"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="range mt-2">
                                <div class="form-group range__slider">
                                    <input type="range" step="10000">
                                    <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                </div>
                            </div> -->
                            <!-- <div class="col-md-12 mt-4 mb-2 contact-form">
                                    <select class="form-select subject valid" aria-label="Default select example" aria-invalid="false" name="monthly_income">
                                        <option value="">Monthly Income (&#8377;)</option>
                                        <option value="0-15000">&#8377; 0 - 15,000</option>
                                        <option value="15000-30000">&#8377; 15,000 - 30,000</option>
                                        <option value="30000-45000">&#8377; 30,000 - 45,000</option>
                                        <option value="45000-55000">&#8377; 45,000 - 55,000</option>
                                        <option value="55000-70000">&#8377; 55,000 - 70,000</option>
                                        <option value="70000-85000">&#8377; 70,000 - 85,000</option>
                                        <option value="85000-100000">&#8377; 85,000 - 1,00,000</option>
                                        <option value="100000">&#8377; 1,00,000 +</option>
                                    </select>

                                </div> -->

                            <div class="col-md-12 mt-4 mb-2">
                                <label for="form_mobile"
                                    class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">Enter Monthly Income</label>
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                    </div> -->
                                    <input type="text" name="monthly_income" id="monthly_income"
                                        class="numeric-input form-control mb-2"
                                        placeholder="Enter Monthly Income (&#8377;)" autocomplete="off"
                                        inputmode="numeric">
                                </div>
                                @component('components.ajax-error',['field'=>'monthly_income'])@endcomponent
                            </div>

                            <div class="col-md-12 mb-2">
                                <label for="form_mobile"
                                    class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">Enter Current Emi (If Any)</label>
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                    </div> -->
                                    <input type="text" name="current_emi" id="current_emi" value=""
                                        class="numeric-input form-control mb-2"
                                        placeholder="Enter Current EMI (&#8377;) (If Any)" autocomplete="off"
                                        inputmode="numeric">
                                </div>
                            </div>
                            <div class="col-md-12 form-btn">
                                <button type="submit" class="btn btn--theme hover--tra-black submit processNowBtn"
                                    id="processNowBtn"
                                    onclick="_tfa.push({notify: 'event', name: 'hire_lead', id: 1776413})">Process
                                    Now <span class="fbox-ico ico-10"> <span class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 gr--smoke">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="form-holder">
                    <div class="contact-form-notice">
                        <p class="s-14">
                            Range of Loan tenure is up to 72 months with Annual Interest Rates ranging between 11% - 36%
                            and the processing fee up to 2%. For Example: Taking in consideration a personal loan of
                            Rs.1,00,000 availed at 11%* interest rate for a tenure of 6* years with 2%* processing fee,
                            the APR will be 11.75%*. *T&C Apply. All these numbers are tentative/indicative, the final
                            loan specifics may vary depending upon the customer profile and NBFCs’ criteria, rules &
                            regulations, and terms &amp; conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('.save-form-3').submit(function(event) {
            var status = document.activeElement.innerHTML;
            event.preventDefault();
            if (status) {
                $('.ajax-error').html('');
                var data = new FormData(this);
                $.ajax({
                    url: $(this).attr("action"),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('#processNowBtn').html(
                            '<span class="spinner-border spinner-border-sm"></span> Process Now'
                        );
                        $('#processNowBtn').attr('disabled', true);
                    },
                    success: function(result) {
                        $(this).attr("disabled", false);
                        if (result.type === 'SUCCESS') {
                            window.location.href = `{{ route('loan.agent.personal.details') }}`;
                        } else {
                            toastr.error(result.message);
                            $('#processNowBtn').html('Process Now');
                            $('#processNowBtn').attr('disabled', false);
                        }
                    },
                    error: function(error) {
                        $(this).attr("disabled", false);
                        let errors = error.responseJSON.errors,
                            errorsHtml = '';
                        $.each(errors, function(key, value) {
                            errorsHtml = '<strong>' + value[0] + '</strong>';
                            $('.' + key).html(errorsHtml);
                        });
                        $('#processNowBtn').html('Process Now');
                        $('#processNowBtn').attr('disabled', false);
                    }
                });
            }
        });
    })
</script>
@endpush