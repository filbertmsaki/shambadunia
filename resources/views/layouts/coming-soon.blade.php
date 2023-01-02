<x-web-layout>
    @section('title',__('response.coming_soon'))
    <div class="page-content">

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Error 403</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-content page-notfound-outer">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-6">
                            <div class="page-notfound text-center">
                                <form method="post">
                                    <strong class="text-uppercase">{{ __('response.error') }}</strong>
                                    <span>{{ __('response.coming_soon') }}</span>
                                    <a href="{{ route('web.index') }}" class="site-button ">{{ __('response.go_to_home') }}<i class="fa fa-angle-double-right"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="page-notfound-left text-center bg-gray">
                                <div class="constrot-strip"></div>
                                <span class="flaticon-plumber-working"></span>
                                <div class="constrot-strip"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
</x-web-layout>
