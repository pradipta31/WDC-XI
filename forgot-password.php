<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login WDC Globaliti</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="style/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="style/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="style/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>WDC</b> Globaliti</a>
        </div>
        <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Email yang anda masukkan tidak ada!";
                } else if($_GET['pesan'] == "password"){
                    echo "Password tidak sama silahkan ulangi lagi!";
                }
            }
        ?>
        <div class="login-box-body">
            <p class="login-box-msg">Forgot your password?</p>

            <form action="proses-forgot-password.php" method="POST" enctype="multipart/form-data">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Retype Password" name="re_password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.php" class="btn btn-default btn-block btn-flat">Kembali</a>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


    <script src="style/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="style/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="style/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
</body>

</html>