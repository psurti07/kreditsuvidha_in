@extends('layouts.front')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
<section class="page-hero-section">
    <div class="page-hero-section-overlay  bg--blue-500 bg--scroll">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-md-12 text-center">
                    <div class="left-column">
                        <span class="section-id"></span>
                        <h2 class="s-28 mb-5">Frequently Asked Questions</h2>
                        <p class="s-16 mt-0">Find quick answers to common questions about loans,
                            eligibility, documents, approvals, and more.</p>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-6 mb-lg-0 mb-3 mt-md-0 mt-3">

                    <div class="me-md-4 me-0">
                        <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                            <div class="cbox-1-ico rounded-pill d-flex color--green-500 s-10">
                                <i class="fas fa-shield-alt me-2 fa-xs color--green-500 lh-lg"></i><span>Legal
                            </div>
                        </div>
                        <h2 class="s-45 w-700 color--white">Frequently <span class="color--green-500">Asked Questions</span> </h2>


                        <p class="s-16 color--grey mb-20">How Kreditsuvidha collects, uses, shares and protects your personal information — written in plain language so you always know where you stand.</p>
                        <div class="column-right content-section-main mb-4 gx-5">

                            <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="d-flex">
                                    <span class="flaticon-check end-0 color--green-500"> </span>
                                    <div class="cbox-1-txt ms-2 text-start">
                                        <p class="my-0 color--grey fa-xs lh-lg">About 6 min read</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="d-flex">
                                    <span class="flaticon-check end-0 color--green-500"> </span>
                                    <div class="cbox-1-txt ms-2 text-start">
                                        <p class="my-0 color--grey fa-xs lh-lg">14 sections</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="d-flex">
                                    <span class="flaticon-check end-0 color--green-500"> </span>
                                    <div class="cbox-1-txt ms-2 text-start">
                                        <p class="my-0 color--grey fa-xs lh-lg">Applies to all users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="hero-7-img d-flex justify-content-center align-items-start">
                        <img src="{{ asset('front/images/home-img.png') }}" alt="kreditsuvidha" class="img-fluid p-0">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="faqs-3" class="py-80 faqs-section">
    <div class="container">
        <div class="faqs-3-questions">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="accordion-wrapper r-16 overflow-hidden border">
                        <ul class="accordion">
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">1: What types of expenses can a personal loan cover?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>A personal loan can be used to cover almost any personal financial need,
                                                such as medical bills, education, home improvements, and debt
                                                consolidation.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">2: What are the eligibility requirements for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The eligibility requirements for a personal loan are as follows:</p>
                                            <p><strong>For Salaried Professionals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 Years </p>
                                                <p>&bull; Minimum Salary: Rs.15,000 Per Month (Should reflect in bank
                                                    statement) </p>
                                                <p>&bull; Minimum Job Duration: 1 Year</p>
                                            </div>
                                            <p><strong>For Self-Employed Individuals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 Years</p>
                                                <p>&bull; Income Tax Return Of Minimum 1 Year</p>
                                                <p>&bull; Minimum Business Duration: 1 Year</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">3: What are the documents needed to apply for a personal loan?
                                    </h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The following are the general documents required when applying for a
                                                personal loan.</p>
                                            <p><strong>For Salaried:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement</p>
                                                <p>&bull; Income Proof: Salary Slips or Form 16</p>
                                            </div>
                                            <p><strong>For Self-Employed:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement</p>
                                                <p>&bull; Balance Sheet</p>
                                                <p>&bull; Income Computation</p>
                                                <p>&bull; Service Tax Registration, License, Registration Certificate
                                                </p>
                                                <p>&bull; Income Tax Returns</p>
                                            </div>
                                            <p>Based on your profile and the guidelines, the lender may request
                                                additional documents.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">4. Is credit score a factor in personal loan approval?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Yes, your credit score is an important factor in the loan application
                                                process. It is one of the most important factors lenders use to
                                                determine your creditworthiness.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">5. How can I improve my chances of receiving a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>To improve your chances, maintain a good credit score, have consistent
                                                income, and provide accurate documentation during the application
                                                process.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">6. Do personal loans provide any tax benefits?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Personal loans do not offer any direct tax advantages. However, if you
                                                use a personal loan to invest in your business, renovate your home, or
                                                fund your education, you may be able to deduct the interest you pay. For
                                                more information, please contact your CA or tax advisor.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500">7. In addition to credit scores, what other factors do lenders
                                        consider when approving personal loans?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>In addition to credit score, lenders consider the applicant's age,
                                                income, and job stability.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush