<x-web-layout>
    @section('title', __('response.gallery'))

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('web.index') }}"><i class="fa fa-home"></i> {{ __('response.home') }}</a></li>
                    <li>{{ __('response.gallery') }}</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB  ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">

                <!-- PAGINATION TOP START -->
                <div class="filter-wrap p-tb15">
                    <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        @foreach ($gallery as $key => $value)
                            <li><a data-filter=".{{ $key }}" href="#">{{ $key }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <!-- PAGINATION END -->

                <!-- GALLERY CONTENT START -->

                <div class="portfolio-wrap mfp-gallery no-col-gap row ">

                    @foreach ($gallery as $key => $value)
                        <!-- COLUMNS 1 -->
                        @foreach ($value as $item)
                            <div class="masonry-item {{ $key }} col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx p-a15">
                                    <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                        <a href="portfolio-detail.html">
                                            <img src="{{ asset($item) }}" alt="" loading="lazy">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <a href="{{ asset($item) }}" class="mfp-link">
                                                    <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach



                </div>

            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
</x-web-layout>
