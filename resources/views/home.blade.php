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
<div class="contpanel">
    <h3>Like my work? Lets work together!
    <br> You can contact me now!</h3>
    <button type="button" class="btn btn-dark">Contact</button>
</div>

@endsection
