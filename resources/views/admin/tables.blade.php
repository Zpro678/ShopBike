@extends('layouts.admin.app')

@section('title', 'tables')
@section('page_title', 'tables')

@section('content')

<body>

    <div id="wrapper">
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover"
                                    id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Model No</th>
                                            <th>Giá</th>
                                            <th>Mô tả</th>
                                            <th>So Lượng Tồn</th>
                                            <th>Mã Danh Mục</th>
                                            <th>Mã Thương Hiệu</th>
                                            <th>Trạng Thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are
                                    using a specialized version of DataTables built for Bootstrap 3. We have also
                                    customized the table headings to use Font Awesome icons in place of images. For
                                    complete documentation on DataTables, visit their website at <a target="_blank"
                                        href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank"
                                    href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>



            <!-- <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Context Classes
                        </div>
                        /.panel-heading
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@jsmith</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            /.table-responsive
                        </div>
                        /.panel-body
                    </div>
                    /.panel
                </div>
                /.col-lg-6 -->
        </div>
        <!-- /#page-wrapper -->

    </div>
 
    <!-- Hiếu  -->
     <script> const apiproducts = "{{ route('api.products') }}";</script>
    <script src=" @theme_admin('dist/js/ListProducts.js') "> </script>
    <!-- Hiếu -->

</body>
@endsection