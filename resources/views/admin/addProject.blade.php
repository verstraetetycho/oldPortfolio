@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add a project</h1>
</div>
@if ($errors->any())
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('admin.postproject') }}">
  @csrf
  <div class="form-group">
    <div class="row">
      <div class="col-md-8">
        <label for="titel">Titel</label>
        <input type="text" class="form-control" id="titel" name="titel" placeholder="Example project">
      </div>
      <div class="col-md-4">
        <label for="year">Year</label>
        <select class="form-control" id="year" name="year">
        {{ $last= date('Y')-5 }}
        {{ $now = date('Y') }}
            @for ($i = $now; $i >= $last; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="url">Url</label>
    <input type="url" class="form-control" id="url" name="url" placeholder="https://www.example.com">
  </div>
  <div class="form-group">
    <label for="smalldescr">Small description</label>
    <textarea class="form-control" name="smalldescr" id="smalldescr" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="descr">Description</label>
    <textarea class="form-control" name="descr" id="descr" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="company">Company</label>
    <input type="text" class="form-control" id="company" name="company" placeholder="Google">
  </div>
  <div class="form-group">
    <label for="technologiescheck">Technologies</label>
    <techform></techform>
  </div>
  <button type="submit" class="btn btn-success">Add a project</button>
</form>
@endsection