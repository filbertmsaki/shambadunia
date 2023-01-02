<x-web-layout>
    @section('title', __('response.about_us'))
    <div class="page-content">
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('web.index') }}"><i class="fa fa-home"></i>{{ __('response.home') }}</a></li>
                    <li>{{ __('response.about_us') }}</li>
                </ul>
            </div>
        </div>
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">{{ __('response.about_company.title') }}</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="owl-carousel about-us-carousel owl-btn-vertical-center owl-dots-bottom-center">
                            @foreach (trans()->get('response.about_company.slider') as $key => $value)
                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img src="{{ asset($value) }}" alt="">
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion9">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;"
                                                data-bs-target="#collapseOne9">
                                                {{ __('response.about_shambadunia') }}
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                        <div class="acod-content mb-2 mt-2">
                                            {{ __('response.about_company.paragraphs.0') }}</div>
                                        <div class="acod-content p-b5">{{ __('response.about_company.paragraphs.1') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;"
                                                data-bs-target="#collapseTwo9" class="collapsed">
                                                {{ __('response.our_team') }}
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content mb-2  mt-2">
                                            {{ __('response.about_company.paragraphs.2') }}</div>
                                        <div class="acod-content ">{{ __('response.about_company.paragraphs.3') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;"
                                                data-bs-target="#collapseThree9" class="collapsed">
                                                {{ __('response.our_agriculture_solution') }}
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content mb-2  mt-2">
                                            {{ __('response.about_company.paragraphs.5') . ' ' . __('response.about_company.paragraphs.5') }}
                                        </div>
                                        <div class="acod-content mb-2">
                                            {{ __('response.about_company.paragraphs.6') }}</div>
                                        <div class="acod-content p-tb-0">
                                            {{ __('response.about_company.paragraphs.7') }}</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-web.what-we-do-component />
        <x-web.why-choose-us-component />
        <x-web.clients-component />
    </div>
</x-web-layout>
