<div class="container">
    <div class="product">
     <h1>Danh Sách Hoá Đơn Chờ Xử Lý </h1>
     <br>
     <table class="table table-dark table-hover">
       <tr>
         <th>Mã Đơn Hàng</th>
         <th>Tên Khách Hàng</th>
         <th>Email</th>
         <th>SĐT</th>
         <th>Địa Chỉ</th>
         <th>Ghi Chú</th>
         <th>Tổng</th>
         <th>Phương Thức</th>
         <th>Ngày Đặt</th>
         <th colspan="2">Chi Tiết</th>
       </tr>
       <?php foreach ($data as $r) : ?>
         <tr>
           <td><?php echo $r['ma_don_hang'] ?></td>
           <td><?php echo $r['ten_nguoi_dat'] ?></td>
           <td><?php echo $r['email_nguoi_nhan'] ?></td>
           <td><?php echo $r['sdt_nguoi_nhan'] ?></td>
           <td><?php echo $r['dc_nguoi_nhan'] ?></td>
           <td><?php echo $r['ghi_chu'] ?></td>
           <td><?php echo $r['tong'] ?></td>
           <td><?php echo $r['phuong_thuc'] ?></td>
           <td><?php echo $r['create_at'] ?></td>
           <td><a href="http://localhost/doan-mvc/BillController/Detail?id=<?php echo $r['ma_don_hang'] ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
           <td><a onclick="return confirm('bạn có muốn xử lý đơn hàng này không ?')" href="http://localhost/doan-mvc/BillController/BillHandle?id=<?php echo $r['ma_don_hang'] ?>"><i class="fa-solid fa-dollar-sign fa-2x"></i></a></td>


         </tr>
       <?php endforeach; ?>
     </table>
   </div>
   </div>