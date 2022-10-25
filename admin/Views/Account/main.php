<div class="container">
    <div class="product">
     <h1>Danh Sách Tài Khoản Khách Hàng </h1>
     <br>
     <br>
     <table class="table table-dark table-hover">
       <tr>
         <th>Tên Khách Hàng</th>
         <th>User Name</th>
         <th>Password</th>
         <th>Email</th>
         <th>Số Điện Thoại</th>
         <th>Địa Chỉ</th>
         <th>Ngày Tạo</th>
         <th>Action</th>
       </tr>
       <?php foreach ($data as $account) : ?>
         <tr>
           <td><?php echo $account['name'] ?></td>
           <td><?php echo $account['username'] ?></td>
           <td><?php echo $account['password'] ?></td>
           <td><?php echo $account['email'] ?></td>
           <td><?php echo $account['phone'] ?></td>
           <td><?php echo $account['address'] ?></td>
           <td><?php echo $account['create_at'] ?></td>
           <td><a onclick="return confirm('bạn có muốn tài khoản này không ??')" href="http://localhost/doan-mvc/AccountController/DeleteAccount/<?php echo $account['username'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>

         </tr>
       <?php endforeach; ?>
     </table>
   </div>
   </div>