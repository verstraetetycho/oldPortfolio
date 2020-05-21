@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="row">
            <div id="about-text" class="col-md-6">
                <h2>Passionate <br> coder <span>-</span> designer</h2>
                <p>
                    Unde nihil eius repudiandae sequi quos non velit repellendus. Corrupti sit possimus et quaerat tempora. Illo eaque maxime quam et quia maxime quod. Ex est ad architecto blanditiis.
                    Alias fugit dolore omnis voluptas perferendis repellat. Vitae dolor dolorem eius inventore dolore. Quia dolorum aliquam excepturi et et ullam. Est et fugiat laborum eos animi harum voluptas.
                </p>
            </div>
            <div class="col-md-6"><img src="{{ asset('/images/portrait.jpg') }}" alt="foto"></div>
        </div>
    </div>
    <section id="skills" class="dark-back">
        <div class="container">
            <h1>Skills<span>.</span></h1>
            <div class="skills">
                <ul class="lines">
                    <li class="line l--25">
                        <span class="line__label">
                            25%
                        </span>
                    </li>
                    <li class="line l--50">
                        <span class="line__label">
                            50%
                        </span>
                    </li>
                    <li class="line l--75">
                        <span class="line__label">
                            75%
                        </span>
                    </li>
                    <li class="line l--100">
                        <span class="line__label">
                            100%
                        </span>
                    </li>
                </ul>
                <skillz></skillz>
            </div>
        </div>
    </section>
@endsection