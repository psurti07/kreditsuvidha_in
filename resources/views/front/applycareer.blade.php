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
                            <div
                                class="cbox-1 ico-10 mb-3 bg--blue-300 d-inline-block rounded-pill py-1 px-2 title-top-wrap">
                                <div class="cbox-1-ico rounded-pill d-flex color--green-500 s-10">
                                    <i class="fas fa-shield-alt me-2 fa-xs color--green-500 lh-lg"></i><span>career
                                </div>
                            </div>
                            <h2 class="s-45 w-700 color--white">{{ $data->title ?? '' }}</h2>


                            <p class="s-16 color--grey mb-20"><span class="flaticon-time cicon"></span>&nbsp;Full Time
                                &nbsp;|&nbsp; <span class="flaticon-bookmark cicon"></span>&nbsp;{{ $data->slug }}</p>
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

    <section id="contacts" class="py-60 gr--white contacts-section division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6><b>Job Description :</b></h6>
                            <div class="mt-2">
                                {!! $data->descriptions !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{ route('front.careerPost') }}" method="post" class="contact-form career-form"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="applyfor" value="{{ $data->id }}" class="form-control"
                                    required>
                                <input type="hidden" name="slug" value="{{ $data->slug }}" class="form-control"
                                    required>
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="form-group form-floating s-15">
                                            <input id="firstname" type="text" name="firstname" class="form-control s-15"
                                                placeholder="" />
                                            <label for="firstname">First Name *</label>
                                            @component('components.ajax-error', ['field' => 'firstname'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-floating s-15">
                                            <input id="lastname" type="text" name="lastname" class="form-control s-15"
                                                placeholder="" />
                                            <label for="lastname">Last Name *</label>
                                            @component('components.ajax-error', ['field' => 'lastname'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-floating s-15">
                                            <input id="email" type="email" name="email" class="form-control s-15"
                                                placeholder="" />
                                            <label for="email">Email *</label>
                                            @component('components.ajax-error', ['field' => 'email'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-floating s-15">
                                            <input id="mobile" type="text" name="mobile" class="form-control s-15"
                                                placeholder="" minlength="10" maxlength="10" inputmode="numeric">
                                            <label for="Mobile">Mobile *</label>
                                            @component('components.ajax-error', ['field' => 'mobile'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-floating s-15">
                                            <input id="city" type="text" name="city" class="form-control s-15"
                                                placeholder="" />
                                            <label for="city">City *</label>
                                            @component('components.ajax-error', ['field' => 'city'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-floating s-15">
                                            <input id="qualifications" type="text" name="qualifications"
                                                class="form-control s-15" placeholder="" />
                                            <label for="qualifications">Qualifications *</label>
                                            @component('components.ajax-error', ['field' => 'qualifications'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group form-floating s-15">
                                            <textarea id="experience" name="experience" style="height:100px" class="form-control s-15" placeholder=""></textarea>
                                            <label for="qualifications">Your Experience *</label>
                                            @component('components.ajax-error', ['field' => 'experience'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group form-floating s-15">
                                            <textarea id="keyskills" name="keyskills" style="height:100px" class="form-control s-15" placeholder=""></textarea>
                                            <label for="keyskills">Your Key Skills *</label>
                                            @component('components.ajax-error', ['field' => 'keyskills'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group form-floating s-15">
                                            <input type="file" id="resume" name="resume"
                                                class="form-control s-15" placeholder="" accept="image/*,.pdf">
                                            <label for="reume">Resume *</label>
                                            @component('components.ajax-error', ['field' => 'resume'])
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-btn text-right">
                                        <button type="submit"
                                            class="apply-btn s-15 btn-sm btn btn--theme hover--theme submit">Apply
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider">
@endsection
@push('script-src')
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.career-form').submit(function(event) {
                let status = document.activeElement.innerHTML;
                event.preventDefault();
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
                            $('.apply-btn').html(
                                '<span class="spinner-border spinner-border-sm"></span> Apply Now '
                                );
                            $('.apply-btn').attr('disabled', true);
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
                                $('.apply-btn').html('Apply Now');
                                $('.apply-btn').attr('disabled', false);
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
                            $('.apply-btn').html('Apply Now');
                            $('.apply-btn').attr('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endpush
