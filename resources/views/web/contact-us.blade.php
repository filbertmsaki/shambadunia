<x-web-layout>
    @section('title', __('response.contact_us'))
    <section class="map map-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="d-none">Our Office Map</h3>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31691.971745178824!2d37.661874!3d-6.830919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185a5da2dcdff9ad%3A0x84367c86d6410285!2sOld%20Dar%20Es%20Salaam%20Road%2C%20Morogoro!5e0!3m2!1sen!2stz!4v1673892281968!5m2!1sen!2stz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2" style="padding-bottom:5px !important ">
        <div class="bg-section"><img src="assets/images/background/wavy-pattern.png" alt="background" /></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                            <div class="bg-section"><img src="assets/images/contact/2.jpg" alt="image" /></div>
                            <div class="card-content">

                                <div class="content-top">
                                    <h5 class="card-heading">Contact Information</h5>
                                    <p>Interested in Shambadunia services and events, just pick up the phone or email
                                        and chat with our agent</p>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p> <a
                                                    href="tel:{{ config('app.phonenumber') }}">{{ config('app.phonenumber') }}</a>
                                            </p>
                                        </li>
                                        <li class="contact-info"><i class="energia-email--icon"></i>
                                            <p><a
                                                    href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                                            </p>
                                        </li>
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p> Nhc Commercial Complex, Old Dar es salaam Road, Morogoro. Tanzania. </p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p>Mon - Sat: 8:00 am - 5:00 pm </p>
                                        </li>
                                    </ul><a class="btn btn--white"
                                        href="{{ route('web.about_us') }}">{{ __('response.about_us') }} <i
                                            class="energia-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">get in touch</h5>

                                <form class="contactF orm" method="post" action="{{ route('web.contact_us.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" id="contact-name" name="name"
                                                placeholder="Enter Fullname" required="" />
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="text" id="contact-email" name="email"
                                                placeholder="Enter Email" required="" />
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="text" id="contact-phone" name="phone"
                                                placeholder="Enter Phone" required="" />
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" id="contact-infos" placeholder="Message" name="message" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn--secondary">Send <i
                                                    class="energia-arrow-right"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-result"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
