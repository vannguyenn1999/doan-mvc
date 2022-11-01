<div class="container">
    <div class="product">
        <h1>Thêm Hãng Điện Thoại</h1>
        <table class="table table-dark table-hover">
            <form action="" method="POST" id="add">
                <div class="form-group">
                    <label for="masp">Tên Hãng Sản Phẩm</label>
                    <input type="text" name="nhanhieu" class="form-control" value="<?php echo isset($_POST['nhanhieu']) ? $_POST['nhanhieu'] : '' ?>">
                    <?php
                    if (isset($data['nhanhieu'])) {
                        echo '<label class="err">' . $data['nhanhieu'] . '</label>';
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label for="masp">Thông Hãng Tin Sản Phẩm</label>
                    <textarea name="thongtin" id="add" rows="5" cols="40" class="form-control"><?php echo isset($_POST['thongtin']) ? $_POST['thongtin'] : '' ?></textarea>
                    <?php
                    if (isset($data['thongtin'])) {
                        echo '<label class="err">' . $data['thongtin'] . '</label>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Thêm Hãng Sản Phẩm</button>
                    <button type="reset" class="btn btn-primary">Làm Mới</button>
                    <a class="btn btn-primary" href="http://localhost/doan-mvc/CompanyController/Index" role="button">Trở Lại</a>

                </div>
            </form>
        </table>
    </div>
</div>