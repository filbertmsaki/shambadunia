<footer class="site-footer footer-dark">
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">{{ __('response.about_company.title') }}</h4>
                        <p class="mb-1">{{ __('response.about_company.paragraphs.0') }}
                        </p>
                        <p class="mt-0">{!! substr(__('response.about_company.paragraphs.1'), 0, 70) . '...' !!}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">{{ __('resent_post') }}</h4>
                        <div class="widget-post-bx">
                            {{-- <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                    <strong>20</strong>
                                    <span>Mar</span>
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-header">
                                        <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                    </div>
                                    <div class="wt-post-meta">
                                        <ul>
                                            <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">{{ __('response.useful_links') }}</h4>
                        <ul>
                            <li><a href="{{ route('web.about_us') }}">{{ __('response.about_us') }}</a></li>
                            <li><a href="{{ route('web.contact_us') }}">{{ __('response.contact_us') }}</a></li>
                            <li><a href="{{ route('web.faq') }}">{{ __('response.faq') }}</a></li>
                            <li><a href="{{ route('web.gallery') }}">{{ __('response.gallery') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">{{ __('response.newsletter') }}</h4>
                        <div class="newsletter-bx">
                            <form method="post" action="{{ route('web.subscriber.store') }}">
                                @csrf
                                <div class="input-group">
                                    <input name="email" class="form-control"
                                        placeholder="{{ __('response.enter_email_address') }}" type="email">
                                    <span class="input-group-btn">
                                        <button type="submit" class="site-button"><i
                                                class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">{{ __('response.social_links') }}</h4>
                        <ul class="social-icons social-square social-darkest">
                            <x-web.social-links-component />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container p-t30">
            <div class="row">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">{{ __('response.copyright_text') }}</span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="{{ route('web.terms.conditions') }}">{{ __('response.terms_conditions') }}</a>
                        </li>
                        <li><a href="{{ route('web.privacy.policy') }}">{{ __('response.privacy_policy') }}</a></li>
                        <li><a href="{{ route('web.contact_us') }}">{{ __('response.contact_us') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
