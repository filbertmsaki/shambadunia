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
                                                    class="energia-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="{{ asset('images/image-running.jpg') }}"
                                    alt="about Image" /></div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="heading heading-1">
                        <h2 class="heading-title">{{ __('response.about_company.title') }}</h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-left">
                                    <p class="paragraph">{{ __('response.about_company.paragraphs.0') }}</p>
                                    <p>{{ __('response.about_company.paragraphs.1') }}</p>
                                    <p>{{ __('response.about_company.paragraphs.2') }}</p>
                                    <a class="btn btn--secondary"
                                        href="{{ route('web.about_us') }}">{{ __('response.read_more') }}<i class="energia-arrow-right"></i></a>
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
