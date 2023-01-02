<x-web-layout>
    @section('title', __('response.contact_us'))
    <div class="page-content">
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('web.index') }}"><i class="fa fa-home"></i> {{ __('response.home') }}</a></li>
                    <li>{{ __('response.contact_us') }}</li>
                </ul>
            </div>
        </div>
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-content m-b30">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ __('response.phone_number') }}</h5>
                                    <p class="text-gray-dark">{{ config('app.phonenumber') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ __('response.email_address') }}</h5>
                                    <p class="text-gray-dark">{{ config('app.email') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ __('response.address_info') }}</h5>
                                    <p class="text-gray-dark">{{ config('app.address') }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content m-b50">
                    <div class="row">
                        <div class="wt-box col-md-6">
                            <h4 class="text-uppercase">{{ __('response.location') }}</h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <div class="gmap-outline m-b30">
                                <div id="gmap_canvas" class="google-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.985885145237!2d37.653119515729735!3d-6.830918621010094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185a5da2dcdff9ad%3A0x84367c86d6410285!2sOld%20Dar%20Es%20Salaam%20Road%2C%20Morogoro!5e0!3m2!1sen!2stz!4v1671863823321!5m2!1sen!2stz"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="wt-box col-md-6">
                            <h4 class="text-uppercase">{{ __('response.contact_form') }}</h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <div class="p-a30 bg-gray">
                                <form class="" method="post" action="{{ route('web.contact_us.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="name" type="text" required
                                                        placeholder="{{ __('response.enter_full_name') }}"
                                                        class="form-control  @error('name') is-invalid @enderror"
                                                        value="{{ old('name') }}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                    <input name="phone" type="tel" required
                                                        placeholder="{{ __('response.enter_phone_number') }}"
                                                        class="form-control  @error('phone') is-invalid @enderror"
                                                        value="{{ old('phone') }}">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-envelope"></i></span>
                                                    <input name="email" type="email"
                                                        placeholder="{{ __('response.enter_email_address') }}"
                                                        class="form-control  @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-t"><i
                                                            class="fa fa-pencil"></i></span>
                                                    <textarea name="message" rows="10" class="form-control" required
                                                        placeholder="{{ __('response.ennter_your_message') }}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button name="submit" type="submit" value="Submit"
                                                class="site-button  m-r15">{{ __('response.submit') }}<i
                                                    class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
