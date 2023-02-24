@include('include.header')

<!-- Top Bar Start -->
@include('include.tobBar')

<!-- Top Bar End -->


<!-- Nav Bar Start -->
@include('include.nav')

<!-- Nav Bar End -->
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact</h2>
            </div>
            {{-- <div class="col-12">
                <a href="">Home</a>
                <a href="">Contact</a>
            </div> --}}
        </div>
    </div>
    <img src="{{ asset('img/salon-4-seasons.jpeg') }}" alt="" class="page-header-imag">
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="section-header text-center" style="margin-top: 90px;">
    <p>Get In Touch</p>
    <h2>If You Have Any Query, Please Contact Us</h2>
</div>
<div class="contact" style="margin-bottom: 90px;">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        @if (session()->has('success'))
                            <div class="alert alert-success" id="alert-session">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger" id="alert-session">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <form name="sentMessage" method="post" action="{{ route('send.sms') }}">
                            {{-- <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="{{ route('send.sms') }}"> --}}
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Name" required="required"
                                    data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            {{-- <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div> --}}
                            {{-- <div class="control-group">
                                <input type="number" class="form-control" id="number" name="number"
                                    placeholder="number" required="required"
                                    data-validation-required-message="Bitte gebe Ihre Nummer" />
                                <p class="help-block text-danger"></p>
                            </div> --}}
                            <div class="control-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@include('include.footer')
