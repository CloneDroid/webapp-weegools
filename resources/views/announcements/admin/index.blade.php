@extends('dashboards.admin.base')
@section('header')
  <title>Weegool's Grill Haus | Announcements</title>
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
          <h3 class="card-title">Announcements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="announcements" class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Subheader</th>
              <th>Added by</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($announcements as $announcement)
            <tr>
              <th>{{ $announcement->id }}</th>
              <td>{{ $announcement->header }}</td>
              <td>{{ $announcement->subheader }}</td>
              <td>{{ $announcement->user->name }}</td>
              <td>
              <a class="btn btn-outline-primary btn-sm edit-data" href="announcements/{{ $announcement->id }}/edit" data-id="{{ $announcement->id }}" title="Edit">
                <i class="fa fa-edit"></i>
              </a>
              <a class="btn btn-outline-danger btn-sm delete-data" href="#DeleteModal{{ $announcement->id }}" data-id="{{ $announcement->id }}" title="Delete">
                <i class="fa fa-trash"></i>
              </a>
              <div class="modal fade" id="DeleteModal{{ $announcement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">You are trying to delete {{ $announcement->header }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p>This action cannot be undone. Are you sure you want to delete {{ $announcement->header }} and all the information related to it permanently? </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No, take me back</button>
                      <form action="announcements/{{ $announcement->id }}" method="POST"> 
												@csrf @method('delete') <button type="submit" class="btn btn-danger">Yes, I'm sure</button>
											</form>
                    </div>
                  </div>
                </div>
              </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('scripts')
  <script>
  $("#announcements").DataTable({
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    buttons: [
        "copy", "csv", "excel", "pdf", "print", "colvis",
        {
            text: 'Add New',
            action: function (e, dt, node, config) {
                window.location.href = '/announcements/create';
            }
        }
    ]
  }).buttons().container().appendTo('#announcements_wrapper .col-md-6:eq(0)');
  </script>
  @endsection