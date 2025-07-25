@extends('layouts/app')
@section('content')

@if(session('success'))
<p class = "alert alert-success">{{session('success')}}</p>
@endif

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RRStudio | Gallery</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Table</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary shadow-sm" href="{{route('gallery.create')}}">Tambah Data Le</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama Foto</th>
                                            <th>Foto</th>
                                            <th>Genre</th>
                                            <th>Tempat</th>
                                            <th>Caption</th>
                                            <th>Action</th>
                    
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($gallery as $dept)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$dept->nama_foto}}</td>

                                            <td>
                                                @if ($dept->foto)
                                                    <img style="max-width:100px; max-height:100px" src="{{ asset('storage/'.$dept->foto) }}">
                                                @endif
                                            </td>
                                            
                                            <td>{{$dept->genre->genre ?? '-' }}</td>
                                            <td>{{$dept->tempat}}</td>
                                            <td>{{$dept->caption}}</td>
                                            <td>
                                                <a class="btn btn-primary shadow-sm" href="{{url('gallery/'.$dept->id.'/edit')}}">Edit</a>
                                                <form action="{{url('gallery'."/".$dept->id)}}" method="POST" style="display: inline-block" >
                                                    @csrf
                                                    @method('Delete')
                                                    <button class="btn btn-sm btn-danger" onclick="return confirm ('Ente Yakin Rek Nga dilet cik?')">Dilet</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
         @endsection
            <!-- End of Main Content -->

            <!-- Footer -->
            
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   

</body>

</html>