<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RRStudio - Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href=" {{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2C3E50;
            --secondary-color: #E74C3C;
            --accent-color: #3498DB;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fc;
        }
        
        #wrapper {
            background-color: #ffffff;
        }
        
        .sidebar {
            background: linear-gradient(180deg, var(--primary-color) 0%, #34495E 100%);
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .sidebar .nav-item .nav-link {
            border-radius: 8px;
            margin: 5px 15px;
            transition: all 0.3s ease;
        }
        
        .sidebar .nav-item .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }
        
        .topbar {
            background: #ffffff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .btn-primary {
            background: linear-gradient(90deg, var(--primary-color), #34495E);
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(90deg, #34495E, var(--primary-color));
            transform: translateY(-2px);
        }
        
        .page-item.active .page-link {
            background: linear-gradient(90deg, var(--primary-color), #34495E);
            border-color: var(--primary-color);
        }
        
        .scroll-to-top {
            background-color: var(--secondary-color);
            border-radius: 10px;
        }
        
        .navbar-search .form-control {
            border-radius: 20px;
            border: 1px solid #edf2f7;
            padding-left: 20px;
        }
        
        .table {
            border-radius: 10px;
            overflow: hidden;
            background: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: none;
        }
        
        .table thead th {
            background: linear-gradient(90deg, var(--primary-color), #34495E);
            color: white;
            border: none;
            padding: 15px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f8f9fc;
            transform: scale(1.01);
        }

        .table td {
            padding: 12px 15px;
            vertical-align: middle;
            border-bottom: 1px solid #edf2f7;
        }

        .btn-action {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.85rem;
            margin: 0 3px;
            transition: all 0.3s ease;
            background: linear-gradient(90deg, var(--primary-color), #34495E);
            color: white;
            border: none;
        }

        .btn-action:hover {
            background: linear-gradient(90deg, #34495E, var(--primary-color));
            color: white;
            transform: translateY(-2px);
        }

        .btn-edit, .btn-delete, .btn-view {
            opacity: 0.95;
        }

        .btn-edit:hover, .btn-delete:hover, .btn-view:hover {
            opacity: 1;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: linear-gradient(90deg, var(--primary-color), #34495E);
            border-color: var(--primary-color);
            color: white !important;
            border-radius: 6px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: linear-gradient(90deg, #34495E, var(--primary-color));
            border-color: var(--primary-color);
            color: white !important;
        }

        .dataTables_wrapper .dataTables_length select,
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #edf2f7;
            border-radius: 6px;
            padding: 5px 10px;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--accent-color);
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('layouts/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('layouts/navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">Welcome Back, Admin Suki! 👋</h1>
                            <p class="text-muted mt-2 mb-0">Here's what's happening with your studio today.</p>
                        </div>
                        <a href="{{ route('frontend.index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
                            <i class="fas fa-globe fa-sm mr-2"></i>Visit Website</a>
                    </div>
                        @yield('content')
                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts/footer')
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
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src=" {{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>


     <!-- Page level plugins -->
     <script src=" {{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
     <script src=" {{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
 
     <!-- Page level custom scripts -->
     <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

</body>

</html>