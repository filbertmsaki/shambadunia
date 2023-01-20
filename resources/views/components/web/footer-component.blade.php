<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget widget-contact">
                        <div class="footer-widget-title">
                            <h5>{{ __('response.about_company.title') }}</h5>
                        </div>
                        <div class="widget-content">
                            {{-- <p>{{ __('response.about_company.paragraphs.0') }}.</p> --}}
                            <p>{{ __('response.about_company.paragraphs.1') }}.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>{{ __('response.important_links') }}</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="https://kilimomarathon.co.tz/"
                                        target="__blank">{{ __('response.kmae') }}</a></li>
                                <li><a href="https://actanzania.or.tz/" target="__blank">{{ __('response.act') }}</a>
                                </li>
                                <li><a href="https://sagcot.co.tz/" target="__blank">{{ __('response.sagcot') }}</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>{{ __('response.useful_links') }}</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('web.about_us') }}">{{ __('response.about_us') }}</a></li>
                                <li><a href="{{ route('web.contact_us') }}">{{ __('response.contact_us') }}</a></li>
                                <li><a href="{{ route('web.faq') }}">{{ __('response.faq') }}</a></li>
                                <li><a href="{{ route('web.gallery') }}">{{ __('response.gallery') }}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>Support</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright">
                        <div class="copyright"><span>{{ __('response.copyright_text') }}</span>
                            <ul class="list-unstyled social-icons">
                                <li> <a class="share-facebook" href="https://facebook.com/shambadunia"
                                        target="__blank"><i class="energia-facebook"></i>facebook </a></li>
                                <li> <a class="share-twitter" href="https://twitter.com/shambadunia" target="__blank" ><i
                                            class="energia-twitter"></i>twitter</a></li>
                                <li> <a class="share-youtube" href="https://www.youtube.com/channel/UCQfjOe2hTqZ1mAEooqcrdjA" target="__blank"><i
                                            class="energia-youtube"></i>youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>
