@extends('layouts.master')

@section('content')	

	@forelse($people as $person)
		{{ $person }}
	@empty	
	<h1>Noone in list</h1>

	@endforelse


	

@endsection