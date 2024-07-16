<div>
    <div class="contact_main-section padding-bottom-120" id="join-waitlist">
        <div class="container">
            <div class="row row--cuatom">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                    <div class="contact_main-content">
                        <div class="content">
                            <div class="content-text-block">
                                <h2 class="heading-md">Fill out this form to join the Wait-list </h2>
                                <p>
                                    Join over 10k plus Freelancers and Businesses include fortune 500 companies waiting
                                    for our launch.
                                </p>
                                <div class="content-divider"></div>
                            </div>
                        </div>
                        <div class="content_main-testimonial">
                            <div class="testimonial-widget-4" data-aos="fade-left" data-aos-delay="NaN">
                                <div class="testimonial-widget-4__rating">
                                    <img src="{{asset('waitlist/image/icons/star-five-yellow.svg')}}" class="testimonial-widget-4__star" alt="image alt">
                                </div>
                                <p>
                                    "At Blockgigz, we are redefining the future of tech hiring. Our vision is to bridge
                                    the gap between exceptional talent and innovative companies in the Web3, Web2, and AI
                                    industries. As technology continues to evolve, so does the need for skilled professionals
                                    who can drive this evolution. Blockgigz is committed to simplifying the hiring process,
                                    making it more efficient and accessible for both employers and job seekers."
                                </p>
                                <div class="testimonial-widget-4__body">
                                    <div class="testimonial-widget-4__user-image">
                                        <img src="{{asset('ceo.jpeg')}}" alt="image alt" style="width: 50px;">
                                    </div>
                                    <div class="testimonial-widget-4__user-metadeta">
                                        <h4 class="testimonial-widget-4__user">Michael Erastus</h4>
                                        <span class="testimonial-widget-4__user-position">CEO & Founder @ {{$siteName}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-lg-6 col-md-10">
                    <div class="form-box-style__form-wrapper bg-light-2">
                        <form class="form-box-style" wire:submit.prevent="submit">
                            <div class="form-box-style__form-inner">
                                <div class="form-box-style__form-input">
                                    <h3 class="form-box-style-title">Your name</h3>
                                    <input class="form-control bg-white" type="text" placeholder="Enter your full name"
                                            wire:model.live="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-box-style__form-input">
                                    <h3 class="form-box-style-title">Email address</h3>
                                    <input class="form-control bg-white" type="text" placeholder="Enter your email"
                                            wire:model.live="email" >
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-box-style__form-input">
                                    <h3 class="form-box-style-title">What type of Account</h3>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="1"
                                        wire:model.live="accountType">
                                        <label class="form-check-label" for="inlineCheckbox1">Freelancer/Job Seeker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox2" value="2"
                                        wire:model.live="accountType">
                                        <label class="form-check-label" for="inlineCheckbox2">Business/Agency</label>
                                    </div>
                                    @error('accountType') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div id="captcha" class="mt-4" wire:ignore></div>

                                @error('captcha')
                                <p class="mt-3 text-sm text-red-600 text-left">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </form>
                        <div class="form-box-style__form-input-button">
                            <button type="submit" class="btn-masco rounded-pill w-100">
                                <span>
                                    Join Wait-list
                                    <div wire:loading>
                                        <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                    </div>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit"
        async
        defer>
</script>

<script>
    var  handle = function(e) {
        widget = grecaptcha.render('captcha', {
            'sitekey': '{{ env('CAPTCHA_SITE_KEY') }}',
            'theme': 'light', // you could switch between dark and light mode.
            'callback': verify
        });

    }
    var verify = function (response) {
        @this.set('captcha', response)
    }
</script>
