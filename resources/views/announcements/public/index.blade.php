@extends('layouts.app') 

@section('header') 
<title>Blog</title> 
@endsection 

@section('content') 
<div class="container py-5" style="min-height:100vh">
 
    @foreach ($posts as $post) 
    <a href="/blog/{{$post->id}}">
		<h5>{{$post->title}}</h5>
	</a>
	<p>{{$post->description}}</p>
	<p style="font-size:small">Posted By {{ $post->user->name }}, {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
	<hr> 
    @endforeach

</div> 
@endsection