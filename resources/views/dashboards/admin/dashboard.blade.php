@extends('dashboards.admin.base')
  @section('header')
  <title>Weegool's Grill Haus | Dashboard</title>
  @endsection

  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $users->count() }} </h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $announcements->count() }} </h3>

                <p>Announcements</p>
              </div>
              <div class="icon">
                <i class="ion ion-speakerphone"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $menus->count() }} </h3>

                <p>Menus</p>
              </div>
              <div class="icon">
                <i class="ion ion-fork px-4"></i>
                <i class="ion ion-knife px-3"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="col-lg-9 col-12">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Authentication and Authorization</h5>
                </div>
                <div class="card-body">
                  <table class="table table-borderless table-sm">
                    <tbody>
                      <tr>
                        <td>
                          <a href="/admin/users">Users</a>
                        </td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Pages</h5>
                </div>
                <div class="card-body">
                  <table class="table table-borderless table-sm">
                    <tbody>
                      <tr>
                        <td>
                          <a href="/admin/announcements">Announcements</a>
                          <a href="/">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="/admin/menus">Menus</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      <!-- /.content -->
    </div>
  </section>
  <!-- /.content-wrapper -->
  @endsection