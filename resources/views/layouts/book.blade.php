<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cad-Books - Crie títulos imaginários</title>

    <!-- Custom fonts for this template-->
    <link href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ secure_asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ secure_url('/') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-book"></i>
            </div>
            <div class="sidebar-brand-text mx-3">CadBook</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="{{ Request::is('/') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ secure_url('/') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Books -->
        <li class="{{ Request::is('books') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ secure_url('/books') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Books</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            @yield('content')
        </div>
        <!-- End of Main Content -->

    <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; CadBook 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ secure_asset('js/sb-admin-2.min.js') }}"></script>

{{-- Book scripts --}}

{{-- deleteBook Ajax Delete --}}
<script src="{{ secure_asset('js/book/book-delete.js') }}"></script>
{{-- datatable list of books --}}
<script src="{{ secure_asset('js/book/book-datatable.js') }}"></script>
{{-- Book scripts --}}


<!-- Page level plugins -->
<script src="{{ secure_asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

{{-- Alert delete book --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>
