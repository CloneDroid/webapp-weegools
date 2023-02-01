@extends('dashboards.admin.base')
@section('header')
  <title>Weegool's Grill Haus | Users</title>
@endsection

@section('links')
<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous">
    <script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
    </script>
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous">
    </script>
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
              <li class="breadcrumb-item active">Users</li>
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
          <h3 class="card-title">Users</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="users" class="table table-bordered">
          <thead> 
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $user)
            <tr>
              <th>{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
              <td>
              <a class="btn btn-outline-primary btn-sm edit-data" href="javascript:void(0)" data-id="{{ $user->id }}" title="Edit">
                <i class="fa fa-edit"></i>
              </a>
              <a class="btn btn-outline-danger btn-sm delete-data" href="#DeleteModal{{ $user->id }}" data-id="{{ $user->id }}" title="Delete">
                <i class="fa fa-trash"></i>
              </a>
              <div class="modal fade" id="DeleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">You are trying to delete {{ $user->name }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p>This action cannot be undone. Are you sure you want to delete {{ $user->name }} and all the information related to it permanently? </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No, take me back</button>
                      <form action="/admin/users/{{ $user->id }}" method="POST"> 
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
  $(function () {
    $("#users").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": [
        "copy", "csv", "excel", "pdf", "print", "colvis",
        {
            text: 'Add New',
            action: function (e, dt, node, config) {
                window.location.href = '/users/create';
            }
        }
      ]
    }).buttons().container().appendTo('#users_wrapper .col-md-6:eq(0)');
  });
  </script>
 @endsection