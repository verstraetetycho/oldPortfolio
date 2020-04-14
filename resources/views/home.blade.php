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

@endsection
