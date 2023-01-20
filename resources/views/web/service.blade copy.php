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
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <!-- LEFT PART START -->
                @if ($service->lists)
                    <div class="row d-flex flex-wrap">
                        <h3 class="wt-title m-t0">{{ $service->title }}</h3>
                        @foreach ($service->lists as $key => $value)
                            <div class="col-md-4  m-b30 d-flex">
                                <div class="wt-box p-a20 border-1 bg-gray">
                                    <div class="wt-media">
                                        <a href="{{ route('web.service.more', ['service' => $id, 'key' => $key]) }}"><img
                                                src="{{ asset($value['image']) }}" alt=""></a>
                                    </div>
                                    <div class="wt-info">
                                        <h4 class="wt-title m-t20"><a
                                                href="{{ route('web.service.more', ['service' =>  $id, 'key' => $key]) }}">{!! substr($value['title'], 0, 50) !!}
                                            </a></h4>
                                        @if ($value['paragraphs'])
                                            @foreach ($value['paragraphs'] as $key2 => $value2)
                                                @if ($loop->first)
                                                    @if (strlen($value2) <= 80)
                                                        <p> {!! $value2 !!}</p>
                                                    @else
                                                        <p> {!! substr($value2, 0, 80) . '...' !!}</p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                        <div class="btn-group">
                                            <a href="{{ route('web.service.more', ['service' =>  $id, 'key' => $key]) }}"
                                                class="site-button">{{ __('response.read_more') }} <i
                                                    class="fa fa-angle-double-right"></i></a>
                                            {{-- <a href="{{ $value['play_store_link'] }}" class="btn btn-sm btn-primary">{{ __('response.download') }} <i
                                            class="fa fa-download"></i></a> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                @else
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


                                {{-- @if ($service->play_store_link)
                            <a href="{{ $service->play_store_link }}" class="btn btn-sm btn-primary">{{ __('response.download') }} <i
                                class="fa fa-download"></i></a>
                            @endif --}}
                            </div>
                        </div>
                    </div>

                @endif

            </div>
        </div>

    </div>
</x-web-layout>
