<div id="projects">
    <div class="container">
    @if (ucfirst(Route::currentRouteName()) == "Home")
    <featuredprojects></featuredprojects>
    @else
        <div class="button-group filter-button-group">
            <div class="btn filter is-checked" data-filter="*">all</div>
            <div class="btn filter" data-filter=".web">coded websites</div>
            <div class="btn filter" data-filter=".wordpress">wordpress websites</div>
            <div class="btn filter" data-filter=".logo">logos</div>       
        </div>
        <projects></projects>
    @endif
        
    </div>
</div>


