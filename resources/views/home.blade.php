@if (\Request::is('home'))
<!-- Redirect issue voor login dat automatisch naar /home gaat -->
<script type="text/javascript">
    window.location = "{{ route('home') }}";
</script>
@endif

@extends('layouts.app')

@section('content')
<intro>
    
</intro>
<div class="container">
    <h2>My work<span>.</span></h2>
</div>
@include('partials.work')
<div class="container">
    <div class="row more">
        <div class="col-md-12">
            <a href="{{route('portfolio')}}" class="v-in-flexer">
            <ion-icon name="add-circle-outline"></ion-icon>
            see more
            </a>
        </div>
    </div>
</div>
<div class="contpanel">
    <h3>Like my work? Lets work together!
    <br> You can contact me now!</h3>
    <a href="{{ route('contact') }}"><button type="button" class="btn btn-dark">Contact</button></a>
</div>

@endsection
