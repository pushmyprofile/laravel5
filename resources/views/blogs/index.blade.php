@extends('layouts.master')

@section('content')
	<h1>My Latest Blog</h1>

	@foreach($blogs as $blog)
		<h3>{{ $blog->title}}</h3>
		<p>{{ $blog->body}}</p>
		@endforeach
@endsection