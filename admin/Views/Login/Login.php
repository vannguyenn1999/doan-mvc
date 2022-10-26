<?php
if (isset($_SESSION['error'])) {
    $message = $_SESSION['error'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Hệ Thống</title>
    <link rel="stylesheet" href="http://localhost/doan-mvc/admin/assets/css/Admin_login.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header> Đăng Nhập Hệ Thống</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for=""> Tài Khoản :</label>
                    <input type="text" name="username">
                </div>
                <div class="field input">
                    <label for=""> Mật Khẩu :</label>
                    <input type="password" name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Đăng nhập"></br>
                </div>
                <div class="field button">
                    <!-- <a href="index.php">Trang Chủ</a> -->
                </div>
            </form>
        </section>
    </div>
    <!-- <script src="JS\hide-show-password.js"></script> -->

</body>

</html>