@extends('layouts.selfapply-dark')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
    .accordion-button {
        background-color: transparent !important;
    }

    .accordion-button:focus {
        box-shadow: none !important;
    }

    .txt-block h2 {
        margin-bottom: 0px !important;
    }
</style>
@endpush

@section('content')
<section id="contacts"
    class="bg--white-100 bg--fixed pb-80 personal-details-form d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-6 col-12 m-auto">
                <div id="hero-8-form" class="r-16 p-0 details-form card-right bg-white">
                    <form action="{{ route('loan.agent.personal.details.store') }}" id="personalDetailForm"
                        class="contact-form save-form-4" novalidate="novalidate" method="post" accept-charset="utf-8">

                    <div class="bg--blue-500 details-form-wrap p-3">
                            <div class="loan-progress-section">
                                <div class="loan-progress-header">
                                    <span class="progress-step-count">STEP 3 OF 6</span>
                                    <span class="progress-percentage">50% complete</span>
                                </div>
                                <div class="loan-progress-bar">
                                    <div class="loan-progress-fill" style="width: 45%;"></div>
                                </div>

                                <div class="loan-progress-steps">
                                    <div class="progress-step completed">
                                        <span>Verify OTP</span>
                                    </div>

                                    <div class="progress-step completed">
                                        <span>Personal</span>
                                    </div>

                                    <div class="progress-step active">
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
                                <h4 class="fw-bolder s-25 mb-0 color--white">Profile details</h4>
                                <p class="mb-0 s-14 color--grey">Review your profile to unlock pre-approved offers</p>
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-md-12">
                                <div class="form-check ps-0">
                                    <label class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">Type of loan</label>
                                    <div class="row gx-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card" for="personalloan">
                                                    <input type="radio" name="loan_type" id="personalloan" value="1"
                                                        class="radio" checked>
                                                    <span class="plan-details">
                                                        <span class="plan-type color--black">Personal Loan</span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card" for="businessloan">
                                                    <input type="radio" name="loan_type" id="businessloan" value="2"
                                                        class="radio">
                                                    <span class="plan-details">
                                                        <span class="plan-type color--black">Business Loan</span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <div class="form-group form-floating">
                                    <label for="firstname" class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">First Name *</label>
                                    <input id="firstname" name="firstname" type="text"
                                        class="form-control name mb-0 border r-09 pt-0 pb-0" placeholder=""
                                        value="{{ old('firstname') }}">
                                </div>
                                @component('components.ajax-error',['field'=>'firstname'])@endcomponent
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <div class="form-group form-floating">
                                    <label for="lastname"
                                        class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">Last
                                        Name *</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control name mb-0 border r-09 pt-0 pb-0"
                                        placeholder="" value="{{ old('lastname') }}">

                                </div>
                                @component('components.ajax-error',['field'=>'lastname'])@endcomponent
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <div class="form-group form-floating">
                                    <label for="email"
                                        class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">Email
                                        *</label>
                                    <input id="email" name="email" type="email" class="form-control name mb-0 border r-09 pt-0 pb-0"
                                        placeholder="" value="{{ old('email') }}">

                                </div>
                                @component('components.ajax-error',['field'=>'email'])@endcomponent
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <div class="form-group form-floating">
                                    <label for="pincode"
                                        class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">Pincode
                                        *</label>
                                    <input id="pincode" name="pincode" type="text"
                                        class="form-control name numeric-input mb-0 border r-09 pt-0 pb-0" placeholder=""
                                        value="{{ old('pincode') }}" maxlength="6" minlength="6"
                                        inputmode="numeric">

                                </div>
                                @component('components.ajax-error',['field'=>'pincode'])@endcomponent
                            </div>
                            <div id="loader" style="display:none;">
                                Loading...
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <div class="form-group form-floating">
                                    <label for="city"
                                        class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">City
                                        *</label>
                                    <input id="city" name="city" type="text" class="form-control mb-0 border r-09 pt-0 pb-0"
                                        placeholder="" value="{{ old('city') }}">

                                </div>
                                @component('components.ajax-error',['field'=>'city'])@endcomponent
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <div class="form-group form-floating">
                                    <label for="state"
                                        class="position-static p-0 s-14 mb-2 color--blue-500 text-start d-block w-600">State
                                        *</label>
                                    <!--<input id="state" name="state" type="text" class="form-control mb-0" placeholder="" value="{{ old('state') }}">-->
                                    <select id="state" name="state" class="form-control mb-0 border r-09 pt-0 pb-0"
                                        style="font-size:16px!important;">
                                        <option value="">Select State</option>
                                        {!! getStateOption(old('state')) !!}
                                    </select>

                                </div>
                                @component('components.ajax-error',['field'=>'state'])@endcomponent
                            </div>
                                     <p class="mb-0 s-14 text-start text-dark"><input type="checkbox" name="tandc" id="tandc"
                                class="custom-control-input mb-0 me-2" value="1" checked required><small>I agree to the
                                <a href="{{ route('front.terms.conditions') }}" target="_blank"
                                    class="text-dark text-decoration-none">Terms of Use</a> and <a
                                    href="{{ route('front.privacy.policy') }}" class="text-dark text-decoration-none"
                                    target="_blank">Privacy Policy</a></small></p>
                            <div class="text-start mt-10">
                                <button type="submit" class="s-14 btn btn--theme hover--tra-black  submit"
                                    id="submit-btn">Continue <span
                                        class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                            </div>
                            <div class="text-center">

                                <p class="mt-10 s-14">This is a soft check and will not affect your CIBIL score.</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#pancard').on('input', function() {
            $(this).val($(this).val().toUpperCase());
        });
        $('.save-form-4').submit(function(event) {
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
                        $('#submit-btn').html(
                            '<span class="spinner-border spinner-border-sm"></span> Continue'
                        );
                        $('#submit-btn').attr('disabled', true);
                    },
                    success: function(result) {
                        $(this).attr("disabled", false);
                        if (result.type === 'SUCCESS') {
                            window.location.href = `{{ route('loan.agent.get.offers') }}`;
                        } else {
                            toastr.error(result.message);
                            $('#submit-btnsubmit-btn').html('Continue');
                            $('#submit-btn').attr('disabled', false);
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
                        $('#submit-btn').html('Continue');
                        $('#submit-btn').attr('disabled', false);
                    }
                });
            }
        });
        /* get postal data like city and state */
        $('#pincode').on('input', function() {
            var pincode = $(this).val();

            // Only make request if pincode is of 6 digits
            if (pincode.length === 6) {
                $('#loader').show(); // Show loader
                $.ajax({
                    url: `{{ route('loan.agent.postal.details') }}`, // Route to the Laravel controller
                    type: 'POST',
                    data: {
                        pincode: pincode
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // Pass CSRF token
                    },
                    success: function(response) {
                        $('#loader').hide(); // Hide loader
                        if (response.status === 'success') {
                            // Populate District and State fields
                            $('#city').val(response.district);
                            $('#state').val(response.state);
                        } else {
                            alert(response.message);
                            $('#district').val('');
                            $('#state').val('');
                        }
                    },
                    error: function() {
                        $('#loader').hide(); // Hide loader on error
                        alert('An error occurred while fetching the details.');
                    }
                });
            } else {
                // Clear the fields if pincode length is not 6 digits
                $('#city').val('');
                $('#state').val('');
            }
        });
    })
</script>
@endpush