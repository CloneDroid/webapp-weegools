@extends('layouts.app') 

@section('header') 
<title>Edit {{ $post->title }}</title> 
@endsection 

@section('content') 
<div class="container py-5" style="height: fit-content;">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title"> Update Post </h3>
					</div>
					<form action="/blog/{{ $post->id }}" method="POST" enctype="multipart/form-data"> 
						@csrf @method ('PUT') 
						<div class="card-body">
							<div class="form-group">
								<b>
									<label>Title</label>
								</b>
								<br />
								<input type="text" name="title" class="form-input form-control w-full" value="{{ $post->title }}">
							</div>
							<div class="form-group">
								<b>
									<label>Description</label>
								</b>
								<br />
								<input type="text" name="description" class="form-input form-control w-full" value="{{ $post->description }}">
							</div>
							<div class="form-group">
								<b>
									<label>Body</label>
								</b>
								<br />
								<textarea id="summernote" class="form-control" name="body">
								{{ $post->body }}
								</textarea>
							</div>
							<button class="btn btn-primary my-2 my-sm-0" type="submit">Update</button>
							<a class="btn btn-secondary my-2 my-sm-0" href="/blog/{{$post->id}}">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection