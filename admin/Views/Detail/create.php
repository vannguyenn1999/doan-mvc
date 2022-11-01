<div class="container">
    <div class="product">
        <h1>Thêm Thông Tin Sản Phẩm</h1>
        <table class="table table-dark table-hover">
            <form action="" method="POST" id="add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="masp">Tên Sản Phẩm</label><br>
                    <select name="masp" id="">
                        <?php for ($i = 0; $i < count($data['data']); $i++) { ?>
                            <option value="<?php
                                            echo $data['data'][$i][0]['ma_san_pham'];
                                            ?>">
                                <?php
                                echo $data['data'][$i][0]['ten_san_pham'];
                                ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cauhinh">Thông Số Cấu Hình</label>
                    <input type="text" name="cauhinh" class="form-control" value="<?php echo isset($_POST['cauhinh']) ? $_POST['cauhinh'] : '' ?>">
                    <?php
                    if (isset($data['error']['cauhinh'])) {
                        echo '<label class="err">' . $data['error']['cauhinh'] . '</label>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="sau">Thông Số Cam Sau</label>
                    <input type="text" name="sau" class="form-control" value="<?php echo isset($_POST['sau']) ? $_POST['sau'] : '' ?>">
                    <?php
                    if (isset($data['error']['sau'])) {
                        echo '<label class="err">' . $data['error']['sau'] . '</label>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="truoc">Thông Số Cam Trước</label>
                    <input type="text" name="truoc" class="form-control" value="<?php echo isset($_POST['truoc']) ? $_POST['truoc'] : '' ?>">
                </div>
                <?php
                    if (isset($data['error']['truoc'])) {
                        echo '<label class="err">' . $data['error']['truoc'] . '</label>';
                    }
                    ?>

                <div class="form-group">
                    <label for="ram">Thông Số Chip</label>
                    <input type="text" name="ram" class="form-control" value="<?php echo isset($_POST['ram']) ? $_POST['ram'] : '' ?>">
                </div>
                <?php
                    if (isset($data['error']['ram'])) {
                        echo '<label class="err">' . $data['error']['ram'] . '</label>';
                    }
                    ?>

                <div class="form-group">
                    <label for="dungluong">Thông Số Dung Lượng</label>
                    <input type="text" name="dungluong" class="form-control" value="<?php echo isset($_POST['dungluong']) ? $_POST['dungluong'] : '' ?>">
                </div>
                <?php
                    if (isset($data['error']['dungluong'])) {
                        echo '<label class="err">' . $data['error']['dungluong'] . '</label>';
                    }
                    ?>
                <div class="form-group">
                    <label for="tkm">Thông Tin Khuyến Mãi</label>
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