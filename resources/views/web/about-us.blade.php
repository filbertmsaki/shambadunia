<x-web-layout>
    @section('title', __('response.about_us'))
    <section class="page-title page-title-1" id="page-title">
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('web.index') }}">{{ __('response.home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('response.about_us') }}</li>
                </ol>

            </div>
        </div>
    </section>

    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="{{ asset('images/IMG_6837.jpg') }}" alt="about Image" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">{{ __('response.about_company.title') }}</p>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-left">
                                    @foreach (trans()->get('response.about_company.paragraphs') as $key => $value)
                                        <p style="margin-bottom: 6px">{{ $value }}</p>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1">
        <div class="bg-section"> <img src="assets/images/background/2.jpg" alt="Background" /></div>
        <div class="container">
            <div class="heading heading-2 heading-light heading-light2">

                <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                        <h2 class="heading-title">{{ __('response.why_choose_us') }}</h2>
                    </div>

                </div>

            </div>

            <div class="row d-flex flex-wrap">
                <div class="col-md-4 d-flex ">
                    <div class="feature-panel-holder  " data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fa fa-bullseye"></i></div>
                            <div class="feature-content">
                                <h4>{{ __('response.our_mission.title') }}</h4>
                                <p>{{ __('response.our_mission.text') }}</p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 d-flex ">
                    <div class="feature-panel-holder " data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fa fa-eye"></i></div>
                            <div class="feature-content">
                                <h4>{{ __('response.our_vision.title') }}</h4>
                                <p>{{ __('response.our_vision.text') }}</p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4 d-flex ">
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fa fa-hand-holding-heart"></i></div>
                            <div class="feature-content">
                                <h4>{{ __('response.our_value.title') }}</h4>
                                <p>{{ __('response.our_value.text') }}</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <x-web.clients-component />

</x-web-layout>
