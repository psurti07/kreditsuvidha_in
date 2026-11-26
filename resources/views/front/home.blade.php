@extends('layouts.front')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/calc/commoncalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/emicalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/calcstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
@endpush
@push('style-css')
@endpush
@section('content')
    <section id="hero-7" class="hero-section bg--blue-500 bg--scroll position-relative">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="hero-7-txt color--white text-start">
                        <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-3 title-top-wrap">
                            <div class="cbox-1-ico rounded-pill d-flex">
                                <span
                                    class="bg--yellow-500 rounded-circle  bg-badge d-flex align-items-center justify-content-center me-2"><i
                                        class="fas fa-star fa-xs color--white"></i></span><span>4.5k Customers Served*
                            </div>
                        </div>

                        <h1 class="s-45 w-700 color--white">We Make Loan <br> Applications <br> <span
                                class="color--green-500">Simpler</span></h1>
                        <p class="mb-20 color--grey">Explore loan options with clear guidance and support throughout the
                            application process.</p>
                        <div class="column-right content-section-main mb-4">
                            <div class="cbox-1 ico-10 mb-2">
                                <div class="ico-wrap color--theme mt-1">
                                    <div class="cbox-1-ico rounded-pill"><span
                                            class="flaticon-check end-0 color--green-500"></span>
                                    </div>
                                </div>
                                <div class="cbox-1-txt ms-2 text-start">
                                    <p class="my-0 color--grey">Collaboration with NBFC Partners</p>
                                </div>
                            </div>
                            <div class="cbox-1 ico-10 mb-2">
                                <div class="ico-wrap color--theme mt-1">
                                    <div class="cbox-1-ico rounded-pill"><span
                                            class="flaticon-check end-0 color--green-500"></span>
                                    </div>
                                </div>
                                <div class="cbox-1-txt ms-2 text-start">
                                    <p class="my-0 color--grey">Online Application Process</p>
                                </div>
                            </div>
                            <div class="cbox-1 ico-10 mb-2">
                                <div class="ico-wrap color--theme mt-1">
                                    <div class="cbox-1-ico rounded-pill"><span
                                            class="flaticon-check end-0 color--green-500"></span>
                                    </div>
                                </div>
                                <div class="cbox-1-txt ms-2 text-start">
                                    <p class="my-0 color--grey">Application Support</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('loan.agent.main') }}" class="custom-btn mb-md-0 mb-10"> <span
                                    class="custom-btn-text text-black">Hire
                                    Agent</span>
                                <span class="custom-btn-icon">
                                    <i class="fas fa-arrow-up"></i>
                                </span></a>
                            <a href="#" class="btn btn-white btn-sm rounded-pill">See how it works</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="hero-7-img d-flex justify-content-center align-items-start mb-md-0 mb-15">
                        <img src="{{ asset('front/images/home-img.png') }}" alt="kreditsuvidha" class="img-fluid p-0">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-80 ct-02 content-section division" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="txt-block me-lg-4">
                        <div class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>About Us
                            </div>
                        </div>
                        <h2 class="s-40 mb-5 w-500">Helping You Make Informed Financial Decisions</h2>
                        <p>Kreditsuvidha works with NBFC partners to make the loan application process easier to understand.
                            Our digital platform provides guidance on loan options, documentation and application steps,
                            helping customers make informed decisions.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="statistic-5-wrapper bg--blue-500 r-22 p-4">
                        <p class="color--white mb-4 mt-0">Kreditsuvidha in numbers</p>
                        <div class="row row-cols-2 row-cols-md-2">
                            <div class="col sec-1 staticts-1 pb-4">
                                <div id="sb-5-1" class="text-start mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-500 mb-10 color--white">
                                                <span class="count-element">4.5</span>K
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">Customers Served</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-2 staticts-1 staticts-border pb-4">
                                <div id="sb-5-3" class="text-start mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-500 mb-10 color--white">
                                                <span class="count-element">10</span>+
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">NBFC Partners</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-3 staticts-1 staticts-border-top pt-4">
                                <div id="sb-5-2" class="text-start mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-500 mb-10 color--white">
                                                <span class="count-element">12</span>+
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">Team Members</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-4 staticts-1 pt-4">
                                <div id="sb-5-4" class="text-start mb-0">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h2 class="s-30 w-500 mb-10 color--white">
                                                <span class="count-element">100</span>%
                                            </h2>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">Online Application Process</h5>
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


    <section id="features-2" class="py-80 features-section division bg--blue-500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Why Choose Us
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--white">Why Kreditsuvidha</h2>
                        <p class="s-16 color--grey mt-0">Clear guidance and support throughout your loan application.</p>
                    </div>
                </div>
            </div>
            <div class="fbox-wrapper">
                <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col">
                        <div class="process-card h-100 bg--blue-300 border-light r-20 p-4 text-center">
                            <div class="process-card-header d-flex align-items-center justify-content-center mb-20">
                                <h4 class="process-number"><span class="process-check bg--blue-500">
                                        <i class="fas fa-handshake color--white fs-6"></i>
                                    </span></h4>
                            </div>
                            <h6 class="w-700 color--white">NBFC Partnerships</h6>

                            <p class="process-description color--grey s-14">
                                Explore loan options offered by our NBFC partners.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card h-100 bg--blue-300 border-light r-20 p-4 text-center">
                            <div class="process-card-header d-flex align-items-center justify-content-center mb-20">
                                <h4 class="process-number"> <span class="process-check bg--blue-500">
                                        <i class="fas fa-users color--white fs-6"></i>
                                    </span></h4>
                            </div>
                            <h6 class="w-700 color--white">Online Application</h6>
                            <p class="process-description color--grey s-14">
                                Start your loan application online at your convenience.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card h-100 bg--blue-300 border-light r-20 p-4 text-center">
                            <div class="process-card-header d-flex align-items-center justify-content-center mb-20">
                                <h4 class="process-number"> <span class="process-check bg--blue-500">
                                        <i class="fas fa-shield-alt color--white fs-6"></i>
                                    </span></h4>
                            </div>
                            <h6 class="w-700 color--white">Application Support</h6>
                            <p class="process-description color--grey s-14">
                                Get guidance on documents and the steps involved in applying.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Intro section starts -->
    <section id="products" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 align-items-start">
                    <div class="section-title mb-30 text-start">
                        <div class="cbox-1 ico-10 mb-3 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Products
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500 text-start">Explore Personal Loan Options with Confidence</h2>

                    </div>
                    <div class="faqs-section">
                        <div class="accordion-wrapper p-0">
                            <ul class="accordion">
                                <li class="accordion-item mb-3 bg-white r-16 is-active">
                                    <div class="accordion-thumb">
                                        <h6 class="s-16 w-600 mb-0">Quick Self-Apply
                                        </h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer pt-2 pe-3 pb-3 ps-3">
                                                <p class="color--black mt-0">Explore loan options from our NBFC partners
                                                    and receive guidance on documents and application steps.</p>
                                                <div class="column-right content-section-main mb-3">
                                                    <div class="cbox-1 ico-10 mb-2">
                                                        <div class="ico-wrap color--theme">
                                                            <div class=""><span class="flaticon-check end-0"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt ms-2">
                                                            <p class="my-0 color--blue-500">Online Application Process</p>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1 ico-10 mb-2">
                                                        <div class="ico-wrap color--theme">
                                                            <div class=""><span class="flaticon-check end-0"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt ms-2">
                                                            <p class="my-0 color--blue-500">Application Support</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <a href="{{ route('self.apply.main') }}" class="custom-btn me-2">
                                                    <span class="custom-btn-text text-black">Self Apply</span>

                                                    <span class="custom-btn-icon">
                                                        <i class="fas fa-arrow-up"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item bg-white r-16">
                                    <div class="accordion-thumb">
                                        <h6 class="s-16 w-600 mb-0">Hire Loan Agent
                                        </h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer pt-2 pe-3 pb-3 ps-3">
                                                <p class="color--black mt-0">Explore loan options from our NBFC partners
                                                    and receive guidance on documents and application steps.</p>
                                                <div class="column-right content-section-main mb-3">
                                                    <div class="cbox-1 ico-10 mb-2">
                                                        <div class="ico-wrap color--theme">
                                                            <div class=""><span class="flaticon-check end-0"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt ms-2">
                                                            <p class="my-0 color--blue-500">Online Application Process</p>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1 ico-10 mb-2">
                                                        <div class="ico-wrap color--theme">
                                                            <div class=""><span class="flaticon-check end-0"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cbox-1-txt ms-2">
                                                            <p class="my-0 color--blue-500">Application Support</p>
                                                        </div>
                                                    </div>

                                                </div> <a href="{{ route('self.apply.main') }}" class="custom-btn me-2">
                                                    <span class="custom-btn-text text-black">Hire Agent</span>

                                                    <span class="custom-btn-icon">
                                                        <i class="fas fa-arrow-up"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 mt-lg-0 mt-4">
                    <div class="img-block right-column text-center">
                        <img class="img-fluid light-theme-img w-100 rounded-3"
                            src="{{ asset('front/images/product-img.png') }}" alt="feature-image">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Products Intro section ends -->


    <!-- Quick and swift steps section starts -->
    <section id="features-3" class="py-80 features-section division bg--blue-200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div class="cbox-1 ico-10 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>How it works
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--blue-500">Your Loan Application in 6 Steps</h2>

                    </div>
                </div>
            </div>
            <div class="fbox-wrapper">
                <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-light r-22 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">

                                <span class="process-check bg--green-200">
                                    <i class="fas fa-mobile-alt color--green"></i>
                                </span>
                                <h3 class="process-number display-3 w-800 lh-1"> 01</h3>
                            </div>
                            <h6 class="s-20">Enter Your Details</h6>
                            <p class="process-description text-dark s-14">
                                Begin by entering your mobile number and bank-registered name.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-light r-22 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-user-check color--green"></i>
                                </span>
                                <h3 class="process-number display-3 w-800 lh-1"> 02</h3>
                            </div>
                            <h6 class="s-20">Share Your Information</h6>
                            <p class="process-description text-dark s-14">
                                Complete your profile to explore loan options based on the information provided.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-light r-22 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-play color--green"></i>
                                </span>
                                <h3 class="process-number display-3 w-800 lh-1"> 03</h3>
                            </div>
                            <h6 class="s-20">Choose a Support Plan</h6>
                            <p class="process-description text-dark s-14">
                                Select a subscription plan to access available loan options. Applicable charges will be
                                shown before payment.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-light r-22 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-user-shield color--green"></i>
                                </span>
                                <h3 class="process-number display-3 w-800 lh-1">04</h3>
                            </div>
                            <h6 class="s-20">Verification Call</h6>
                            <p class="process-description text-dark s-14">
                                Our team will contact you for verification and guide you on the documents required.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-light r-22 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-file-alt color--green"></i>
                                </span>
                                <h3 class="process-number display-3 w-800 lh-1"> 05</h3>
                            </div>
                            <h6 class="s-20">Lender Review</h6>
                            <p class="process-description text-dark s-14">
                                The NBFC reviews your profile and documents according to its terms and criteria.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="process-card process-blog h-100 bg-white border-light r-22 p-4">
                            <div class="process-card-header d-flex align-items-start justify-content-between mb-20">
                                <span class="process-check bg--green-200">
                                    <i class="fas fa-check-circle color--green"></i>
                                </span>
                                <h3 class="process-number display-3 w-800 lh-1"> 06</h3>
                            </div>
                            <h6 class="s-20">Receive a Decision</h6>
                            <p class="process-description text-dark s-14">
                                The NBFC makes the final decision and communicates the next steps.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Quick and swift steps section end -->
    <!-- eligibility calculator starts -->
    <section id="features-21" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div class="cbox-1 ico-10 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Calculator
                            </div>
                        </div>
                        <h2 class="s-28 mb-5">Calculate Your EMI in Seconds </h2>
                        <p class="s-16 color--blue-500 mt-0">Plan your finances more confidently.</p>
                    </div>
                </div>
            </div>
            <div class="p-30 bg--white-100 shadow border-grey-1 r-20">
                <div class="row">
                    <div class="col-md-7 order-first order-md-2">
                        <div id="emicalculatorinnerformwrapper">
                            <form id="emicalculatorform" class="comment-form">
                                <div class="form-horizontal" id="emicalculatorinnerform">
                                    <div class="row">
                                        <!-- Loan Amount slider section starts -->
                                        <div class="col-md-12">
                                            <div class="row form-group lamount flex-display align-items-center">
                                                <label class="col-6 control-label s-18 w-500" for="loanamount">Loan
                                                    amount</label>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text color--purple-500">₹</span>
                                                            </div>
                                                            <input class="form-control custm-box w-400" id="loanamount"
                                                                name="loanamount" value="10,00,000" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="loanamountslider"></div>
                                            <div id="loanamountsteps" class="steps">
                                                <span class="tick" style="left: 0%;">| <br>
                                                    <span class="marker">50K</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 12.5%;">| <br>
                                                    <span class="marker">10L</span>
                                                </span>
                                                <span class=tick style="left: 25%;">| <br>
                                                    <span class=marker>20L</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 37.5%;">| <br>
                                                    <span class="marker">30L</span>
                                                </span>
                                                <span class="tick" style="left: 50%;">| <br>
                                                    <span class="marker">40L</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 62.5%;">| <br>
                                                    <span class="marker">50L</span>
                                                </span>
                                                <span class="tick" style="left: 75%;">| <br>
                                                    <span class="marker">60L</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 87.5%;">| <br>
                                                    <span class="marker">70L</span>
                                                </span>
                                                <span class="tick" style="left: 100%;">| <br>
                                                    <span class="marker">80L</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Loan Amount slider section ends -->
                                        <!-- Interest Rate slider section starts -->
                                        <div class="col-md-12 mt-100">
                                            <div class="row form-group lint flex-display align-items-center">
                                                <label class="col-6 s-18 w-500 control-label" for="loaninterest">Interest
                                                    rate</label>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                        <input class="form-control custm-box w-400" id="loaninterest"
                                                            name="loaninterest" value="10.5" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="loaninterestslider"></div>
                                            <div id="loanintereststeps" class="steps">
                                                <span class="tick" style="left: 0%;">| <br>
                                                    <span class="marker">5</span>
                                                </span>
                                                <span class="tick" style="left: 16.67%;">| <br>
                                                    <span class="marker">7.5</span>
                                                </span>
                                                <span class="tick" style="left: 33.34%;">| <br>
                                                    <span class="marker">10</span>
                                                </span>
                                                <span class="tick" style="left: 50%;">| <br>
                                                    <span class="marker">12.5</span>
                                                </span>
                                                <span class="tick" style="left: 66.67%;">| <br>
                                                    <span class="marker">15</span>
                                                </span>
                                                <span class="tick" style="left: 83.34%;">| <br>
                                                    <span class="marker">17.5</span>
                                                </span>
                                                <span class="tick" style="left: 100%;">| <br>
                                                    <span class="marker">20</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Interest Rate slider section ends -->
                                        <!-- Loan Tenure slider section starts -->
                                        <div class="col-md-12 mt-100">
                                            <div class="row form-group lterm flex-display align-items-center">
                                                <label class="col-6 s-18 w-500 control-label" for="loanterm">Select EMI
                                                    option</label>
                                                <div class="col-6">
                                                    <div class="loantermwrapper">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend d-none">
                                                                <label class="s-14 input-group-text">
                                                                    <input type="radio" class="mr-5"
                                                                        name="loantenure" id="loanyears"
                                                                        value="loanyears" tabindex="4"
                                                                        autocomplete="off"><span class="s-14">Yr</span>
                                                                </label>
                                                            </div>
                                                            <input class="form-control custm-box-2 w-400" id="loanterm"
                                                                name="loanterm" value="20" type="text">
                                                            <div class="input-group-prepend">
                                                                <label class="s-14 input-group-text months-input">
                                                                    <input type="radio" class="mr-5 d-none"
                                                                        name="loantenure" id="loanmonths"
                                                                        value="loanmonths" tabindex="5"
                                                                        autocomplete="off" checked="checked">
                                                                    <span class="s-14">Months</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="loantermslider"></div>
                                            <div id="loantermsteps" class="steps">
                                                <span class="tick" style="left: 0%;">| <br>
                                                    <span class="marker">0</span>
                                                </span>
                                                <span class="tick" style="left: 16.67%;">| <br>
                                                    <span class="marker">5</span>
                                                </span>
                                                <span class="tick" style="left: 33.33%;">| <br>
                                                    <span class="marker">10</span>
                                                </span>
                                                <span class="tick" style="left: 50%;">| <br>
                                                    <span class="marker">15</span>
                                                </span>
                                                <span class="tick" style="left: 66.67%;">| <br>
                                                    <span class="marker">20</span>
                                                </span>
                                                <span class="tick" style="left: 83.33%;">| <br>
                                                    <span class="marker">25</span>
                                                </span>
                                                <span class="tick" style="left: 100%;">| <br>
                                                    <span class="marker">30</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Loan Tenure slider section ends -->
                                    </div>
                                </div>
                                <input id="loanproduct" name="loanproduct" value type="hidden">
                                <input id="loanstartdate" name="loanstartdate" value type="hidden">
                                <input id="loanyearformat" name="loanyearformat" value type="hidden">
                                <input id="loandata" name="loandata" value type="hidden">
                                <input id="calcversion" name="calcversion" value=4.0 type="hidden">
                            </form>
                            <div class="row gutter-left gutter-right d-none">
                                <div id="emipaymentsummary" class="col-sm-5 col-md-6 no-gutter-left no-gutter-right">
                                    <div id="emiamount">
                                        <h4>Loan EMI</h4>
                                        <p>₹ <span>24,959</span>
                                        </p>
                                    </div>
                                    <div id="emitotalinterest">
                                        <h4>Total Interest Payable</h4>
                                        <p>₹ <span>34,90,279</span>
                                        </p>
                                    </div>
                                    <div id="emitotalamount" class="column-last">
                                        <h4>Total Payment <br>(Principal + Interest) </h4>
                                        <p>₹ <span>59,90,279</span>
                                        </p>
                                    </div>
                                </div>
                                <div id="emipiechart"
                                    class="d-none no-gutter-left no-gutter-right col-sm-7 col-md-6 highcharts-container">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- display none graph and list of emi's start --}}
                    <div id="emipaymentdetails" class="d-none">
                        <form class="gutter-left gutter-right form-horizontal">
                            <div class="row form-group" id="emipaymentscheduleheader">
                                <label class="col-md-4 col-lg-5 control-label" for="startmonthyear">Schedule showing EMI
                                    payments starting from</label>
                                <div class="col-md-4 col-lg-3">
                                    <div class="input-group">
                                        <input class="form-control" id="startmonthyear" name="startmonthyear" value
                                            type="text">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 form-group lyearformat">
                                    <select class="form-control" tabindex="15" name="yearformat" id="yearformat">
                                        <option value="calendaryear" selected="selected">Calendar Year wise</option>
                                        <option value="financialyear">Financial Year wise</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="emibarchart" class="hidden-ts highcharts-container"></div>
                        <div id="emipaymenttable"></div>
                    </div>
                    {{-- display none graph and list of emi's end --}}
                    <div class="col-md-5 order-last order-md-2 emi-details">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="p-4 text-center border-bottom">
                                    <h6 class="card-title mb-3">Your monthly instalment:</h6>
                                    <h2 class="mb-0 text-center s-40 color--purple-500" id="emiamount">₹<span>888</span>
                                    </h2>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted s-15">Total interest</span>
                                        <span id="emitotalinterest">₹<span>656</span></span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted s-15">Principal amount</span>
                                        <span id="principalamount">₹<span>10,000</span></span>
                                    </div>
                                    <hr style="border:1px dashed grey">
                                    <div class="d-flex justify-content-between mb-4">
                                        <span class="s-16">Total amount</span>
                                        <span id="emitotalamount">₹<span>10,000</span></span>
                                    </div>
                                    <a href="{{ route('self.apply.main') }}"
                                        class="btn btn--green-400 hover--tra-black w-100">Apply for loan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- eligibility calculator ends -->

    <!-- Our Partners section start  -->
    <section id="integrations-2" class="pt-0 pb-80 integrations-section bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div class="cbox-1 ico-10 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Trusted
                            </div>
                        </div>
                        <h2 class="s-28 mb-5">Trusted by the Best in the Industry </h2>
                        <p class="s-16 color--blue-500 mt-0">Partnering with the best NBFCs to provide the best for our
                            customers.</p>
                    </div>
                </div>
            </div>
            @php
                $lists = nbfcsList();
            @endphp
            <div class="bank-crousel">
                <div class="row">
                    <div class="col text-center">
                        <div class="owl-carousel brands-carousel-6 emi-carousel">
                            {!! $lists['carousel'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners section end  -->


    <!-- Testimonioals section starts -->
    <section id="reviews-1" class="py-80 reviews-section bg--blue-200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <div class="cbox-1 ico-10 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Testimonials
                            </div>
                        </div>
                        <h2 class="s-28 mb-5">What Our Customers Say </h2>
                        <p class="s-16 color--blue-500 mt-0">Hear from customers about their experiences with
                            Kreditsuvidha.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Testimonials carousel start  -->
                    @include('partials.front.testimonials')
                    <!-- Testimonials carousel end  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonioals section ends -->

    <!-- Contact Start -->
    <section id="contact" class="py-80">
        <div class="p-60 bg--blue-500 r-32 contact-form-wrap">

            <div class="row">
                <div class="col-md-6 col-12  order-md-1 order-2 mt-lg-0 mt-3 position-relative">
                    <div class="section-title mb-40 text-start">
                        <div class="cbox-1 ico-10 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white">
                            <div class="cbox-1-ico rounded-pill"><i
                                    class="fas fa-circle fa-xs color--green-500 me-2"></i>Contact Us
                            </div>
                        </div>
                        <h2 class="s-28 mb-5 color--white">We Are Here to Help You </h2>
                        <p class="s-14 color--grey mt-0">Drop us a message with your basic information, and our team will
                            get back to you shortly.</p>
                    </div>
                    <div class="row gy-3 gx-3">
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item mb-0">
                                    <div class="address-text bg-transparent">
                                        <h6 class="color--grey">Address</h6>
                                        <p class="address-txt color--grey">{{ env('COMPANY_ADDRESS') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item mb-0">
                                    <div class="address-text bg-transparent">
                                        <h6 class="color--grey"> Customer Support </h6>
                                        <p class="address-txt color--grey"><a
                                                href="tel:{{ str_ireplace(' ', '', env('COMPANY_MOBILE')) }}">{{ env('COMPANY_MOBILE') }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item mb-0">
                                    <div class="address-text bg-transparent">
                                        <h6 class="color--grey"> Mail Us </h6>
                                        <p class="address-txt color--grey"><a
                                                href="mailto:{{ str_ireplace(' ', '', env('COMPANY_SUPPORT_MAIL')) }}">{{ env('COMPANY_SUPPORT_MAIL') }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item">
                                    <div class="address-text bg-transparent">
                                        <h6 class="color--grey"> Working Hours </h6>
                                        <p class="address-txt color--grey">
                                            Monday to Saturday: 10:00 AM - 5:00 PM
                                            Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 py-md-0 py-0 order-md-2 order-1">
                    <div class="h-100 p-4 bg--white-100 block-shadow r-20">
                        <div class="card-body">
                            <p class="w-400 mb-20">
                                Fill out the form below and you'll hear from us soon.
                            </p>
                            <form method="post" action="{{ route('front.contact.us.store') }}"
                                class="contact-form career-form" enctype="multipart/form-data">
                                <div class="row gx-2 gy-2">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <label for="firstname" class="position-static p-0 w-500 color--blue-500">Full
                                                Name *</label>
                                            <input id="form_name" name="fullname" type="text"
                                                class="form-control name mb-0 py-0 r-12" placeholder="">
                                        </div>
                                        @component('components.ajax-error', ['field' => 'fullname'])
                                        @endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <label for="form_mobile"
                                                class="position-static p-0 w-500 color--blue-500">Mobile *</label>
                                            <input id="form_mobile" type="text" name="mobile"
                                                class="numeric-input mb-0 py-0 r-12 form-control mobile" placeholder=""
                                                minlength="10" maxlength="10" inputmode="numeric">
                                        </div>
                                        @component('components.ajax-error', ['field' => 'mobile'])
                                        @endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <label for="form_email"
                                                class="position-static p-0 w-500 color--blue-500">Email *</label>
                                            <input id="form_email" type="email" name="email"
                                                class="mb-0 py-0 r-12 form-control email" placeholder="">
                                        </div>
                                        @component('components.ajax-error', ['field' => 'email'])
                                        @endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating">
                                            <label for="form_subject"
                                                class="position-static p-0 w-500 color--blue-500">Subject *</label>
                                            <input id="form_subject" type="text" name="subject"
                                                class="mb-0 py-0 r-12 form-control subject" placeholder="">
                                        </div>
                                        @component('components.ajax-error', ['field' => 'subject'])
                                        @endcomponent
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group form-floating">
                                            <label for="form_message"
                                                class="position-static p-0 w-500 color--blue-500">Message *</label>
                                            <textarea id="form_message" name="desc" class="mb-0 pt-3 r-12 form-control message" placeholder=""
                                                style="height: 150px"></textarea>
                                        </div>
                                        @component('components.ajax-error', ['field' => 'desc'])
                                        @endcomponent
                                    </div>
                                    <div class="col-12 text-start">
                                        <!-- <button type="submit" class="s-14 btn btn--green-400 hover--tra-black submit"
                                            id="submit-btn"></button> -->

                                        <!-- <button type="submit" class="custom-btn me-2">
                                                    <span class="custom-btn-text text-black">Submit Request</span>

                                                    <span class="custom-btn-icon">
                                                        <i class="fas fa-arrow-up"></i>
                                                    </span>
                                                </button> -->
                                        <button type="submit" class="custom-btn me-2 submit w-100" id="submit-btn">
                                            <span class="custom-btn-text text-black">Submit Request</span>

                                            <div class="custom-icon-wrap">
                                                <span class="custom-btn-icon">
                                                    <i class="fas fa-arrow-up"></i>
                                                </span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->




    {{-- Wlecome message modal show here --}}
    @if ($msg->status == 1)
        <div class="modal fade myModal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row p-3">
                            <p>{!! $msg->content ?? 'N/A' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('script-src')
    <script type="text/javascript" src="{{ asset('front/calc/calccore.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/mouse.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/commoncalculator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/emicalculator.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('front/js/home.js') }}" type="text/javascript"></script>
    @if ($msg->status == 1)
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $(".myModal:not(.auto-off)").modal("show");
                }, 3600);
            })
        </script>
    @endif

    <script>
        const routes = {
            'selfapply': "{{ route('self.apply.send.otp') }}",
        };

        document.addEventListener('DOMContentLoaded', () => {
            const faqs = document.querySelectorAll('#faq-container li');
            const loadMoreButton = document.getElementById('load-more-faq');
            const viewLessButton = document.getElementById('view-less-faq');
            let visibleCount = 5; // Number of FAQs initially shown
            const batchSize = 5; // Number of FAQs to show on each click

            // Initial setup: Show the first 7 FAQs
            faqs.forEach((faq, index) => {
                if (index >= visibleCount) {
                    faq.style.display = 'none';
                }
            });

            // Event listener for Load More button
            loadMoreButton.addEventListener('click', () => {
                const hiddenFaqs = Array.from(faqs).filter(faq => faq.style.display === 'none');
                for (let i = 0; i < batchSize && i < hiddenFaqs.length; i++) {
                    hiddenFaqs[i].style.display = 'list-item';
                }

                // Show the "View Less" button once more items are displayed
                if (hiddenFaqs.length > 0) {
                    viewLessButton.style.display = 'inline-block';
                }

                // Hide the "Load More" button if no more FAQs to show
                if (hiddenFaqs.length <= batchSize) {
                    loadMoreButton.style.display = 'none';
                }
            });

            // Event listener for View Less button
            viewLessButton.addEventListener('click', () => {
                faqs.forEach((faq, index) => {
                    if (index >= visibleCount) {
                        faq.style.display = 'none';
                    }
                });

                // Reset button visibility
                loadMoreButton.style.display = 'inline-block';
                viewLessButton.style.display = 'none';
            });
        });

        $(document).ready(function() {
            $(".contact-form").submit(function(e) {
                let status = document.activeElement.innerHTML;
                e.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    let data = new FormData(this);
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
                            $("#submit-btn").html(
                                '<span class="spinner-border spinner-border-sm"></span> Submit Request '
                            )
                            $("#submit-btn").attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                toastr.success(result.message);
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                toastr.error(result.message);
                                $('#submit-btn').html('Submit Request');
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
                            $('#submit-btn').html('Submit Request');
                            $('#submit-btn').attr('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endpush
