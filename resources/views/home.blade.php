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

<section class="panel v-flexer" data-section-name="about">
    <div class="container">
        <h2>Get to know me</h2>
    </div>
</section>

<section class="dark-back panel">

</section>

@endsection
