<div id="projects">
    <div class="container">
    @if (ucfirst(Route::currentRouteName()) == "Home")
    <featuredprojects></featuredprojects>
    @else
        <projects></projects>
    @endif
        
    </div>
</div>


