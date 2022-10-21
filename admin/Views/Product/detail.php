<div class="container">
    <br>
    <h1>Sửa Thông Tin</h1>
    <?php foreach ($data as $product) : ?>
        <form action="" method="post" id="add" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="title" id="" class="form-control" value="<?php echo $product['ten_san_pham'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" name="price" id="" class="form-control" value="<?php echo $product['gia'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <br>
                    <?php echo "<img src='http://localhost/doan-mvc/admin/Views/Product/upload/" . $product['anh'] . "'  width='150' height='150'>" ?><br><br>
                    <input type="file" name="avatar" class="form-control-file" >
                </div>
                <div class="form-group">
                    <label for="">Số Lượng</label>
                    <input type="text" name="price" id="" class="form-control" value="<?php echo $product['so_luong'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Tên Nhãn Hiệu</label>
                    <input type="text" name="price" id="" class="form-control" value="<?php echo $product['ten_nhan_hieu'] ?>">
                </div>
               
                <div class="form-group">
                    <label for="">Info</label>
                    <textarea class="form-control" name="info" id="add" rows="5"><?php echo $product['thong_tin'] ?></textarea>
                </div>

        
            <button type="submit" name="submit" class="btn btn-primary">Sửa Thông Tin</button>
            <button type="reset" class="btn btn-primary">Làm Mới</button>
            <a class="btn btn-primary" href="http://localhost/doan-mvc/ProductController/Index" role="button">Trở Lại</a>
        </form>
        <?php endforeach; ?>
</div>