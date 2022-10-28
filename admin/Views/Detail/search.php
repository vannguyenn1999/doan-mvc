<div class="container">
    <div class="product">
        <h1>Tìm Kiếm Thông Tin Sản Phẩm</h1>
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
                    <th>TÊN SẢN PHẨM</th>
                    <TH>CẤU HÌNH</TH>
                    <TH>CAM TRƯỚC</TH>
                    <th>CAM SAU</th>
                    <TH>CHIP</TH>
                    <TH>DUNG LƯỢNG</TH>
                    <TH>GIẢM GIÁ</TH>
                    <TH colspan="2">THAO TÁC</TH>
                </tr>
            
            <?php
            foreach ($data['info'] as $r) :
            ?>
                 <tr>
                        <td><?php echo $r['ten_san_pham'] ?></td>
                        <td><?php echo $r['cau_hinh'] ?></td>
                        <td><?php echo $r['cam_truoc'] ?></td>
                        <td><?php echo $r['cam_sau'] ?></td>
                        <td><?php echo $r['ram'] ?></td>
                        <td><?php echo $r['dung_luong'] ?></td>
                        <td><?php echo $r['giam_gia'] ?></td>
                        <td><a href="http://localhost/doan-mvc/DetailController/UpdateDetail?id=<?php echo $r['ma_san_pham'] ?>" class="btn btn-info"> Sửa</a></td>
                        <td><a onclick="return confirm('bạn có muốn xoá thông tin này không ??')" href="http://localhost/doan-mvc/DetailController/DeleteDetail?id=<?php echo $r['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                    </tr>

            <?php endforeach; ?>




        </table>
    </div>
</div>