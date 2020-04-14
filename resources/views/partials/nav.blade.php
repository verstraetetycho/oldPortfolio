<div class="nav-container">
            <div class="backword">
                <p id="menuWord"></p>
            </div>
            <div class="container-lg">
                <div class="row">
                    <nav class="col-12">
                        <ion-icon name="close-outline"></ion-icon>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Skills</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                            @if (Auth::check())
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>