@extends('layouts.page')

@section('content')
<div id="projects">
    <div class="container">
        <p><ion-icon name="filter"></ion-icon> Filter my projects</p>
        <div class="button-group filter-button-group">
            <div class="btn btn-outline-dark is-checked" data-filter="*">show all</div>
            <div class="btn btn-outline-dark" data-filter=".web">coded websites</div>
            <div class="btn btn-outline-dark" data-filter=".wordpress">wordpress websites</div>
            <div class="btn btn-outline-dark" data-filter=".logo">logos</div>        
        </div>
        <projects></projects>
    </div>
</div>
@endsection