<header class="header header-light header-topbar header-topbar2 header-shadow" id="navbar-spy">
    <x-web.top-bar-component />


    <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu">
        <a class="navbar-brand" href="{{ route('web.index') }}">
            <img class="logo logo-dark" src="{{ asset('images/logo.png') }}" alt="Energia Logo" />
            <img class="logo logo-mobile" src="{{ asset('images/logo.png') }}" alt="Energia Logo" />
        </a>
        <div class="module-holder module-holder-phone">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item {{ request()->routeIs('web.index') ? 'active' : '' }}" id="contact"
                    data-hover="">
                    <a href="{{ route('web.index') }}"><span>{{ __('response.home') }}</span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('web.about_us') ? 'active' : '' }}" id="contact"
                    data-hover="">
                    <a href="{{ route('web.about_us') }}"><span>{{ __('response.about_us') }}</span></a>
                </li>


                <li class="nav-item has-dropdown" id="departments" data-hover=""><a class="dropdown-toggle"
                    href="javascript:void(0)"
                    data-toggle="dropdown"><span>{{ __('response.our_services') }}</span></a>
                <ul class="dropdown-menu">
                    @foreach (trans()->get('response.services_list') as $key => $value)
                        <li class="nav-item"><a
                                href="{{ route('web.services.show',$key) }}"><span>{{ $value['title'] }}</span></a>
                        </li>
                    @endforeach

                </ul>
            </li>

                <li class="nav-item has-dropdown" id="departments" data-hover=""><a class="dropdown-toggle"
                        href="javascript:void(0)"
                        data-toggle="dropdown"><span>{{ __('response.services_list.branding_events.title') }}</span></a>
                    <ul class="dropdown-menu">
                        @foreach (trans()->get('response.services_list.branding_events.lists') as $key => $value)
                            <li class="nav-item"><a
                                    href="{{ route('web.services.more', ['service' =>  'branding_events', 'key' => $key]) }}"><span>{{ $value['title'] }}</span></a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                <li class="nav-item {{ request()->routeIs('web.gallery') ? 'active' : '' }}" id="contact"
                    data-hover=""><a href="{{ route('web.gallery') }}"><span>{{ __('response.gallery') }}</span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('web.contact_us') ? 'active' : '' }}" id="contact"
                    data-hover=""><a
                        href="{{ route('web.contact_us') }}"><span>{{ __('response.contact_us') }}</span></a>
                </li>
            </ul>
            <div class="module-holder">
                <div class="module-call"><i class="icons-energiaphone-call"> </i>
                    <div>
                        <p>{{ __('response.call_us_now') }}:</p><a
                            href="tel:{{ config('app.phonenumber') }}">{{ config('app.phonenumber') }}</a>
                    </div>
                </div>
            </div>

        </div>

    </nav>

</header>
