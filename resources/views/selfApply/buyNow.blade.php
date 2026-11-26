@extends('layouts.selfapply')
@push('css')
<link rel="stylesheet" href="{{ asset('front/css/radiocards.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
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

    a#failed-btn {
        background: #dc3545;
        border: 1px solid #dc3545;
    }

    a#failed-btn:hover {
        background: #bb2d3b !important;
        color: #fff !important;
    }

    .card:hover .radio:checked {
        border-color: transparent !important;
    }
</style>
@endpush

@section('content')
<section id="contacts"
    class="bg--white-100 personal-details-form inner-page-hero contacts-section division min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center mb-35">

            <div class="col-md-6 col-lg-6 col-12 m-auto">
                <div id="hero-8-form" class="r-16 p-0 details-form card-right bg-white">
                    <div class="bg--blue-500 details-form-wrap p-3">
                        <div class="loan-progress-section">
                            <div class="loan-progress-header">
                                <span class="progress-step-count">STEP 5 OF 6</span>
                                <span class="progress-percentage">83% complete</span>
                            </div>
                            <div class="loan-progress-bar">
                                <div class="loan-progress-fill" style="width:85%;"></div>
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
                                <i class="fas fa-user-alt color--green-500 fs-3"></i>
                            </span>
                        </div>
                        <div class="text-center pt-0 pb-30">
                            <h4 class="fw-bolder s-25 mb-0 color--white">Self Apply</h4>
                            <p class="mb-0 s-14 color--grey">A dedicated expert to guide your application</p>
                        </div>
                    </div>
                    <!-- <h5 class="fw-bolder s-16">Premium Subscription Offer</h5>
                        <p class="mb-30 color--grey">Your pre-approved loan is waiting. Purchase a subscription to
                            proceed. <span class="text-danger">- Offer Valid till 12 am only!</span></p> -->

                    <form method="post" class="buyNowForm p-4" action="{{ route('self.apply.checkout') }}">
                        @csrf
                        <input type="hidden" class="form-control" name="order_amount" id="order_amount" value="">
                        <div class="row gx-3 gy-3">
                            <div class="col-lg-12 col-12">
                                <div class="border border-success p-3 bg--green-100 r-10 mb-0">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <i class="fas fa-headphones me-2"></i>
                                        </div>
                                        <div>

                                            <p class="s-14 my-0"><strong>An agent will call you</strong> <br> on +91 ******8765 to guide your application.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <label class="card border-0">
                                    <input name="plan" value="2" class="radio d-none" type="radio" checked
                                        data-plan="Loan-Agent">
                                    <div class="plan-details-wrap p-3 r-18 border">
                                        <h5 class="fw-bolder s-16 color--blue-500 mb-0 mt-sm-0 mt-5">SELF APPLY FEES</h5>
                                        <p>Guided application · Personal & Business loans</p>

                                        <!-- <div class="corner-ribbon"
                                            data-offer="{{ calPercentage($hireAgent->amount, $hireAgent->offeramount) }} OFF">
                                        </div>  -->

                                        <p
                                            class="mb-0 text-center fa-xs w-500 bg--purple-500 px-2 py-0 mt-0 text-white ribbon-top rounded-pill">
                                            MOST POPULAR
                                        </p>
                                        <div class="price my-2">
                                            <!-- Monthly Price -->
                                            <div class="price2">
                                                <sup class="color--black">₹</sup>
                                                <sup
                                                    class="coins color--red-300"><strike>{{intval($hireAgent->amount)}}</strike></sup>
                                                <span
                                                    class="color--black">{{intval($hireAgent->offeramount)}}</span>
                                            </div>
                                        </div>

                                        <!-- <div class="order-summary">
                                            <div class="order-row order-header">
                                                <span>Items</span>
                                                <span>Price</span>
                                            </div>

                                            <div class="order-row">
                                                <span>Price</span>
                                                <span>{{formatePriceIndia($hireAgent->amount)}}</span>
                                            </div>

                                            <div class="order-row order-discount">
                                                <span>Discount</span>
                                                <span>-
                                                    {{formatePriceIndia($hireAgent->amount - $hireAgent->offeramount)}}</span>
                                            </div>

                                            <div class="order-row">
                                                <span>Offer Amount</span>
                                                <span>{{formatePriceIndia($hireAgent->offeramount)}}</span>
                                            </div>

                                            <div class="order-row">
                                                <span>GST</span>
                                                <span>+ {{formatePriceIndia($hireAgent->offeramount * 0.18)}}</span>
                                            </div>

                                            <div class="order-divider"></div>

                                            <div class="order-row order-total">
                                                <span>Total</span>
                                                <span>₹
                                                    {{formatePriceIndia($hireAgent->offeramount + ($hireAgent->offeramount * 0.18))}}</span>
                                            </div>
                                        </div> -->
                                        <div class="cbox-1 ico-15 ml-0 mb-1">
                                            <div class="ico-wrap">
                                                <div class="cbox-1-ico">
                                                    <span class="success-check">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cbox-1-txt">
                                                <p class="s-12 mt-0 w-500 text-dark mb-0"> Personal agent call to guide your application</p>
                                            </div>
                                        </div>
                                        <div class="cbox-1 ico-15 ml-0 mb-1">
                                            <div class="ico-wrap">
                                                <div class="cbox-1-ico">
                                                    <span class="success-check">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cbox-1-txt">
                                                <p class="s-12 mt-0 w-500 text-dark mb-0"> Eligibility-based lender options</p>
                                            </div>
                                        </div>
                                        <div class="cbox-1 ico-15 ml-0 mb-1">
                                            <div class="ico-wrap">
                                                <div class="cbox-1-ico">
                                                    <span class="success-check">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cbox-1-txt">
                                                <p class="s-12 mt-0 w-500 text-dark mb-0"> Document checklist and review</p>
                                            </div>
                                        </div>
                                        <div class="cbox-1 ico-15 ml-0 mb-1">
                                            <div class="ico-wrap">
                                                <div class="cbox-1-ico">
                                                    <span class="success-check">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cbox-1-txt">
                                                <p class="s-12 mt-0 w-500 text-dark mb-0"> Access to 10+ NBFC partners</p>
                                            </div>
                                        </div>
                                        <div class="cbox-1 ico-15 ml-0 mb-1">
                                            <div class="ico-wrap">
                                                <div class="cbox-1-ico">
                                                    <span class="success-check">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cbox-1-txt">
                                                <p class="s-12 mt-0 w-500 text-dark mb-0"> Simple, fully digital process</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12 mt-3">
                                            <div class="border border-warning p-3 bg--yellow-200 r-10 mb-0">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <i class="fas fa-shield-alt me-2"></i>
                                                    </div>
                                                    <div>

                                                        <p class="s-14 my-0"><strong>Transparent service fee</strong> <br>Pays for agent assistance only. It doesn’t guarantee approval, rate or disbursal.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <ul class="d-flex gap-2 mt-20 mb-0 flex-wrap">
                                            <li>
                                                <div class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                                    <div class="cbox-1-ico rounded-pill fa-sm">

                                                        Personal loan
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                                    <div class="cbox-1-ico rounded-pill fa-sm">
                                                        Business loan
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                                    <div class="cbox-1-ico rounded-pill fa-sm">

                                                        Collateral-free options
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                                    <div class="cbox-1-ico rounded-pill fa-sm ">

                                                        Eligibility check
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                                    <div class="cbox-1-ico rounded-pill fa-sm">

                                                        Flexible tenure
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="cbox-1 ico-10 mb-md-0 mb-2 title-text-top d-inline-block rounded-pill py-1 px-3 bg-white w-600">
                                                    <div class="cbox-1-ico rounded-pill fa-sm">

                                                        NBFC partners
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>

                                    </div>
                                    <div class="ct-03 py-0 statistic-section division">

                                        <div class="statistic-5-wrapper">
                                            <div class="row row-cols-2 row-cols-md-3">
                                                <div class="col sec-1 py-20">
                                                    <div id="sb-5-1" class="text-center mb-0">
                                                        <div class="statistic-block">
                                                            <div class="statistic-digit">
                                                                <h4 class="s-20 w-700 mb-2">
                                                                    <span class="count-element color--black">5000</span>+
                                                                </h4>
                                                            </div>
                                                            <div class="statistic-txt">
                                                                <h5 class="s-12 w-500 text-secondary">Customers served</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col sec-2 py-20">
                                                    <div id="sb-5-3" class="text-center mb-0">
                                                        <div class="statistic-block">
                                                            <div class="statistic-digit">
                                                                <h4 class="s-20 w-700 mb-2">
                                                                    <span class="count-element color--black">10</span>+
                                                                </h4>
                                                            </div>
                                                            <div class="statistic-txt">
                                                                <h5 class="s-12 w-500 text-secondary">NBFC partners </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col sec-3 py-20">
                                                    <div id="sb-5-2" class="text-center mb-0">
                                                        <div class="statistic-block">
                                                            <div class="statistic-digit">
                                                                <h4 class="s-20 w-700 mb-2">
                                                                    <span class="count-element color--black">10</span>L+
                                                                </h4>
                                                            </div>
                                                            <div class="statistic-txt">
                                                                <h5 class="s-12 w-500 text-secondary">Loans enabled</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="border border-success p-3 bg--green-100 r-10 mb-0">
                                            <h6 class="w-600 s-14 mb-2">Our promise to you</h6>
                                            <div class="cbox-1 ico-15 ml-0 mb-1">
                                                <div class="ico-wrap">
                                                    <div class="cbox-1-ico">
                                                        <span class="success-check">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="cbox-1-txt">
                                                    <p class="s-12 mt-0 w-500 text-dark mb-0"> The fee is only for the agent service, never a lender fee</p>
                                                </div>
                                            </div>
                                            <div class="cbox-1 ico-15 ml-0 mb-1">
                                                <div class="ico-wrap">
                                                    <div class="cbox-1-ico">
                                                        <span class="success-check">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="cbox-1-txt">
                                                    <p class="s-12 mt-0 w-500 text-dark mb-0"> You become eligible or your payment will be refunded</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mt-3">
                                        <li class="border p-2 r-10">
                                            <p class="s-14 mt-0 w-500 text-dark mb-0">Is it a loan fee?</p>
                                        </li>
                                    </ul>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-sm btn--theme hover--tra-black"
                                            id="submit-btn">Buy Now</button>
                                    </div>

                                </label>

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
        // Set initial value based on the checked radio button
        updateOrderAmount();

        // Listen for the change event on the radio buttons with the class .plan-card
        $('input[name="plan"]').change(function() {
            updateOrderAmount();
        });

        // Function to update the order amount based on the selected radio button
        function updateOrderAmount() {
            // Get the value of the selected radio button
            var selectedPlan = $('input[name="plan"]:checked').val();

            // Determine the base price of the selected plan
            var baseAmount = 0;
            if (selectedPlan == "1") {
                baseAmount = {
                    {
                        $selfApply - > inOffer ? $selfApply - > offeramount : $selfApply - > amount
                    }
                }; // Set price for Super Saver
            } else if (selectedPlan == "2") {
                baseAmount = {
                    {
                        $hireAgent - > inOffer ? $hireAgent - > offeramount : $hireAgent - > amount
                    }
                }; // Set price for Standard
            }

            // Calculate the total amount including 18% GST
            var gst = 0.18;
            var totalAmount = baseAmount + (baseAmount * gst);

            // Use Math.floor to round down the total amount
            var finalAmount = totalAmount;
            $('#submit-btn').text('Purchase Plan: ₹' + Math.floor(baseAmount));
            // Update the hidden input field with the final amount
            $('#order_amount').val(finalAmount);
        }
    });
    var owl = $('.buyNow-carousel');
    owl.owlCarousel({
        items: 5,
        loop: true,
        autoplay: true,
        navBy: 1,
        nav: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 4
            },
            550: {
                items: 4
            },
            767: {
                items: 5
            },
            768: {
                items: 5
            },
            991: {
                items: 5
            },
            1000: {
                items: 5
            }
        }
    });
</script>
@endpush