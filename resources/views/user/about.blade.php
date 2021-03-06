<!DOCTYPE html>
<html lang="en">
<head>
    @include('user/layouts/head')

</head>
<body>

    @include('user/layouts/header')

        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>@lang('About')</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">@lang('Home')</a></li>
                            <li>@lang('About')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-7">
                        <div class="about-text">
                            <h2>{{$general->about_title}}</h2>
                            <p>{!! clean($general->about_description) !!}</p>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <div class="about-pic-video">
                            <div class="ceo-holder">
                                <img class="about-video-img" src="{{ asset('public/user/img/about_image/about_us.png')}}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-s2-section">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-9">
                        <h3>{{$general->contact_header}}</h3>
                    </div>
                    <div class="col col-sm-3">
                        <div class="contact-btn">
                            <a href="{{route('user.contacts')}}" class="theme-btn-s4">@lang('Contact With Us')</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter-section">
            <h2 class="hidden">@lang('Newsletter')</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="newsletter">
                            <div class="newsletter-form">
                                 @include('includes.subscribemsg')
                                <form action="{{ route('sub-store') }}" method="post">
                                    @csrf
                                    <input type="text" class="form-control" name="email" placeholder="Subscrib Newsletter (Enter Email Address)">
                                    <button type="submit"><i class="ti-email"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @include('user/layouts/footer')

</body>
</html>