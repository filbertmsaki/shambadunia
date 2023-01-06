<x-web-layout>
    @section('title', __('response.our_services'))
    <div class="page-content  bg-white">
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('web.index') }}"><i class="fa fa-home"></i>{{ __('response.home') }}</a></li>
                    <li>{{ __('response.our_services') }}</li>
                </ul>
            </div>
        </div>
        <div class="section-full p-t80 p-b50  ">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">{{ __('response.our_services') }}</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row d-flex flex-wrap">
                        @foreach ($services as $key => $value)
                            <div class="col-md-4  m-b30 d-flex">
                                <div class="wt-box p-a20 border-1 bg-gray">
                                    <div class="wt-media">
                                        <a href="{{ route('web.service',$key) }}"><img src="{{ asset($value['image']) }}"
                                                alt=""></a>
                                    </div>
                                    <div class="wt-info">
                                        <h4 class="wt-title m-t20"><a href="{{ route('web.service',$key) }}">{!! substr($value['title'], 0, 50) !!} </a></h4>
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
                                            <a href="{{ route('web.service',$key) }}" class="site-button">{{ __('response.read_more') }} <i
                                                class="fa fa-angle-double-right"></i></a>
                                                {{-- <a href="{{ $value['play_store_link'] }}" class="btn btn-sm btn-primary">{{ __('response.download') }} <i
                                                    class="fa fa-download"></i></a> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>

    </div>

</x-web-layout>
