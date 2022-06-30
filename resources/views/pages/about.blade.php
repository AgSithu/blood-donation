@extends('layout')

@section('title',__('aboutPage.tabTitle', ["websiteTitle" => __('general.websiteTitle')]))

@section('head')
    <link href="{{ asset('css/aboutPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cta.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stats.css') }}" rel="stylesheet">
@endsection

@section('body')

    <x-main-nav-bar aboutActive="active"/>

    <div class="aboutPageHero bg-dark d-flex flex-column align-items-center justify-content-center mb-5">
        <h1 class="text-white display-4">{{ __('aboutPage.title') }}</h1>
        <p class="text-white text-center ourMissionDescription">{{ __('aboutPage.description') }}</p>
    </div>

    <div>
        <div class="container col-xxl-8 px-4 py-5 hero">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6 mt-xl-0">
                    <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">{{ __('aboutPage.whoAreWe') }}</h1>
                    <p class="lead text-center text-lg-start">{{ __('aboutPage.whoAreWeDescription') }}</p>
                </div>
                <div class="d-none d-lg-block col-12 col-lg-6 d-flex flex-column align-items-center mb-5">
                    <img src="{{ asset('/imgs/whoAreWe.svg') }}" class="d-lg-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5 hero">
            <div class="row align-items-center g-5 mb-5">
                <div class="d-none d-lg-block col-12 col-lg-6 d-flex flex-column align-items-center mb-5">
                    <img src="{{ asset('/imgs/motivation.svg') }}" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
                </div>

                <div class="col-lg-6 mt-xl-0">
                    <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">{{ __('aboutPage.motivation') }}</h1>
                    <p class="lead text-center text-lg-start">{{ __('aboutPage.motivationDescription') }}</p>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5 hero">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6 mt-xl-0">
                    <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">{{ __('aboutPage.vision') }}</h1>
                    <p class="lead text-center text-lg-start">{{ __('aboutPage.visionDescription') }}</p>
                </div>

                <div class="d-none d-lg-block col-12 col-lg-6 d-flex flex-column align-items-center mb-5">
                    <img src="{{ asset('/imgs/vision.svg') }}" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <x-cta />
    <x-stats />
    <x-footer />
@endsection

@section('beforeBodyEnd')
@endsection