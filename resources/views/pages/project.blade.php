@extends('layouts.page')

@section('content')
<div class="container">
    <div class="row project">
        <div class="col-md-6">
            <img src="../images/projects/{{str_replace(' ', '', strtolower($projectZoek[0]->titel))}}.jpg" alt="projectfoto">
        </div>
        <div class="col-md-6">
            <span></span>
            <h2>{{ $projectZoek[0]->titel }}<span>.</span></h2>
            <span><strong>Created at:</strong> {{ $projectZoek[0]->year }} | <strong>Working for:</strong> {{ $projectZoek[0]->company }} | <strong>Technologies:</strong> {{ $projectZoek[0]->technologies }}</span>
            <p>{{ $projectZoek[0]->descr }}</p>
            <a href="{{$projectZoek[0]->url}}" target="_blank"><button class="btn btn-danger">Take a look</button></a>
        </div>
    </div>
</div>
@endsection