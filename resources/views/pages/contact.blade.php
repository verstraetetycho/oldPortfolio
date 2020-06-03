@extends('layouts.page')
@section('head')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')
@if ($errors->any())
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container">
    <div class="socio-panel">
        <h3>Contact details</h3>
        <p class="v-flexer">
            <ion-icon name="phone-portrait-outline"></ion-icon> +32 472 860 978
        </p>
        <p class="v-flexer">
            <ion-icon name="mail-outline"></ion-icon> <a href="mailto:tycho@tychoverstraete.be">tycho@tychoverstraete.be</a>
        </p>
    </div>
    <div class="socio-panel">
        <h3>Where am I located?</h3>
        <p class="v-flexer">
            <ion-icon name="location-outline"></ion-icon> Gentse steenweg, Aalst
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2514.0998053664634!2d4.009749115909442!3d50.940367259823134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3a2a8955ddb9d%3A0xdd875cb813112ea5!2sGentse%20steenweg%2C%209300%20Aalst!5e0!3m2!1sen!2sbe!4v1589529276214!5m2!1sen!2sbe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<section id="contactForm" class="dark-back">
    <div class="container">
        <h2>Contact me<span>.</span></h2>
        <form action="{{route('postcontact')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name <span>*</span></label>
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">First name <span>*</span></label>
                        <input class="form-control" type="text" name="fname" id="fname" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email <span>*</span></label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject <span>*</span></label>
                <input class="form-control" type="text" name="subject" id="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message <span>*</span></label>
                <textarea class="form-control" name="message" id="message" rows="10"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="invalid-feedback" style="display: block;">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-danger" type="submit" value="Send message">
            </div>
        </form>
    </div>
</section>
@endsection