<x-web-layout>
    @section('title', $service->title)
    <section class="page-title page-title-13" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section"><img src="{{ asset('assets/images/page-titles/13.jpg') }}" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="title text-center">
                            <h1 class="title-heading">{{ $service->title }}</h1>
                            <ol class="breadcrumb breadcrumb-light d-flex
                    justify-content-center">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('web.index') }}">{{ __('response.home') }}</a></li>
                                <li class="breadcrumb-item"><a
                                        href="javascript:void(0)">{{ __('response.our_services') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($service->lists)
        <section class="blog blog-grid blog-grid-5" id="blog">
            <div class="container">
                <div class="row">
                    @foreach ($service->lists as $key => $value)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="blog-entry" data-hover="">
                                <div class="entry-content">
                                    <div class="entry-title">
                                        <h4><a
                                                href="{{ route('web.services.more', ['service' => $id, 'key' => $key]) }}">{{ $value['title'] }}</a>
                                        </h4>
                                    </div>
                                    <div class="entry-img-wrap">
                                        <div class="entry-img"><a
                                                href="{{ route('web.services.more', ['service' => $id, 'key' => $key]) }}"><img
                                                    src="{{ asset($value['image']) }}"
                                                    alt="{{ $value['title'] }}" /></a>
                                        </div>
                                    </div>
                                    <div class="entry-bio">
                                        @if ($value['paragraphs'])
                                            @foreach ($value['paragraphs'] as $key2 => $value2)
                                                @if ($loop->first)
                                                    @if (strlen($value2) <= 100)
                                                        <p> {!! $value2 !!}</p>
                                                    @else
                                                        <p> {!! substr($value2, 0, 100) . '...' !!}</p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="entry-more"> <a
                                            class="btn btn--white btn-bordered"
                                            href="{{ route('web.services.more', ['service' => $id, 'key' => $key]) }}">read
                                            more <i class="energia-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="service-single" id="service-single">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 order-1">
                        <div class="sidebar sidebar-service">
                            <div class="widget widget-services">
                                <div class="widget-title">
                                    <h5>{{ __('response.our_services') }}</h5>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled">
                                        @foreach (trans()->get('response.services_list') as $key => $value)
                                            <li><a href="{{ route('web.services.show', $key) }}">
                                                    <span>{{ $value['title'] }}</span><i
                                                        class="energia-arrow-right"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-0 order-lg-2">
                        <div class="service-entry">
                            <div class="entry-content">
                                <div class="entry-introduction entry-infos">
                                    <h5 class="entry-heading">{{ $service->title }}</h5>

                                    @if ($service->paragraphs)
                                        @foreach ($service->paragraphs as $key2 => $value2)
                                            <p class="entry-desc">{{ $value2 }}</p>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <x-web.clients-component />
    @endif
</x-web-layout>
