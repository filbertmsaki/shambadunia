<x-web-layout>
    @section('title', $service->title)

    <div class="page-content">
        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('web.index') }}"><i class="fa fa-home"></i> {{ __('response.home') }}</a></li>
                    <li>{{ $service->title }}</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50 bg-gray">
            <div class="container">
                <!-- LEFT PART START -->
                <div class="row">
                    <div class="col-lg-4 col-md-8 m-b30">
                        <div class="wt-team-full-media">
                            <div class="wt-team-one bg-white p-a10">
                                <div class="wt-team-media">
                                    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-12 m-b30">
                        <div class="wt-info wt-team-full-info">
                            <h3 class="wt-title m-t0">{{ $service->title }}</h3>
                            <ul class="list-check secondry">
                                @if ($service->paragraphs)
                                    @foreach ($service->paragraphs as $key2 => $value2)
                                        <li>{{ $value2 }}</li>
                                    @endforeach
                                @endif
                            </ul>

                            @if ($service->play_store_link)
                            <a href="{{ $service->play_store_link }}" class="btn btn-sm btn-primary">{{ __('response.download') }} <i
                                class="fa fa-download"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-web-layout>
