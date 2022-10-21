   <div class="container">
     <br>
     <h1>Danh Sách Sản Phẩm </h1>

     <a href="http://localhost/doan-mvc/HomeController/AddProduct" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Sản Phẩm</a>
     <br>
     <br>
     <table class="table table-dark table-hover">
       <tr>
         <th>ID</th>
         <th>Title</th>
         <th>Price</th>
         <th>Picture</th>
         <th>Content</th>
         <th>Create at</th>
         <th colspan="2">Action</th>
       </tr>
       <?php foreach ($data as $product) : ?>
         <tr>
           <td><?php echo $product['id'] ?></td>
           <td><?php echo $product['title'] ?></td>
           <td><?php echo $product['price'] ?></td>
           <!-- <td><?php echo $product['avatar'] ?></td> -->
           <td><?php echo "<img src='upload/" . $product['avatar'] . "'  width='150' height='150'>" ?></td>
           <td><?php echo $product['content'] ?></td>
           <td><?php echo $product['create_at'] ?></td>
           <td></td>
           <td></td>
         </tr>
       <?php endforeach; ?>
     </table>
   </div>