<div class="container">
    <div class="product">
        <h1>Tìm Kiếm Sản Phẩm</h1>
        <br>
        <div align="center">

            <form action="" method="POST">
                Tìm Kiếm: <input type="text" name="search" />
                <input type="submit" name="submit" value="Tìm" />
                <input type="reset" value="Làm Mới" />
            </form>
        </div>
        <br>
        <h4><?php echo $data['count']?> kết quả trả về với từ khoá <b><?php echo $data['search'] ?></b></h4>
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
            
            <?php
            foreach ($data['info'] as $product) :
            ?>
                <tr>
                    <td><?php echo $product['ma_san_pham'] ?></td>
                    <td><?php echo $product['ten_san_pham'] ?></td>
                    <td><?php echo "<img src='http://localhost/doan-mvc/admin/assets/image/uploads/" . $product['anh'] . "'  width='150' height='150'>" ?></td>
                    <td><?php echo $product['so_luong'] ?></td>
                    <td><?php echo $product['ten_nhan_hieu'] ?></td>
                    <td><?php echo $product['thong_tin'] ?></td>
                    <td><?php echo $product['gia'] ?></td>
                    <td><?php echo $product['create_at'] ?></td>
                    <td><a href="http://localhost/doan-mvc/ProductController/UpdateProduct?id=<?php echo $product['ma_san_pham'] ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
                    <td><a onclick="return confirm('bạn có muốn xoá sản phẩm này không ??')" href="http://localhost/doan-mvc/ProductController/DeleteProduct/<?php echo $product['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                </tr>

            <?php endforeach; ?>




        </table>
    </div>
</div>