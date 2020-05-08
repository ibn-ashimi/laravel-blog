@extends('layouts.app')
@section('content')
	<a href="/" class="btn btn-default">Go back</a>
	<h1>Post</h1>
	@if(count($posts)>0)
		@foreach($posts as $post)
		<div class="card card-body bg-light">
			<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
			<small>Written on {{$post->created_at}}</small>
		</div>
		@endforeach
		{{ $posts->links()}}
	@else
		<p>No Post Found</p>
	@endif
@endsection