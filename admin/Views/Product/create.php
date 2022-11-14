<div class="container">
    <div class="product">
        <h1>Thêm Sản Phẩm</h1>
      
        <table class="table table-dark table-hover">
            <form action="" method="POST" id="add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="masp">Mã Sản Phẩm</label>
                    <input type="text" name="masp" id="masp" class="form-control" value="<?php echo isset($_POST['masp']) ? $_POST['masp'] : '' ?>">
                    <?php
                    if (isset($data['error']['ma_san_pham'])) {
                        echo '<label class="err">' . $data['error']['ma_san_pham'] . '</label>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="tensp">Tên Sản Phẩm</label>
                    <input type="text" name="tensp" id="tensp" class="form-control" value="<?php echo isset($_POST['tensp']) ? $_POST['tensp'] : '' ?>">
                    <?php
                    if (isset($data['error']['ten_san_pham'])) {
                        echo '<label class="err">' . $data['error']['ten_san_pham'] . '</label>';
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label for="picture">Ảnh</label>
                    <input type="file" name="anh" id="anh" class="form-control-file">
                    <?php
                    if (isset($data['error']['anh'])) {
                        echo '<label class="err">' . $data['error']['anh'] . '</label>';
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label for="giasp">Giá Sản Phẩm</label>
                    <input type="text" name="giasp" id="gia" class="form-control" value="<?php echo isset($_POST['giasp']) ? $_POST['giasp'] : '' ?>">

                    <?php
                    if (isset($data['error']['gia'])) {
                        echo '<label class="err">' . $data['error']['gia'] . '</label>';
                    }
                    ?>


                </div>
                <div class="form-group">
                    <label for="soluong">Số Lượng</label>
                    <input type="text" name="soluong" id="soluong" class="form-control" value="<?php echo isset($_POST['soluong']) ? $_POST['soluong'] : '' ?>">
                    <?php
                    if (isset($data['error']['sl'])) {
                        echo '<label class="err">' . $data['error']['sl'] . '</label>';
                    }
                    ?>


                </div>
                <div class="form-group">
                    <label for="kieu">Tên Nhãn Hiệu</label><br>
                    <select name="nhanhieu" id="">
                        <?php foreach ($data['company'] as $row) : ?>
                            <option value="<?php echo $row['ten_nhan_hieu']; ?>">
                                <?php
                                echo $row['ten_nhan_hieu'];
                                ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kieu">Kiểu Sản Phẩm</label><br>
                    <select name="kieu" id="">
                        <?php foreach ($data['brand'] as $row) : ?>
                            <option value="<?php echo $row['id_kieu']; ?>">
                                <?php
                                echo $row['id_kieu'];
                                ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="masp">Thông Tin Sản Phẩm</label>
                    <textarea name="thongtin" id="add" rows="5" cols="40" class="form-control"><?php echo isset($_POST['thongtin']) ? $_POST['thongtin'] : '' ?></textarea>
                    <?php
                    if (isset($data['error']['tt'] )) {
                        echo '<label class="err">' . $data['error']['tt'] . '</label>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                    <button type="reset" class="btn btn-primary">Làm Mới</button>
                    <a class="btn btn-primary" href="<?php echo DIR_HTTP ?>/ProductController/Index" role="button">Trở Lại</a>
                </div>
            </form>
        </table>
    </div>
</div>
