@extends('layouts.selfapply')
@push('css')
    {{-- write or link your css file and styles tag here --}}
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .resend-otp-div a.disabled {
            pointer-events: none;
            cursor: not-allowed;
        }

        .bank-crousel {
            display: block !important;
        }

        .radio:checked {
            background: #0e5281;
            border-color: #0e5281;
        }

        .testimonials-carousel .owl-item img {
            width: 100% !important;
        }

        @media screen and (max-width: 767px) {
            .hero-section {
                padding-top: 10px !important;
            }
        }

        .input-group-text {

            border: none;
            background-color: #F6F9FF !important;
            border: 1px solid #E1E8EE !important;
            line-height: 1.3;
            border-radius: 16px !important;
            width: 58px;
            height: 58px;
            justify-content: center;
        }

        .request-form .form-control:focus {
            background-color: #f5f6f8;
            border-color: #f5f6f8;
            border: none;
        }

        @media screen and (max-width:991px) {
            .input-group-text {
                padding: 1.06rem 1.06rem;
            }
        }

        @media screen and (min-width:992px) and (max-width:1199px) {
            .input-group-text {
                padding: 1rem 1rem;
                margin-top: 1px;
            }
        }
    </style>
@endpush
@section('content')
    <section id="hero-201" class="hero-section-wrap bg--blue-500 bg--scroll position-relative">
        <div class="container">
            <div class="row d-flex align-items-start">
                <div class="col-md-6 col-lg-6 mb-lg-0 mb-3 order-lg-1 order-2 mt-md-0 mt-3">

                    <div class="me-md-4 me-0">
                        <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                            <div class="cbox-1-ico rounded-pill d-flex color--green-500 s-10">
                                <i class="fas fa-shield-alt me-2 fa-xs color--green-500 lh-lg"></i><span>Trusted by 4.5K+
                                    Customers Across India
                            </div>
                        </div>
                        <h2 class="s-45 w-700 color--white">Personal Loan up to <br> <span class="color--green-500">₹10
                                Lakh</span> with a Simple Online Process</h2>


                        <p class="s-16 color--grey mb-20">Kreditsuvidha is a digital loan marketplace connecting salaried
                            and self-employed individuals with RBI-registered NBFC partners. Explore eligibility-based
                            personal loan options, compare available offers, and begin your application online.</p>
                        <div class="column-right content-section-main mb-4 gx-5">

                            <div
                                class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="d-flex">
                                    <span class="flaticon-check end-0 color--green-500"> </span>
                                    <div class="cbox-1-txt ms-2 text-start">
                                        <p class="my-0 color--grey fa-xs lh-lg">Flexible EMI Options</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="d-flex">
                                    <span class="flaticon-check end-0 color--green-500"> </span>
                                    <div class="cbox-1-txt ms-2 text-start">
                                        <p class="my-0 color--grey fa-xs lh-lg">Simple Online Process</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="d-flex">
                                    <span class="flaticon-check end-0 color--green-500"> </span>
                                    <div class="cbox-1-txt ms-2 text-start">
                                        <p class="my-0 color--grey fa-xs lh-lg">Explore Loan Offers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 order-lg-2 order-12">
                    <div id="hero-8-form" class="border border-primary r-22 bg-white card-right">
                        <h4 class="s-20 w-700 mb-1 color--blue-500">Explore Your Personal Loan Options</h4>
                        <p class="s-16 mt-0">Enter your details to check available loan options.</p>

                        <form method="post" action="{{ route('self.apply.send.otp') }}"
                            class="request-form save-form-1 needs-validation" novalidate>
                        
                            <input type="hidden" name="loan_type" id="personalloan" value="1" class="radio" checked>
                            <input type="hidden" name="acc_type" value="1" id="acc_type">
                            <input type="hidden" name="user_type" value="1" id="user_type">
                            <div class="row g-2">
                                <div class="bg--green-200 p-3 r-14 border-success border">
                                    <div class="col-md-12">
                                        <div class="range">
                                            <div class="range__value form-group-range">
                                                <div class="form-group-range flex-column">
                                                    <p class="mb-0 text-grey mt-0">Loan amount you need</p>

                                                    <span class="text-black"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="range">
                                            <div class="form-group range__slider">
                                                <input type="range" step="10000">
                                                <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between required-price">
                                            <p class="text-uppercase mb-0 mt-2 s-10">₹50,000</p>
                                            <p class="text-uppercase mb-0 mt-2 s-10">₹10,00,000</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group mt-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text me-2 r-12 border border-light text-black"
                                                id="basic-addon1">+91</span>
                                        </div>
                                        <input type="text" name="mobile" id="mobile"
                                            class="numeric-input form-control name" placeholder="Enter Your Mobile*"
                                            autocomplete="off" required maxlength="10" minlength="10"
                                            inputmode="numeric">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'mobile'])
                                    @endcomponent
                                </div>

                            </div>

                            <p class="mb-0 s-14 text-start text-dark"><input type="checkbox" name="tandc"
                                    id="tandc" class="custom-control-input mb-0 me-2" value="1" checked
                                    required><small>I agree to the
                                    <a href="{{ route('front.terms.conditions') }}" target="_blank"
                                        class="text-dark text-decoration-none">Terms of Use</a> and <a
                                        href="{{ route('front.privacy.policy') }}" class="text-dark text-decoration-none"
                                        target="_blank">Privacy Policy</a></small></p>
                            <p class="mb-0 s-14 text-start text-dark"><input type="checkbox" name="tandc"
                                    id="tandc" class="custom-control-input mb-0 me-2" value="1" checked
                                    required><small>(Optional) I agree to receive offers by SMS, call and email.</small></p>

                            <div class="col-md-12 form-btn mt-3">
                                <button type="submit" id="checkmodal"
                                    class="btn btn--theme hover--tra-black submit">Apply
                                    Now <span class="fbox-ico ico-10"> <span
                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                            </div>
                            <div class="col-md-12"><span class="text-danger" id="usererrormsg"></span></div>
                            <p class="s-12 mb-0">Kreditsuvidha is not a lender. Offers, rates and approval are decided by
                                partner NBFCs.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Badges Section starts -->
    <section id="statistic-1" class=" ct-03 py-0 statistic-section division">
        <div class="container">
            <div class="statistic-5-wrapper r-22 bg-white shadow-sm">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col sec-1 py-40">
                        <div id="sb-5-1" class="text-center mb-0 border-end">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element color--black">5</span>k+
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-14 w-500 text-secondary">Customers Served</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-2 py-40">
                        <div id="sb-5-3" class="text-center mb-0 border-end">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element color--black">50</span>L
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-14 w-500 text-secondary">Maximum loan Amount </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-3 py-40">
                        <div id="sb-5-2" class="text-center mb-0 border-end">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element color--black">100</span>%
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-14 w-500 text-secondary">Digital Process</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-4 py-40">
                        <div id="sb-5-4" class="text-center mb-0">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element color--black">24</span>/7
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-14 w-500 text-secondary">Apply Anytime</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust Badges Section ends -->

    <section id="features-3" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div
                            class="cbox-1 ico-10 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Understanding Personal Loans
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">What Is a Personal Loan and How Can It Help?</h2>
                        <p class="s-16 color--blue-500 mt-0">A personal loan helps meet financial needs without collateral.
                            Loan amounts, EMIs, and repayment tenure depend on eligibility and lender policies.</p>

                    </div>
                </div>
            </div>
            <div class="fbox-wrapper">
                <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">

                                <span class="process-check bg--green-200">
                                    <i class="fas fa-mobile-alt color--green-500"></i>
                                </span>

                            </div>
                            <h6 class="s-20">Medical Expenses</h6>
                            <p class="process-description text-dark s-14">
                                Manage healthcare and treatment expenses.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-user-check color--green-500"></i>
                                </span>

                            </div>
                            <h6 class="s-20">Home & Wedding Expenses</h6>
                            <p class="process-description text-dark s-14">
                                Cover home improvements and wedding costs.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-play color--green-500"></i>
                                </span>

                            </div>
                            <h6 class="s-20">Business Expenses</h6>
                            <p class="process-description text-dark s-14">
                                Explore funding for business requirements.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-user-shield color--green-500"></i>
                                </span>

                            </div>
                            <h6 class="s-20">Travel & Education</h6>
                            <p class="process-description text-dark s-14">
                                Manage travel and educational expenses.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-file-alt color--green-500"></i>
                                </span>

                            </div>
                            <h6 class="s-20">Debt Consolidation</h6>
                            <p class="process-description text-dark s-14">
                                Explore options to combine existing repayments.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-check-circle color--green-500"></i>
                                </span>

                            </div>
                            <h6 class="s-20">Unexpected Expenses</h6>
                            <p class="process-description text-dark s-14">
                                Manage unplanned financial requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features-2" class="py-80 features-section division bg--blue-500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div
                            class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Loan Eligibility
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--white">Eligibility Criteria for a Personal Loan</h2>
                        <p class="s-16 color--grey mt-0">Eligibility and approval are subject to partner NBFC criteria.</p>
                    </div>
                </div>
            </div>
            <div class="criteria-table-wrapper">
                <table class="criteria-table">
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>Salaried employees</th>
                            <th>Self-employed individuals</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Minimum age</td>
                            <td>21 years</td>
                            <td>21 years</td>
                        </tr>

                        <tr>
                            <td>Minimum income</td>
                            <td>₹15,000 per month</td>
                            <td>₹15,000 per month (net business income)</td>
                        </tr>

                        <tr>
                            <td>Stability</td>
                            <td>1 year in current or total employment</td>
                            <td>1 year of business or practice</td>
                        </tr>

                        <tr>
                            <td>Income proof</td>
                            <td>Salary slips, salary credits in bank statement</td>
                            <td>ITR, business proof, bank statements</td>
                        </tr>

                        <tr>
                            <td>Credit profile</td>
                            <td colspan="2">
                                A good credit score and timely repayment of existing
                                EMIs and credit card bills improve your chances.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="color--grey mt-3"><i class="fas fa-info-circle color--green-500 me-2"></i>Tip: lenders usually
                prefer an EMI that stays within roughly 40–50% of monthly income. This varies by lender.</p>
        </div>
    </section>



    <section id="features-2" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div
                            class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Required Documents
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">Documents Needed for a Personal Loan</h2>
                        <p class="s-16 color--blue-500 mt-0">Documentation requirements may vary based on your profile and
                            lender policies.</p>
                    </div>
                </div>
            </div>

            <div class="fbox-wrapper">
                <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="d-flex align-items-center mb-20">
                                <div class="process-card-header d-flex align-items-start justify-content-between">
                                    <span class="process-check bg--green-200">
                                        <i class="fas fa-user-alt color--green-500"></i>
                                    </span>
                                </div>
                                <h6 class="s-16 ms-2 mb-0">Salaried applicants</h6>
                            </div>
                            <div class="column-right content-section-main">

                                <div class="cbox-1 ico-10 mb-2">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">PAN card and Aadhaar card</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1 mb-2">
                                <div class="cbox-1 ico-10 mb-2">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">Latest salary slips</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1 mb-2">
                                <div class="cbox-1 ico-10 mb-2">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">Last 3 to 6 months’ bank statements</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1 mb-2">
                                <div class="cbox-1 ico-10 mb-0">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">Current address proof</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-grey  border r-18 p-4">
                            <div class="d-flex align-items-center mb-20">
                                <div class="process-card-header d-flex align-items-start justify-content-between">
                                    <span class="process-check bg--green-200">
                                        <i class="fas fa-user-alt color--green-500"></i>
                                    </span>
                                </div>
                                <h6 class="s-16 ms-2 mb-0">Self-employed applicants</h6>
                            </div>
                            <div class="column-right content-section-main">
                                <div class="cbox-1 ico-10 mb-2">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">PAN card and Aadhaar card</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1 mb-2">
                                <div class="cbox-1 ico-10 mb-2">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">Income Tax Returns (ITR)</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1 mb-2">
                                <div class="cbox-1 ico-10 mb-2">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">Business registration or GST proof</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1 mb-2">
                                <div class="cbox-1 ico-10 mb-0">
                                    <div class="d-flex">
                                        <span class="flaticon-check end-0 color--green-500"> </span>
                                        <div class="cbox-1-txt ms-2 text-start">
                                            <p class="my-0 color--dark s-14">Last 6 to 12 months’ bank statements</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-80 features-section division bg--green-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div
                            class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>How it works
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">How to apply for a personal loan online in 4 steps</h2>
                        <p class="s-16 color--blue-500 mt-0">From mobile number to loan offers in one flow.</p>
                    </div>
                </div>
            </div>
            <div class="loan-process-section">
                <div class="loan-process-wrapper">


                    <div class="process-step">
                        <div class="process-icon-wrap">
                            <div class="process-icon bg--blue-500 border">
                                <i class="fas fa-mobile-alt color--green-300"></i>
                            </div>
                            <span class="step-number">1</span>
                        </div>

                        <div class="process-content">
                            <h6>Enter Your Mobile</h6>
                            <p>
                                Select an amount and verify OTP.
                            </p>
                        </div>
                    </div>


                    <div class="process-step">
                        <div class="process-icon-wrap">
                            <div class="process-icon bg--blue-500 border">
                                <i class="far fa-file-alt color--green-300"></i>
                            </div>
                            <span class="step-number">2</span>
                        </div>

                        <div class="process-content">
                            <h6>Share Basic Details</h6>
                            <p>
                                Provide income and employment details.
                            </p>
                        </div>
                    </div>


                    <div class="process-step">
                        <div class="process-icon-wrap">
                            <div class="process-icon bg--blue-500 border">
                                <i class="fas fa-search-dollar color--green-300"></i>
                            </div>
                            <span class="step-number">3</span>
                        </div>

                        <div class="process-content">
                            <h6>Review Offers</h6>
                            <p>
                                Explore eligible loan options.
                            </p>
                        </div>
                    </div>


                    <div class="process-step">
                        <div class="process-icon-wrap">
                            <div class="process-icon bg--blue-500 border">
                                <i class="fas fa-university color--green-300"></i>
                            </div>
                            <span class="step-number">4</span>
                        </div>

                        <div class="process-content">
                            <h6>Complete with the Lender</h6>
                            <p>
                                Complete lender verification and review.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-80 features-section-02 division bg--green-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div
                            class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Loan Charges
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">Personal Loan Interest Rates, Fees & Charges</h2>
                        <p class="s-16 color--blue-500 mt-0">Review applicable interest rates, fees, and lender terms
                            before applying.</p>
                    </div>
                </div>
            </div>
            <div class="criteria-table-wrapper">
                <table class="criteria-table">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>What it means</th>
                            <th>Where to check </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Interest rate / APR</td>
                            <td>Yearly cost of borrowing, set by the lender based on your profile</td>
                            <td>Offer and KFS</td>
                        </tr>

                        <tr>
                            <td>Processing fee</td>
                            <td>One-time fee, usually deducted from the sanctioned amount</td>
                            <td>Offer and KFS</td>
                        </tr>

                        <tr>
                            <td>Tenure</td>
                            <td>Repayment period. Longer tenure means lower EMI but more total interest</td>
                            <td>Offer</td>
                        </tr>

                        <tr>
                            <td>Prepayment / foreclosure</td>
                            <td>Charges, if any, for repaying early</td>
                            <td>Loan agreement</td>
                        </tr>

                        <tr>
                            <td>Late payment charges</td>
                            <td>
                                Penalty for a missed or delayed EMI, which can also hurt your credit score
                            </td>
                            <td>Loan agreement</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="color--blue-500 mt-3"><i class="fas fa-info-circle color--green-500 me-2"></i>Kreditsuvidha does not
                charge you to check offers. Final APR, fees and tenure are confirmed by the partner lender.</p>
        </div>
    </section>
    <section class="py-80 features-section-02 division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title text-start">
                        <div
                            class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Service Locations
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">Personal Loan Options in Surat & Across India</h2>
                        <p class="s-16 color--blue-500 mt-0">Kreditsuvidha connects salaried and self-employed individuals
                            with partner NBFCs through an online personal loan application process. Availability is subject
                            to lender coverage and eligibility. </p>
                        <ul class="d-flex gap-2 mt-20 flex-wrap">
                            <li>
                                <div
                                    class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                    <div class="cbox-1-ico rounded-pill">

                                        <i class="fas fa-map-marker-alt  color--green-500 me-2"></i>Surat
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                    <div class="cbox-1-ico rounded-pill">

                                        <i class="fas fa-map-marker-alt  color--green-500 me-2"></i>Ahmedabad
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                    <div class="cbox-1-ico rounded-pill">

                                        <i class="fas fa-map-marker-alt  color--green-500 me-2"></i>Vadodara
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                    <div class="cbox-1-ico rounded-pill">

                                        <i class="fas fa-map-marker-alt  color--green-500 me-2"></i>Rajkot
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div
                                    class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                    <div class="cbox-1-ico rounded-pill">

                                        <i class="fas fa-map-marker-alt  color--green-500 me-2"></i>Gandhinagar
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div
                                    class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                    <div class="cbox-1-ico rounded-pill">

                                        <i class="fas fa-map-marker-alt  color--green-500 me-2"></i>Mumbai
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs-3" class="py-80 faqs-section bg--green-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div
                            class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white color--green-500">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>FAQs
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">Frequently Asked Questions</h2>
                        <p class="s-16 color--blue-500 mt-0">Find answers to common personal loan queries.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 m-auto">
                    <div class="accordion-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item mb-3 border r-14">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">Is Kreditsuvidha a direct lender?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>No, Kreditsuvidha is a digital loan marketplace connecting applicants with
                                                partner NBFCs.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-3 border r-14">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">Who is eligible for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Salaried and self-employed individuals may apply, subject to lender
                                                eligibility criteria.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0 border r-14">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">What documents are required for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Identity proof, address proof, PAN card, and income proof may be required as
                                                per lender policies.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-3 border r-14">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">How long does personal loan processing take?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Processing timelines depend on documentation, verification, and lender
                                                policies.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0 border r-14">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">Does checking loan offers affect my credit score?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The impact depends on the type of credit enquiry conducted by the lending
                                                partner.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="newsletter-1" class="newsletter-section py-80">
        <div class="newsletter-overlay">
            <div class="container">
                <div class="newsletter-wrap bg--blue-500 r-32">
                    <div class="row d-flex align-items-center row-cols-1 row-cols-lg-1 py-70 p-4">
                        <div class="col">
                            <div class="newsletter-txt text-center">
                                <h4 class="s-34 w-500 color--white">Explore Personal Loan Options Online</h4>
                                <p class="color--grey">Check available options based on your eligibility.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-btn mt-3">
                                <button type="submit" id="checkmodal"
                                    class="btn btn--theme hover--tra-black submit m-auto ">Check Loan Options <span
                                        class="fbox-ico ico-10"> <span
                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 shape--06 bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="form-holder">
                        <div class="contact-form-notice">
                            <p class="s-14">
                                <strong>Important Note : </strong> We ask our customers to make payments ONLY on our website
                                kreditsuvidha.com and NOT through any other source, directly or indirectly.
                            </p>
                            <p class="s-14">
                                <strong>Disclaimer : </strong> kreditsuvidha Private Limited is not a lender or financial
                                institution. We do not provide loans or make credit decisions. All loan approvals, interest
                                rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not guarantee
                                loan approval, disbursal, or specific loan terms. The amount paid is only for the service
                                charge. We are not lenders and do not guarantee any loan approval. Loan approval,
                                disbursement/sanction is entirely dependent on NBFC criteria.
                            </p>
                            <p class="s-14">
                                <strong>PRE-APPLICATION NOTE : </strong>Users are advised to read our terms and conditions
                                and policies before proceeding/applying/registration.
                            </p>
                            <p class="s-14">
                                <strong>Registered Office Address:</strong> {{ env('COMPANY_ADDRESS') }} <br /> Mobile:
                                {{ env('COMPANY_MOBILE') }} | Email: {{ env('INFO_EMAIL') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- otp modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-30 border-radius-10">
                <form action="{{ route('self.apply.verify.otp') }}" method="post"
                    class="request-form save-form-2 needs-validation" novalidate>
                    <div class="modal-body">
                        <div class="row">
                            <h6 class="s-26 w-600 mb-5">Verify your mobile</h6>
                            <p class="s-16 mb-3">We've sent a 4 digit OTP to
                                <span class="text-success w-600">+91 <span class="text-success w-600"
                                        id="mobileNumber"></span>
                                    <a href="javascript:;" class="edit-phoneNumber" title="Edit Phone number">
                                        <svg width="40px" height="18px" viewBox="0 0 24.00 24.00" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#949494">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                stroke="#CCCCCC" stroke-width="0.43200000000000005" />
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M15.4998 5.50067L18.3282 8.3291M13 21H21M3 21.0004L3.04745 20.6683C3.21536 19.4929 3.29932 18.9052 3.49029 18.3565C3.65975 17.8697 3.89124 17.4067 4.17906 16.979C4.50341 16.497 4.92319 16.0772 5.76274 15.2377L17.4107 3.58969C18.1918 2.80865 19.4581 2.80864 20.2392 3.58969C21.0202 4.37074 21.0202 5.63707 20.2392 6.41812L8.37744 18.2798C7.61579 19.0415 7.23497 19.4223 6.8012 19.7252C6.41618 19.994 6.00093 20.2167 5.56398 20.3887C5.07171 20.5824 4.54375 20.6889 3.48793 20.902L3 21.0004Z"
                                                    stroke="#949494" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </a>
                                </span>
                            </p>
                            <div class="otp-form text-start">
                                <label for="firstname" class="position-static p-0 w-500 mb-2">Enter
                                    OTP</label>
                                <div class="otp-container">
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1"
                                        inputmode="numeric">
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                        inputmode="numeric">
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                        inputmode="numeric">
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                        inputmode="numeric">
                                    {{-- <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled> --}}
                                </div>
                            </div>
                            <span class="mt-2 s-12 text-success" id="msg">
                                <input type="hidden" id="verificationCode" name="otp" readonly>
                                <input type="hidden" id="acc_type" name="acc_type" readonly value="1">
                                <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault1"
                                    checked name="allow_sms" />
                                <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault"
                                    checked name="accept_tnc" />
                                <span class="text-danger f-w-400" id="invalidOtp" style="font-size:14px"></span>
                                @component('components.ajax-error', ['field' => 'otp'])
                                @endcomponent
                        </div>
                        <div class="row color--black resend-otp-div">
                            <div class="col-lg-6">
                                <p class="s-12 mt-0">Didn’t receive the code? <a href="javascript:;" id="resendOtp"
                                        class="text-success">Resend OTP</a>&nbsp;<span id="timer"
                                        class="text-success">(00:15)</span></p>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-floating">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div class="color--theme">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="title-text color--theme">
                                            <p class="fw-bold mb-0 ms-1 mt-0 color--theme s-14">Encrypted</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" id="otpBtn"
                        class="btn btn--theme hover--theme submit mt-3 w-100 rounded-pill">Verify OTP <span
                            class="fbox-ico ico-10"> <span
                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-30 border-radius-10">
                    <form action="{{ route('self.apply.verify.otp') }}" method="post"
                        class="request-form save-form-2 needs-validation" novalidate>
                        <div class="modal-body">
                            <div class="row">
                                <p class="s-24">OTP Verification</p>
                                <p class="s-16">Enter the 4 digit OTP received on your mobile <br />
                                    <span class="text-success w-600">+91 <span class="text-success w-600"
                                            id="mobileNumber"></span>
                                        <a href="javascript:;" class="edit-phoneNumber" title="Edit Phone number">
                                            <svg width="40px" height="18px" viewBox="0 0 24.00 24.00" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" stroke="#949494">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke="#CCCCCC" stroke-width="0.43200000000000005" />
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M15.4998 5.50067L18.3282 8.3291M13 21H21M3 21.0004L3.04745 20.6683C3.21536 19.4929 3.29932 18.9052 3.49029 18.3565C3.65975 17.8697 3.89124 17.4067 4.17906 16.979C4.50341 16.497 4.92319 16.0772 5.76274 15.2377L17.4107 3.58969C18.1918 2.80865 19.4581 2.80864 20.2392 3.58969C21.0202 4.37074 21.0202 5.63707 20.2392 6.41812L8.37744 18.2798C7.61579 19.0415 7.23497 19.4223 6.8012 19.7252C6.41618 19.994 6.00093 20.2167 5.56398 20.3887C5.07171 20.5824 4.54375 20.6889 3.48793 20.902L3 21.0004Z"
                                                        stroke="#949494" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </a>
                                    </span>
                                </p>
                                <div class="otp-form">
                                    <div class="otp-container">
                                        <input type="text" class="otp-input" pattern="\d" maxlength="1">
                                        <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>
                                        <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>
                                        <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>
                                    </div>
                                </div>
                                <span class="mt-2 s-12 text-success" id="msg">
                                    <input type="hidden" id="verificationCode" name="otp" readonly>
                                    <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault1" checked
                                        name="allow_sms" />
                                    <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault" checked
                                        name="accept_tnc" />
                                    <span class="text-danger f-w-400" id="invalidOtp" style="font-size:14px"></span>
                                    @component('components.ajax-error', ['field' => 'otp'])
    @endcomponent
                            </div>
                            <div class="row color--black resend-otp-div">
                                <p class="s-12">Didn’t receive the code? <a href="javascript:;" id="resendOtp"
                                        class="text-success">Resend OTP</a>&nbsp;<span id="timer"
                                        class="text-success">(00:15)</span></p>
                            </div>
                        </div>
                        <button type="submit" id="otpBtn" class="btn btn--theme hover--tra-black submit mt-3">Verify OTP</button>
                    </form>
                </div>
            </div>
        </div> -->
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const personalLoan = document.getElementById("personalloan");
            const businessLoan = document.getElementById("businessloan");

            const userTypeSelect = document.getElementById("user_type");
            const options = userTypeSelect.querySelectorAll("option");

            function toggleUserTypeOptions() {
                let type = "personal";
                if (businessLoan && businessLoan.checked) type = "business";

                // Show/Hide options based on loan type
                options.forEach(option => {
                    if (option.dataset.loan === type) {
                        option.style.display = "block";
                    } else {
                        option.style.display = "none";
                    }
                });

                // If current selected option is hidden, select first visible one
                const selectedOption = userTypeSelect.options[userTypeSelect.selectedIndex];
                if (selectedOption.style.display === "none") {
                    const firstVisible = [...options].find(opt => opt.style.display !== "none");
                    if (firstVisible) userTypeSelect.value = firstVisible.value;
                }
            }

            // Run on load
            toggleUserTypeOptions();

            // Run on change
            if (personalLoan) personalLoan.addEventListener("change", toggleUserTypeOptions);
            if (businessLoan) businessLoan.addEventListener("change", toggleUserTypeOptions);
        });
    </script>

    <script>
        const sendOtpUrl = @json(route('self.apply.send.otp'));
    </script>
    <!-- write or link your script file and script tag here -->
    <script src="{{ asset('front/js/loanAgent.js') }}"></script>
    <script>
        window.onscroll = function() {
            const btn = document.getElementById("goTopBtn");
            btn.style.display = (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" :
                "none";
        };

        // Scroll to top smoothly
        function goToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
@endpush
