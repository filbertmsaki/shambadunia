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

    <section class="careers careers-1" id="careers">
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
                    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1"
                        data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                        data-speed="800">

                        @foreach (trans()->get('response.services_list') as $key => $value)
                            <div class="career-item">
                                <div class="career-item-wrap">
                                    <div class="career-content">
                                        <h4 class="career-title">{{ $value['title'] }}</h4>
                                        @if ($value['paragraphs'])
                                            @foreach ($value['paragraphs'] as $key2 => $value2)
                                                @if ($loop->first)
                                                    @if (strlen($value2) <= 100)
                                                        <p class="career-desc">{!! $value2 !!}</p>
                                                    @else
                                                        <p class="career-desc">{!! substr($value2, 0, 100) . '...' !!}</p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif


                                        <a class="career-more btn btn--secondary"
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

    <section class="about about-2" id="about-2">
        <div class="about-wrapper">

            <div class="video-wrapper">
                <div class="video video-2" id="video-2">
                    <div class="bg-section"><img src="assets/images/video/2.jpg" alt="background" /></div><a
                        class="popup-video btn-video
                btn-video-2"
                        href="../../www.youtube.com/watch1ac3.html?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>

                </div>

            </div>

            <div class="about-block-wrapper">
                <div class="about-block">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">Complete
                            Commercial And Residential Solar Systems</p>
                        <h2 class="heading-title">The Pioneers World Of Solar And
                            Renewable Energy!</h2>
                        <p class="heading-desc">Our solar programs encompass a broad
                            range of material sourcing, trade financing and inventory
                            management services to help customers become more profitable
                            by optimizing working capital and increasing liquidity.</p>
                        <div class="signature-block"><a class="btn btn--secondary" href="page-about.html">read more
                                <i class="energia-arrow-right"></i></a>
                            <div class="signature-body">
                                <h6>michael brian</h6>
                                <p>co founder</p><img class="signature-img" src="assets/images/signature/1.png"
                                    alt="signature" />
                            </div>
                        </div>
                        <div class="advantages-list-holder">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p>How can we meet the growing demand for electricity
                                        while protecting our climate?</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul class="list-unstyled advantages-list">
                                        <li>Reliabe and performance</li>
                                        <li>In-time manufacturing</li>
                                        <li>Solar material financing</li>
                                    </ul>
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
