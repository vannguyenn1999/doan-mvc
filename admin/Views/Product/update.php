<div class="container">
    <div class="product">
        <h1>Sửa Thông Tin</h1>
        <form action="" method="post" id="add" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="tensp" id="" class="form-control" value="<?php echo $data['content']['ten_san_pham'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" name="giasp" id="" class="form-control" value="<?php echo $data['content']['gia'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <br>
                    <td><img class="img-hover" src="<?php echo DIR_HTTP ?>/admin/assets/image/uploads/<?php echo $data['content']['anh'] ?>" /></td>
                    <br>
                    <br>
                    <input type="file" name="anh" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="">Số Lượng</label>
                    <input type="text" name="soluong" id="" class="form-control" value="<?php echo $data['content']['so_luong'] ?>">
                </div>
                <div class="form-group">
                    <label for="kieu">Tên Nhãn Hiệu</label><br>
                    <select name="nhanhieu" id="">
                        <option value="<?php echo $data['content']['ten_nhan_hieu'] ?>">
                            <?php
                            echo $data['content']['ten_nhan_hieu'];
                            ?>
                        </option>
                        <?php foreach ($data['company'] as $company) : ?>
                            <option value="<?php echo $company['ten_nhan_hieu']; ?>">
                                <?php

                                echo $company['ten_nhan_hieu'];
                                ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kieu">Kiểu Sản Phẩm</label><br>
                    <select name="kieu" id="">
                        <?php foreach ($data['brand'] as $brand) : ?>
                            <option value="<?php echo $brand['id_kieu']; ?>">
                                <?php
                                echo $brand['id_kieu'];
                                ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Info</label>
                    <textarea class="form-control" name="thongtin" id="add" rows="5"><?php echo $data['content']['thong_tin'] ?></textarea>
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Sửa Thông Tin</button>
                <button type="reset" class="btn btn-primary">Làm Mới</button>
                <a class="btn btn-primary" href="<?php echo DIR_HTTP ?>/ProductController/Index" role="button">Trở Lại</a>
        </form>

    </div>
</div>