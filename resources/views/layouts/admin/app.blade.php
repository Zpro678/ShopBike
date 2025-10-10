<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="../admin/bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="../admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    
    <!-- Timeline CSS -->
    <link href="../admin/css/timeline.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="d-flex">
  
  {{-- Sidebar --}}
  @include('layouts.admin.sidebar')

  {{-- Nội dung chính --}}
  <div class="flex-grow-1">
    
    {{-- Header / Topbar --}}
    @include('layouts.admin.header')

    {{-- Content --}}
    <div class="container-fluid p-4">
      @yield('content')
    </div>
  </div>
</div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../admin/dist/js/sb-admin-2.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../admin/bower_components/raphael/raphael-min.js"></script>
    <script src="../admin/bower_components/morrisjs/morris.min.js"></script>
    <script src="../admin/js/morris-data.js"></script>
    
    <!-- Flot Charts JavaScript -->
    <script src="../admin/bower_components/flot/excanvas.min.js"></script>
    <script src="../admin/bower_components/flot/jquery.flot.js"></script>
    <script src="../admin/bower_components/flot/jquery.flot.pie.js"></script>
    <script src="../admin/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="../admin/bower_components/flot/jquery.flot.time.js"></script>
    <script src="../admin/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../admin/js/flot-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../admin/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
</body>
</html>
