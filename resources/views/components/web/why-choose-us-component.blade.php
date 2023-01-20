<section class="features features-2 bg-overlay bg-overlay-theme2" id="features-2">
    <div class="bg-section"> <img src="{{ asset('images/runners.jpg') }}" alt="Background" /></div>
    <div class="container">
        <div class="heading heading-2 heading-light heading-light2">
            <div class="row">
                <div class="col-12 text--center">
                    <h2 class="heading-title">{{ __('response.why_choose_us.title') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (trans()->get('response.why_choose_us.lists') as $key => $value)
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="feature-panel-holder d-flex flex-wrap" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="{{ $value['icon'] }}"></i></div>
                            <div class="feature-content">
                                <h4>{{ $value['title'] }}</h4>
                                <p>{{ $value['text'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
