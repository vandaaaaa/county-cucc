@extends('layouts.app')


@section('content')

<h1>Megyék</h1>
<a href="{{ route('counties.create')}}">Új megye</a>
@foreach($counties as $county)
  <p>{{ $county->name }}</p>
@endforeach

@endsection