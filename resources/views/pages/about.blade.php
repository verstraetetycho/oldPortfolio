@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row">
        <div id="about-text" class="col-md-6">
            <h2>Passionate <br> coder <span>-</span> designer</h2>
            <p>
                Hi, my name is <a href="{{route('home')}}">Tycho Verstraete</a>
                and I'm a passionate developer/designer from Belgium.
                I started getting passionate about programming in high school where I got HTML and CSS. This quickly became my passion and afterwards my studies in college.
                For more information about my school career and experiences I would like to refer you to my linkedin in the button down below.
                If tou want get a quick overview of <a href="#skills">my skills</a>, please scroll down to the next section of this page.
                Make sure you also take a look at my <a href="{{route('portfolio')}}">portfolio</a>
                where you can see all my realized projects.
                And if you like my projects and you'd like to create something together, feel free to <a href="{{route('contact')}}">contact me</a>.
            </p>
            <a href="https://www.linkedin.com/in/tycho-verstraete-a5ab1b174/" target="_blank">
                <button type="button" class="btn btn-danger v-in-flexer">
                    <ion-icon name="logo-linkedin"></ion-icon> View linkedin
                </button>
            </a>
        </div>
        <div class="col-md-6"><img src="{{ asset('/images/portrait.jpg') }}" alt="foto"></div>
    </div>
</div>
<section id="skills" class="dark-back">
    <div class="container">
        <h1>Skills<span>.</span></h1>
        <skillz></skillz>
    </div>
</section>
@endsection