@extends('dashboards.admin.base') 

@section('header') 
<title>Edit {{ $announcement->header }}</title> 
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
              <li class="breadcrumb-item active">Announcements</li>
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
          <h3 class="card-title">Edit Announcement</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
			<form action="{{ route('announcements.update', $announcement->id )}}" method="POST" enctype="multipart/form-data"> 
				@csrf @method ('PUT') 
				<div class="card-body">
					<div class="form-group">
						<b><label>Header</label></b>
						<br />
						<input type="text" name="header" class="form-input form-control w-full" value="{{$announcement->header}}">
					</div>
					<div class="form-group">
						<b><label>Subheader</label></b>
						<br />
						<input type="text" name="subheader" class="form-input form-control w-full" value="{{$announcement->subheader}}">
					</div>
					<div class="form-group">
						<b><label>Image</label></b>
						<br />
            @if($announcement->image)
            <input type="file" class="" id="image" name="image" value="{{ old('image', $announcement->image) }}">
            @else
            <input type="file" class="" id="image" name="image">
            @endif
					</div>
					<div class="form-group">
						<b><label>Description</label></b>
						<br />
						<textarea id="summernote" class="form-control" name="description">
							{{$announcement->description}}
						</textarea>
					</div>
					<button class="btn btn-primary my-2 my-sm-0" type="submit">Update</button>
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