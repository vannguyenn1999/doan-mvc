<div class="container">
    <div class="product">
    
        <h1>Thêm Thông Tin Sản Phẩm</h1>
        <table class="table table-dark table-hover">
            <form action="" method="POST" id="add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="masp">Tên Sản Phẩm</label><br>
                    <select name="masp" id="">
                        <?php for ($i = 0; $i < count($data); $i++) { ?>
                            <option value="<?php
                                            echo $data[$i][0]['ma_san_pham'];
                                            ?>">
                                <?php
                                echo $data[$i][0]['ten_san_pham'];
                                ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tensp">Thông Số Cấu Hình</label>
                    <input type="text" name="cauhinh" class="form-control" value="<?php echo isset($_POST['cauhinh']) ? $_POST['cauhinh'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="soluong">Thông Số Cam Sau</label>
                    <input type="text" name="sau" class="form-control" value="<?php echo isset($_POST['sau']) ? $_POST['sau'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="giasp">Thông Số Cam Trước</label>
                    <input type="text" name="truoc" class="form-control" value="<?php echo isset($_POST['truoc']) ? $_POST['truoc'] : '' ?>">
                </div>

                <div class="form-group">
                    <label for="soluong">Thông Số Chip</label>
                    <input type="text" name="ram" class="form-control" value="<?php echo isset($_POST['ram']) ? $_POST['ram'] : '' ?>">
                </div>

                <div class="form-group">
                    <label for="soluong">Thông Số Dung Lượng</label>
                    <input type="text" name="dungluong" class="form-control" value="<?php echo isset($_POST['dungluong']) ? $_POST['dungluong'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="soluong">Thông Tin Khuyến Mãi</label>
                    <input type="text" name="khuyenmai" class="form-control" value="<?php echo isset($_POST['khuyenmai']) ? $_POST['khuyenmai'] : '' ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Thêm Thông Tin Sản Phẩm</button>
                    <button type="reset" class="btn btn-primary">Làm Mới</button>
                    <a class="btn btn-primary" href="http://localhost/doan-mvc/DetailController/Index" role="button">Trở Lại</a>

                </div>
            </form>`

        </table>


    </div>
</div>