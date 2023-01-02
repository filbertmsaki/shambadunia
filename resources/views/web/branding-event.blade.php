<x-web-layout>
    @section('title', $item->title)
    <div class="page-content">
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('web.index') }}"><i class="fa fa-home"></i>{{ __('response.home') }}</a></li>
                    <li>{{ $item->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-full p-t80 p-b50 bg-white">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 col-md-8 m-b30">
                    <div class="about-com-pic">
                        <img src="{{ asset($item->image) }}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 m-b30 ">
                    <div class="section-head text-left">
                        <h2 class="text-uppercase">{{ $item->header }}</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        @foreach ($item->paragraphs as $key=>$value)
                        <p class="mb-1">{{ $value }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
