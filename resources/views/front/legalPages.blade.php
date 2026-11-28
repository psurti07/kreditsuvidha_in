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
            <div class="row align-items-center">
                <!-- <div class="col-md-12 text-center">
                    <div class="left-column">
                        <h2 class="s-28 mb-5"></h2>
                        <p class="s-16 mt-0"></p>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-6 mb-lg-0 mb-3 mt-md-0 mt-3">

                    <div class="me-md-4 me-0">
                        <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                            <div class="cbox-1-ico rounded-pill d-flex color--green-500 s-10">
                                <i class="fas fa-shield-alt me-2 fa-xs color--green-500 lh-lg"></i><span>Legal
                            </div>
                        </div>
                        <h2 class="s-45 w-700 color--white">{{ $mainTitle }} </h2>


                        <p class="s-16 color--grey mb-20">{{ $subTitle }}</p>
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
                    <div class="hero-7-img d-flex justify-content-center align-items-start mt-0">
                        <img src="{{ asset('front/images/home-img.png') }}" alt="kreditsuvidha" class="img-fluid p-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="privacy-page" class="py-40 division">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="border p-4 r-16 bg-white">
                    {!! $description !!}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-hero-section">
    <div class="bg--blue-500 bg--scroll py-50">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-md-12 text-center">
                    <div class="left-column">
                        <h2 class="s-28 mb-5"></h2>
                        <p class="s-16 mt-0"></p>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-6 mb-lg-0 mb-3 mt-md-0 mt-3">

                    <div class="me-md-4 me-0">
                        <div class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                            <div class="cbox-1-ico rounded-pill d-flex color--green-500 s-10">
                                <i class="fas fa-shield-alt me-2 fa-xs color--green-500 lh-lg"></i><span>Contact
                            </div>
                        </div>
                        <h2 class="s-45 w-700 color--white">Questions about your privacy? </h2>
                        <p class="s-16 color--grey mb-20">Our team will respond to every inquiry or complaint and resolve it expeditiously.</p>
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
                    <div class="row gy-3 gx-3">
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item mb-0">
                                    <div class="address-text d-flex p-3 r-14">
                                        <div class="card-small-icon bg--purple-500">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                 <i class="fas fa-map-marker-alt text-dark"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="color--grey">Address</h6>
                                            <p class="address-txt color--white mb-0">{{ env('COMPANY_ADDRESS') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item mb-0">


                                    <div class="address-text d-flex p-3 r-14">
                                        <div class="card-small-icon bg--purple-500">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                         <i class="fas fa-phone-alt text-dark"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="color--grey"> Customer Support </h6>
                                            <p class="address-txt color--white mb-0"><a
                                                    href="tel:{{ str_ireplace(" ","",env('COMPANY_MOBILE')) }}">{{ env('COMPANY_MOBILE') }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="contact-form-left">
                                <div class="address-item mb-0">


                                    <div class="address-text d-flex p-3 r-14">
                                        <div class="card-small-icon bg--purple-500">
                                            <div class="fbox-ico ico-25 mb-0">
                                                <div class="shape-ico text-dark">
                                                       <i class="fas fa-envelope text-dark"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="color--grey"> Mail Us </h6>
                                            <p class="address-txt color--white"><a
                                                    href="mailto:{{ str_ireplace(" ","",env('COMPANY_SUPPORT_MAIL')) }}">{{ env('COMPANY_SUPPORT_MAIL') }}</a>
                                            </p>

                                        </div>
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
@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush