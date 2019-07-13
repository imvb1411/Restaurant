<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi Restaurant</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include("theme/$theme/header")
        @include("theme/$theme/aside")
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('content-title')
                    <small>@yield('content-subtitle')</small>
                </h1>
                {{--<ol class="breadcrumb">--}}
                    {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
                    {{--<li class="active">Dashboard</li>--}}
                {{--</ol>--}}
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include("theme/$theme/footer")
        @include("theme/$theme/controlbar")
        <div class="control-sidebar-bg"></div>
    </div>
        <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <!-- jQuery UI 1.11.4 -->
        {{--<script src="{{asset("assets/$theme/bower_components/jquery-ui/jquery-ui.min.js")}}"></script>--}}
        {{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
        {{--<script>--}}
            {{--$.widget.bridge('uibutton', $.ui.button);--}}
        {{--</script>--}}


        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
        @yield('scripts')
</body>
</html>