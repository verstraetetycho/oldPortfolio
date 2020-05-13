@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Passionate coder / designer</h2>
                <p>Unde nihil eius repudiandae sequi quos non velit repellendus. Corrupti sit possimus et quaerat tempora. Illo eaque maxime quam et quia maxime quod. Ex est ad architecto blanditiis.

Alias fugit dolore omnis voluptas perferendis repellat. Vitae dolor dolorem eius inventore dolore. Quia dolorum aliquam excepturi et et ullam. Est et fugiat laborum eos animi harum voluptas.</p>
            </div>
            <div class="col-md-6"><img src="{{ asset('/images/01_img.jpg') }}" alt="foto"></div>
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
                
                <div class="charts">
                    <div class="chart chart--dev">
                    <span class="chart__title">Development</span>
                    <ul class="chart--horiz">
                        <li class="chart__bar" style="width: 96%;">
                            <span class="chart__label">
                                HTML5
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 95%;">
                            <span class="chart__label">
                                CSS3 & SCSS
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 70%;">
                            <span class="chart__label">
                                JavaScript & ES6
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 60%;">
                            <span class="chart__label">
                                jQuery
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 69%;">
                            <span class="chart__label">
                                NodeJS
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 40%;">
                            <span class="chart__label">
                                VueJS
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 71%;">
                            <span class="chart__label">
                                PHP & Laravel
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 80%;">
                            <span class="chart__label">
                                C# & .NET
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 85%;">
                            <span class="chart__label">
                                C++
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 50%;">
                            <span class="chart__label">
                                Java
                            </span>
                        </li>
                        <li class="chart__bar" style="width: 67%;">
                            <span class="chart__label">
                                Python
                            </span>
                        </li>
                    </ul>
                    </div>
                    
                    <div class="chart chart--prod">
                    <span class="chart__title">Productivity</span>
                    <ul class="chart--horiz">
                    <li class="chart__bar" style="width: 70%;">
                        <span class="chart__label">
                        Git + Github
                        </span>
                    </li>
                    <li class="chart__bar" style="width: 49%;">
                        <span class="chart__label">
                        Azure devops
                        </span>
                    </li>
                    <li class="chart__bar" style="width: 80%;">
                        <span class="chart__label">
                        Microsoft Office
                        </span>
                    </li>
                    </ul>
                    </div>
                    
                    <div class="chart chart--design">
                    <span class="chart__title">Design</span>
                    <ul class="chart--horiz">
                    <li class="chart__bar" style="width: 65%;">
                        <span class="chart__label">
                        Photoshop
                        </span>
                    </li>
                    <li class="chart__bar" style="width: 60%;">
                        <span class="chart__label">
                        Illustrator
                        </span>
                    </li>
                    <li class="chart__bar" style="width: 60%;">
                        <span class="chart__label">
                        After Effects
                        </span>
                    </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection