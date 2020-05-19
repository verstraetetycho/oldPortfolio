@extends('layouts.page')

@section('content')
<div class="container">
    <div class="socio-panel">
        <h3>Contact details</h3>
        <p class="v-flexer"><ion-icon name="phone-portrait-outline"></ion-icon> +32 472 860 978</p>
        <p class="v-flexer"><ion-icon name="mail-outline"></ion-icon> <a href="mailto:tycho@tychoverstraete.be">tycho@tychoverstraete.be</a></p>
    </div>
    <div class="socio-panel">
        <h3>Where am I located?</h3>
        <p class="v-flexer"><ion-icon name="location-outline"></ion-icon> Gentsesteenweg, Aalst</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2514.0998053664634!2d4.009749115909442!3d50.940367259823134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3a2a8955ddb9d%3A0xdd875cb813112ea5!2sGentse%20steenweg%2C%209300%20Aalst!5e0!3m2!1sen!2sbe!4v1589529276214!5m2!1sen!2sbe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
@endsection