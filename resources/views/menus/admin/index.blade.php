@extends('dashboards.admin.base')
@section('header')
  <title>Weegool's Grill Haus | Menus</title>
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
          <h3 class="card-title">Menus</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="menus" class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Price</th>
              <th>Description</th>
              <th>Created at</th>
              <th>Updated at</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($menus as $menu)
            <tr>
              <th>{{ $menu->id }}</th>
              <td>{{ $menu->name }}</td>
              <td>{{ $menu->price }}</td>
              <td>{{ $menu->description }}</td>
              <td>{{ $menu->created_at }}</td>
              <td>{{ $menu->updated_at }}</td>
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
  $("#menus").DataTable({
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    buttons: [
        "copy", "csv", "excel", "pdf", "print", "colvis",
        {
            text: 'Add New',
            action: function (e, dt, node, config) {
                window.location.href = '/menus/create';
            }
        }
    ]
  }).buttons().container().appendTo('#menus_wrapper .col-md-6:eq(0)');
  </script>
  @endsection