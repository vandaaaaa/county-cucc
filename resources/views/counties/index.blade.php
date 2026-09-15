@extends('layouts.app')


@section('content')

  <h1>Megyék</h1>

@foreach($counties as $county)
  <p>{{ $county->name }}</p>
@endforeach

@endsection