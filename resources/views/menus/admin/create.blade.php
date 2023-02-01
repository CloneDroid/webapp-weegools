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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Menus</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Add Menu</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
			<form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data"> 
				@csrf 
				<div class="card-body">
					<div class="form-group">
						<b><label>Name</label></b>
						<br />
						<input type="text" name="name" class="form-input form-control w-full" placeholder="Name">
					</div>
					<div class="form-group">
						<b><label>Price</label></b>
						<br />
						<input type="number" name="subheader" class="form-input form-control w-full" placeholder="Price">
					</div>
					<div class="form-group">
						<b><label>Image</label></b>
						<br />
						<input type="file" class="" id="image" name="image" required>
					</div>
					<div class="form-group">
						<b><label>Description</label></b>
						<br />
						<textarea id="summernote" class="form-control" name="description"></textarea>
					</div>
					<div class="form-group">
						<input type="checkbox" name="is_active" id="is_active" class="js-switch" data-color="#81C784" {{ old('is_active') ? 'checked' : '' }}>
						<label for="is_active">Is Active:</label>
					</div>
					<button class="btn btn-primary my-2 my-sm-0" type="submit">Create</button>
					<a class="btn btn-secondary my-2 my-sm-0" href="/announcements">Cancel</a>
				</div>
			</form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection