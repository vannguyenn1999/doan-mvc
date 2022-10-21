<div class="container">
    <br>
    <h1> Thông Tin Sản Phẩm</h1>
    <table class="table table-dark table-hover">
        <?php foreach ($data as $row) : ?>
            <form action="update.php" method="GET" id="add" enctype="multipart/form-data">
                <input type="hidden" name="masp" value="<?php echo $ma_san_pham; ?>">
                <br>
                <h2>Tên Sản Phẩm</h2>
                <h4 style="color: red;"><?php echo $row['ten_san_pham'] ?></h4>
                <br>
                <div class="form-group">
                    <label for="tensp">Thông Tin Cấu Hình</label>
                    <input type="text" name="cauhinh" class="form-control" value="<?php echo $row['cau_hinh']; ?>">
                </div>

                <div class="form-group">
                    <label for="giasp">Thông Tin Cam Sau</label>
                    <input type="text" name="camsau" class="form-control" value="<?php echo $row['cam_sau']; ?>">
                </div>
                <div class="form-group">
                    <label for="soluong">Thông Tin Cam Trước</label>
                    <input type="text" name="camtruoc" class="form-control" value="<?php echo $row['cam_truoc']; ?>">
                </div>
                <div class="form-group">
                    <label for="soluong">Thông Tin Chip</label>
                    <input type="text" name="ram" class="form-control" value="<?php echo $row['ram']; ?>">
                </div>
                <div class="form-group">
                    <label for="soluong">Thông Tin Dung Lượng</label>
                    <input type="text" name="dungluong" class="form-control" value="<?php echo $row['dung_luong']; ?>">
                </div>
                <div class="form-group">
                    <label for="soluong">Khuyến Mại</label>
                    <input type="text" name="giamgia" class="form-control" value="<?php echo $row['giam_gia']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="submit">Sửa Thông Tin Sản Phẩm</button>
                    <a href="http://localhost/doan-mvc/DetailController/Index" class="btn btn-success" id="a_btn">Trở Lại</a>
                </div>
            </form>
        <?php endforeach; ?>

    </table>

</div>