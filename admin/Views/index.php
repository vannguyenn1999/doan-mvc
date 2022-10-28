<!doctype html>
<html lang="en">

<head>
  <title>Quản Lý SHOP 123</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://localhost/doan-mvc/admin/assets/css/style.css">
  <link rel="stylesheet" href="http://localhost/doan-mvc/admin/assets/css/css.css">

  <!-- <style>
    .img-hover {
      width: 150px;
      height: 150px;
      transition: transform .2s; /* Animation */
    }

    .img-hover:hover {
      /* align-items: center; */
      width: 300px;
      transform: scale(1.5);
      height: 300px;
    }
  </style> -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://img.freepik.com/vector-premium/logo-apple-gradient-estilo-colorido_116762-694.jpg" />


  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <?php
  // session_start();

  if (isset($_SESSION['success'])) {
    $message = $_SESSION['success'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['error'])) {
    $message = $_SESSION['error'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['error']);
  }
  // if (!isset($_SESSION['admin_login'])) {
  //   $message = "Vui Lòng Đăng Nhập";
  //   echo "<script type='text/javascript'>alert('$message');</script>";
  //   header('Location: http://localhost/doan-mvc/LoginController/Login');
  //   exit();
  // }
  require_once 'header.php';


  ?>




</body>

</html>