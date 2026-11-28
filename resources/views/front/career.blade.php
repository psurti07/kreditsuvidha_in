@extends('layouts.front')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
<section class="page-hero-section">
    <div class="page-hero-section-overlay bg--blue-500 bg--scroll">
        <div class="container">
            <div class="row d-flex align-items-center">

              
                <div class="col-md-6 col-lg-6 mb-lg-0 mb-3 mt-md-0 mt-3">

                    <div class="me-md-4 me-0">
                        <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                            <div class="cbox-1-ico rounded-pill d-flex color--green-500 s-10">
                                <i class="fas fa-shield-alt me-2 fa-xs color--green-500 lh-lg"></i><span>Legal
                            </div>
                        </div>
                        <h2 class="s-45 w-700 color--white">Career <span class="color--green-500"> with us</span> </h2>


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

<section id="join-our-team" class="py-40 careers-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    @if($data->isNotEmpty())
                    <h2 class="s-28 mb-5">Current Job Vacancies</h2>
                    <p class="color--blue-500  mt-0">See where you fit in.</p>
                    @else
                    <h2 class="">Sorry!!</h2>
                    <p class="color--grey">We currently do not have any vacancies.</p>
                    <p class="color--grey">Kindly send your updated CV to: info@kreditsuvidha.in. We will contact you if your profile matches any of our future requirements</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            @foreach($data as $career)
            <div class="col">
                <div class="role-box hover--green-400 r-10">
                    <a href="{{ url('apply-career/'.$career['slug']) }}">
                        <span>Position : </span>
                        <h5 class="w-700">{{ $career['title'] }}</h5>
                        <p>Code : {{ $career['slug'] }}</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<hr class="divider">

<!-- benefits and perks -->
<section id="features-11" class="py-40 features-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">Plenty of Perks!</h2>
                    <p class="s-16 color--blue-500 mt-0">Become a part of a workforce that’s creating milestones. Every day!</p>
                </div>
            </div>
        </div>
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-2 g-4">
                <div class="col">
                    <div class="fbox-11 fbox--hover fb-1 r-12 w-100 bg--green-100 p-4 mb-0">
                        <div class="fbox-ico-wrap mb-md-0 mb-3">
                            <div class="fbox-ico ico-40 mb-0">
                                <div class="shape-ico">
                                    <span class="flaticon-profits color--green-500"></span>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-txt">
                            <h6 class="s-18 w-700">Competitive Salary</h6>
                            <p>We know your worth and we’ll make sure you’re paid what you deserve!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-11 fbox--hover fb-1 r-12 w-100 bg--green-100 p-4 mb-0">
                        <div class="fbox-ico-wrap mb-md-0 mb-3">
                            <div class="fbox-ico ico-40 mb-0">
                                <div class="shape-ico">
                                    <span class="flaticon-workflow-2 color--green-500"></span>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-txt">
                            <h6 class="s-18 w-700">Growth-Oriented Culture</h6>
                            <p>We’ll bring out the best in you so that your growth is nurtured impeccably.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-11 fbox--hover fb-1 r-12 w-100 bg--green-100 p-4 mb-0">
                        <div class="fbox-ico-wrap mb-md-0 mb-3">
                            <div class="fbox-ico ico-40 mb-0">
                                <div class="shape-ico">
                                    <span class="flaticon-prioritize color--green-500"></span>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-txt">
                            <h6 class="s-18 w-700">Building Leaders</h6>
                            <p>We love identifying the leader in you! And provide you with some awesome leadership opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-11 fbox--hover fb-1 r-12 w-100 bg--green-100 p-4 mb-0">
                        <div class="fbox-ico-wrap mb-md-0 mb-3">
                            <div class="fbox-ico ico-40 mb-0">
                                <div class="shape-ico">
                                    <span class="flaticon-money color--green-500"></span>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-txt">
                            <h6 class="s-18 w-700">Appreciation &amp; Rewards</h6>
                            <p>Your persistence and hard work will always be acknowledged and rewarded!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-11 fbox--hover fb-1 r-12 w-100 bg--green-100 p-4 mb-0">
                        <div class="fbox-ico-wrap mb-md-0 mb-3">
                            <div class="fbox-ico ico-40 mb-0">
                                <div class="shape-ico">
                                    <span class="flaticon-fast-food color--green-500"></span>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-txt">
                            <h6 class="s-18 w-700">Positive Workplace</h6>
                            <p>We strongly believe in a non-discriminatory office environment, free of office politics.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-11 fbox--hover fb-1 r-12 w-100 bg--green-100 p-4 mb-0">
                        <div class="fbox-ico-wrap mb-md-0 mb-3">
                            <div class="fbox-ico ico-40 mb-0">
                                <div class="shape-ico">
                                    <span class="flaticon-diamond color--green-500"></span>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-txt">
                            <h6 class="s-18 w-700">Every Voice Matters</h6>
                            <p>We value every voice. No hierarchy barriers; all ideas and feedback are always welcome.</p>
                        </div>
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