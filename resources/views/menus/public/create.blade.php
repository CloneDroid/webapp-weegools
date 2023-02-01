@extends('dashboards.admin.base') 

@section('header') 
<title>Add Post</title> 
@endsection 

@section('links')
<link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat"> @yield('links')

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('plugins/jquery/jquery.slim.min.js') }}"></script>
<script src="{{ asset('plugins/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection

@section('content') 
<div class="container py-5" style="height: fit-content;">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title"> Create Announcement </h3>
					</div>
					<form action="{{ route('announcements.store') }}" method="POST" enctype="multipart/form-data"> @csrf <div class="card-body">
							<div class="form-group">
								<b>
									<label>Header</label>
								</b>
								<br />
								<input type="text" name="header" class="form-input form-control w-full" placeholder="Title">
							</div>
							<div class="form-group">
								<b>
									<label>Subheader</label>
								</b>
								<br />
								<input type="text" name="subheader" class="form-input form-control w-full" placeholder="Description">
							</div>
							<div class="form-group">
								<b>
									<label>Image</label>
								</b>
								<br />
								<input type="file" class="form-control" id="image" name="image" required>
							</div>
							<div class="form-group">
								<b>
									<label>Description</label>
								</b>
								<br />
								<textarea id="summernote" class="form-control" name="description"></textarea>
							</div>
							<button class="btn btn-primary my-2 my-sm-0" type="submit">Create</button>
							<a class="btn btn-secondary my-2 my-sm-0" href="/announcements">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div> 
@endsection