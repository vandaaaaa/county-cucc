@extends('layouts.app')
<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>

@section('content')

  <h1>Vármegyék</h1>

@foreach($counties as $county)
  <p>{{ $county->name }}</p>
@endforeach

@endsection