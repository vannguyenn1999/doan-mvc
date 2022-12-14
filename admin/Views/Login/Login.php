<?php

if (isset($_SESSION['logout'])) {
    $message = $_SESSION['logout'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['logout']);
}

if (isset($_SESSION['error'])) {
    $message = $_SESSION['error'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['error']);
}

if (!isset($_SESSION['admin_login'])) {
    $message = 'Mời Bạn Đăng Nhập Để Tiếp Tục';
    echo "<script type='text/javascript'>alert('$message');</script>";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/admin/assets/css/login.css">
    <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <?php
                if (isset($data['username'])) {
                    echo '<label class="form-message">' . $data['username'] . '</label>';
                }
                ?>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <?php
                if (isset($data['password'])) {
                    echo '<label class="form-message">' . $data['password'] . '</label>';
                }
                ?>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Đăng nhập" class="form-submit">
                <button class="form-submit"><a href="<?php echo DIR_HTTP ?>">Trang Chủ</a></button>
            </div>
        </form>

    </div>
</body>

</html>