<?php

    session_start();
    require '../libraries/medoo.php';

    if (isset($_SESSION['userLogin']) && $_SESSION['isLogin'] === TRUE) {
        header('Location: index.php');
    }

    if (isset($_POST['login'])) {
        $username   = addslashes($_POST['username']);
        $password   = addslashes($_POST['password']);
        
        if (empty($username) || empty($password)) {
            $errors[]   = 'Không được để trống tài khoản hoặc mật khẩu!';
        } else {
            $result = $database->count('accounts', [
                'user_email'    => $username,
                'user_password' => md5($password),
                'user_role'     => 3
            ]);

            if ($result == 1) {
                $_SESSION['isLogin']    = TRUE;
                $_SESSION['userLogin']  = $username;
                header('Location: index.php');
            } elseif ($database->select('accounts', 'user_role', [
                'user_email'    => $username,
                'user_password' => $password
            ])[0] != 3) {
                $errors[]   = 'Bạn không đủ quyền truy cập!';
            } else {
                $errors[]   = 'Bạn nhập sai tài khoản hoặc mật khẩu!';
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ĐĂNG NHẬP HỆ THỐNG</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <h3 class="panel-title"><center><b>ĐĂNG NHẬP HỆ THỐNG</b></center></h3>
                    </div>
                    <?php
                        if ($errors) {
                            foreach ($errors as $error) {
                                echo '<br/><center><font color="red">'.$error.'</font></center>';
                            }
                        }
                    ?>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="username" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="login">ĐĂNG NHẬP</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
