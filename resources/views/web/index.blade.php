<x-web-layout>
    @section('title', 'Home Page')
    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
                data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                @foreach (trans()->get('response.sliders') as $key => $value)
                    <div class="slide bg-overlay bg-overlay-dark-slider-2">
                        <div class="bg-section"><img src="{{ asset($value['image']) }}" alt="Background" /></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide-content">
                                        <h1 class="slide-headline">{{ $value['title'] }}</h1>
                                        <p class="slide-desc">
                                            {{ $value['paragraph'] }}
                                        </p>
                                        <div class="slide-action"><a class="btn btn--primary" href="{{ $value['url'] }}"
                                                target="__blank">
                                                <span>{{ $value['url_text'] }}</span><i
                                                    class="energia-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about about-3" id="about-3">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="heading heading-12">
                        <p class="heading-subtitle">{{ __('response.innovation_development_of_agriculture_solutions') }}
                        </p>
                        <h2 class="heading-title">{{ __('response.about_shambadunia') }}</h2>
                    </div>
                    <div class="about-block">
                        <div class="block-left">
                            <p class="paragraph">{{ __('response.about_company.paragraphs.0') }}</p>
                            <p>{{ __('response.about_company.paragraphs.1') }}</p>
                            <div class="signature-block"><a class="btn btn--secondary"
                                    href="{{ route('web.about_us') }}">{{ __('response.read_more') }}
                                    <i class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="{{ asset('images/mkulima-awards.jpg') }}"
                                    alt="about Image" /></div>
                        </div>
                        <div class="counter counter-4">
                            <div class="counter-num">
                                <h6>Mkulima Awards </h6>
                                <span style="margin-left: 5px;"> 20</span><span class="counting"
                                    data-counterup-nums="25">23</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-web.why-choose-us-component />
    <section class="careers careers-1" style="padding-bottom:5px;" id="careers">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-19 text-center">
                        <h2 class="heading-title">{{ __('response.our_service') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="carousel owl-carousel sm-services carousel-dots" data-slide="3" data-slide-rs="1"
                        data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                        data-speed="800">
                        @foreach (trans()->get('response.services_list') as $key => $value)
                            <div class="sm-service-item">
                                <div class="sm-service-content ">
                                    <div class="sm-service-title">
                                        <h4> {{ $value['title'] }}</h4>
                                    </div>
                                    <div class="service-bio">
                                        @if ($value['paragraphs'])
                                            @foreach ($value['paragraphs'] as $key2 => $value2)
                                                @if ($loop->first)
                                                    @if (strlen($value2) <= 150)
                                                        <p>{!! $value2 !!}</p>
                                                    @else
                                                        <p>{!! substr($value2, 0, 150) . '...' !!}</p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="service-more"> <a class="btn btn--white btn-bordered"
                                            href="{{ route('web.services.show', $key) }}">{{ __('response.read_more') }}
                                            <i class="energia-arrow-right"></i></a>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="{{ asset('images/kmae.jpg') }}" alt="about Image" /></div>
                        </div>
                        <div>
                            <div class="counter">
                                <div class="counter-icon"> <i class="flaticon-033-plug"></i></div>
                                <div class="counter-num"> <span class="counting" data-counterup-nums="3">3</span>
                                    <p></p>
                                </div>
                                <div class="counter-name">
                                    <h6>Events</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg"> &ldquo;Kilimo ni Biashara, Wekeza Ikulipe </p>
                        <h2 class="heading-title">Kilimo Marathon, Awards & Expo</h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="block-left">
                                    <p class="paragraph">2023 Will be the third time for this prestigious agro-sports
                                        event which is carried out every year in Morogoro region since 2021.!</p>
                                    <p>This is the biggest agro sports event in East Africa and incorporates running,
                                        trekking and cycling. </p>
                                    <p>In this marathon you will not run on your own but together with your friends,
                                        colleagues or family.</p>
                                    <a class="btn btn--secondary" href="http:://kilimomarathon.co.tz"
                                        target="__blank">Visit Site
                                        <i class="energia-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="block-right">
                                    <div class="prief-set">
                                        <p>Except for Marathon runners, Exhibitors and other service providers, there
                                            will be NO ENTRY FEE for anybody who wishes to enter into the exhibition.
                                        </p>
                                        <ul class="list-unstyled advantages-list">
                                            <li>Kilimo Marathon</li>
                                            <li>Mkulima Award</li>
                                            <li>Kilimo Expo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <x-web.clients-component />
</x-web-layout>
