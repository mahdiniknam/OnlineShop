<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="dist/css/custom-style.css">
</head>

<body>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">فرم ورود</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('loginUser') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">آدرس ایمیل</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="ایمیل را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleInputPassword1" placeholder="پسورد را وارد کنید">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- REQUIRED SCRIPTS -->

                    <!-- jQuery -->
                    <script src="plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap -->
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- AdminLTE -->
                    <script src="dist/js/adminlte.js"></script>

                    <!-- OPTIONAL SCRIPTS -->
                    <script src="plugins/chart.js/Chart.min.js"></script>
                    <script src="dist/js/demo.js"></script>
                    <script src="dist/js/pages/dashboard3.js"></script>

</body>

</html>
