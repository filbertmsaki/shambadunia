<header class="site-header header-style-1 mobile-sider-drawer-menu">
    <x-web.top-bar-component />
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar bg-white">
            <div class="container">
                <div class="logo-header">
                    <a href="{{ route('web.index') }}">
                        <img src="{{ asset('img/logo.png') }}"
                            alt="">
                    </a>
                </div>
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li class="{{ request()->routeIs('web.index') ? 'active' : '' }}"><a
                                href="{{ route('web.index') }}">{{ __('response.home') }}</a></li>
                        <li class="{{ request()->routeIs('web.about_us') ? 'active' : '' }}"><a
                                href="{{ route('web.about_us') }}">{{ __('response.about_us') }}</a></li>
                        <li class="{{ request()->routeIs('web.services') ? 'active' : '' }}"><a
                                href="{{ route('web.services') }}">{{ __('response.our_services') }}</a></li>
                        <li class="">
                            <a href="javascript:;">{{ __('response.branding_events.title') }}<i
                                    class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                @foreach (trans()->get('response.services.branding_events.lists') as $key => $value)
                                    <li><a href="{{ route('web.service.more', ['service' => 'branding_events', 'key' => $key]) }}">{{ $value['title'] }}</a>
                                    </li>
                                @endforeach

                            </ul>

                        </li>
                        <li class="{{ request()->routeIs('web.gallery') ? 'active' : '' }}"><a
                                href="{{ route('web.gallery') }}">{{ __('response.gallery') }}</a></li>
                        <li class="{{ request()->routeIs('web.contact_us') ? 'active' : '' }}"><a
                                href="{{ route('web.contact_us') }}">{{ __('response.contact_us') }}</a></li>
                    </ul>
                </div>
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>
            </div>
        </div>
    </div>
</header>
