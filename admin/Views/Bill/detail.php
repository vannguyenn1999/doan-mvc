<div class="container">
    <div class="product">
     <h1>Chi Tiết Hoá Đơn </h1>
     <br>
     <table class="table table-dark table-hover">
       <tr>
         <th>Mã Đơn Hàng</th>
         <th>Mã Sản Phẩm</th>
         <th>Tên Sản Phẩm</th>
         <th>Số Lượng</th>
         <th>Giá</th>
         <th>Thành Tiền</th>
         <th>Ngày Đặt</th>
       </tr>
       <?php foreach ($data as $r) : ?>
         <tr>
           <td><?php echo $r['ma_don_hang'] ?></td>
           <td><?php echo $r['ma_san_pham'] ?></td>
           <td><?php echo $r['ten_san_pham'] ?></td>
           <td><?php echo $r['so_luong'] ?></td>
           <td><?php echo $r['gia'] ?></td>
           <td><?php echo $r['thanh_tien'] ?></td>
           <td><?php echo $r['create_at'] ?></td>
         </tr>
       <?php endforeach; ?>
     </table>
   </div>
   </div>