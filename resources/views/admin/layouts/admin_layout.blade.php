<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/admin/plugins/select2/css/select2.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="/admin/dist/css/colorbox.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.main.index')}}" class="brand-link">
            <span class="brand-text  font-weight-bolder">GameFiBlog</span>
            <span class="brand-text  "></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/storage/user.png" class="img-circle elevation-2" alt="User Image" >
                </div>
                <div class="info">
                    <a href="{{route('main.index')}}" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin.main.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Главная
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Статьи
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.post.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Все статьи</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.post.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Добавить статью</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Категории
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.category.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Все категории</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.category.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Добавить категорию</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Тэги
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.tag.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Все Тэги</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.tag.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Добавить Тэг</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
})

    $.widget.bridge('uibutton', $.ui.button)


</script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- Select2 -->
<script src="/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- TinyMCE -->
<script src="https://cdn.tiny.cloud/1/7xvwhb7ab8gxfxpqa1mmt0pdf6qpcfzs29p2lu75yj4tqro7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="/admin/admin.js"></script>
<!-- Colorbox -->
<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>

{{-- <!-- Colorbox -->
<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script> --}}


</body>
</html>
