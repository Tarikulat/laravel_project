@include('layout.include.header')

@include('layout.include.sidebar')

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            @yield('content')

        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@include('layout.include.footer')
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="../../style-assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../../style-assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="../../style-assets/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../../style-assets/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="../../style-assets/dist/js/app.min.js" type="text/javascript"></script>
</body>

</html>
