<x-web-layout>
    @section('title', $item->title)
    <section class="page-title page-title-13 pb-5" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section"><img src="{{ asset('assets/images/page-titles/13.jpg') }}" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="title text-center">
                            <h1 class="title-heading">{{ $item->title }}</h1>
                            <ol class="breadcrumb breadcrumb-light d-flex
                    justify-content-center">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('web.index') }}">{{ __('response.home') }}</a></li>
                                <li class="breadcrumb-item"><a
                                        href="javascript:void(0)">{{ __('response.our_services') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-single" id="project-single">
        <div class="project-intro">
            <div class="container">
                <div class="row">
                    <div class="project-img"> <img src=" {{ asset($item->image) }}" alt="image" />
                        {{-- <div class="project-panel">
                            <div class="project-panel-holder">
                                <div class="project-content">
                                    <div class="project-cat"><a href="projects-standard.html">finance</a><a
                                            href="projects-standard.html">supply chain</a></div>
                                    <div class="project-title">
                                        <h4><a href="projects-standard.html">Expanding The Solar
                                                Supply Chain Finance Program</a></h4>
                                    </div>
                                    <div class="project-desc">
                                        <p>We has announced the expansion of its solar supply
                                            chain finance (SCF) program for PV module
                                            manufacturers...</p>
                                    </div>
                                    <div class="project-more"><a class="btn btn--primary"
                                            href="request-quote.html">request a quote <i
                                                class="energia-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="project-overview project-overview-1">
            <div class="container">
                <div class="heading heading-20">
                    <div class="row">
                        <div class="col-12 ">
                            <p class="heading-subtitle">{{ $item->header }}</p>
                            <h2 class="heading-title">{{ $item->title }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @foreach ($item->paragraphs as $key => $value)
                                <p class="heading-desc">{{ $value }}</p>
                            @endforeach
                        </div>
                        <div class="btn-group pt-4">
                            @if ($item->url)
                            <div class="entry-more"> <a
                                class="btn btn--primary btn-bordered"
                                href="{{ $item->url }}" target="__blank">{{ $item->url_text }}<i class="energia-arrow-right"></i></a>
                        </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-image-carousel projects projects-gallery pb-5">
            <div class="carousel owl-carousel carousel-dots carousel-navs" data-slide="4" data-slide-rs="3"
                data-center="data-center" data-autoplay="true" data-nav="true" data-dots="true" data-space="30"
                data-loop="true" data-speed="800">
                @foreach ($item->images as $key => $value)
                    <div class=" ">
                        <div class="project-panel">
                            <div class="project-panel-holder">
                                <div class="project-img"><img
                                        src="{{ asset($value) }}"
                                        alt="item" />
                                    <div class="project-hover">
                                        <div class="project-action">
                                            <div class="project-zoom"><i class="far fa-eye"></i><a
                                                    class="img-gallery-item"
                                                    href="{{ asset($value) }}"
                                                    title="wind
                            generators item"></a></div>
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
</x-web-layout>
