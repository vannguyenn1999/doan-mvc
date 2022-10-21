   <div class="container">
     <br>
     <h1>Danh Sách Sản Phẩm </h1>

     <a href="http://localhost/doan-mvc/ProductController/AddProduct" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Sản Phẩm</a>
     <br>
     <br>
     <table class="table table-dark table-hover">
       <tr>
         <th>Mã Sản Phẩm</th>
         <th>Tên Sản Phẩm</th>
         <th>Ảnh</th>
         <th>Số Lượng</th>
         <th>Tên Nhãn Hiệu</th>
         <th>Thông Tin</th>
         <th>Giá</th>
         <th>Ngày Tạo</th>
         <th colspan="2">Action</th>
       </tr>
       <?php foreach ($data as $product) : ?>
         <tr>
           <td><?php echo $product['ma_san_pham'] ?></td>
           <td><?php echo $product['ten_san_pham'] ?></td>
           <td><?php echo "<img src='http://localhost/doan-mvc/admin/Views/Product/upload/" . $product['anh'] . "'  width='150' height='150'>" ?></td>
           <td><?php echo $product['so_luong'] ?></td>

           <td><?php echo $product['ten_nhan_hieu'] ?></td>
           <td><?php echo $product['thong_tin'] ?></td>
           <td><?php echo $product['gia'] ?></td>
           <td><?php echo $product['ngay_tao'] ?></td>
           <td><a href="http://localhost/doan-mvc/ProductController/GetProduct/<?php echo $product['ma_san_pham'] ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
           <td><a onclick="return confirm('bạn có muốn xoá id này không ??')" href="http://localhost/doan-mvc/ProductController/GetProduct/DeleteProduct/<?php echo $product['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>

         </tr>
       <?php endforeach; ?>
     </table>
   </div>