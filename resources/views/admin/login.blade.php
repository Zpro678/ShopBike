<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        
                        
                        <form role="form" method="POST" action="{{ route('admin.login.store') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="{{ old('password') }}">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>

                        <!-- Thông báo -->
                        {{-- Hiện success nếu từ redirect --}}
                        @if (session('success'))
                            <div style="color: green; margin-top: 25px;">{{ session('success') }}</div>
                        @endif

                        {{-- Hiện error từ session --}}
                        @if (session('error'))
                            <div style="color: red; background: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 10px; margin-top: 25px;">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Hiện lỗi nếu có --}}
                        @if ($errors->any())
                            <div style="margin-top: 25px;">
                                @foreach ($errors->all() as $err)
                                    <p style="color: red;">{{ $err }}</p>
                                @endforeach
                            </div>
                        @endif
                        <!-- End-Thông báo -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
