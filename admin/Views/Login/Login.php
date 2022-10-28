<?php
 if (!isset($_SESSION['admin_login'])) {
    $message = "Vui Lòng Đăng Nhập";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
  }
  if (isset($_SESSION['logout'])) {
    $message = $_SESSION['logout'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['logout']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://localhost/doan-mvc/admin/assets/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="http://localhost/doan-mvc/admin/assets/js/validate.js"></script>
    <script src="http://localhost/doan-mvc/admin/assets/js/login.js"></script> -->
    <title>Đăng Nhập Hệ Thông</title>
</head>

<body>
    <div class="main">



        <form action="" method="POST" class="form" id="form-2">
            <h3 class="heading">Đăng nhập</h3>
            <div class="spacer"></div>

            <div class="form-group">
                <label for="username" class="form-label">Tài Khoản</label>
                <input id="username" name="username" type="text" placeholder="Nhập tài khoản" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Đăng nhập" class="form-submit">
            </div>
        </form>

    </div>
    <!-- <script src="http://localhost/doan-mvc/admin/assets/js/validate.js"></script>
    <script src="http://localhost/doan-mvc/admin/assets/js/login.js"></script> -->

</body>

</html>