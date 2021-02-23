<!DOCTYPE html>
<html>

@include('admin.templates.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.templates.partials.header')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset ('img/lampung.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sistem Pakar</span>
    </a>

   @include('admin.templates.partials.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('admin.templates.partials.footer')

  <!-- Control Sidebar -->
 @include('admin.templates.partials.control')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.templates.partials.scripts')
</body>
</html>
