<div class="container">
    <div class="product">
        <br>
        <h1>Danh Sách Thông Tin Sản Phẩm</h1>
        <a href="http://localhost/doan-mvc/DetailController/AddDetail" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Thông Tin Sản Phẩm</a>
        <a href="http://localhost/doan-mvc/DetailController/SearchDetail" class="btn btn-success" id="a_func"> <i class="fa fa-search"> </i> Tìm Kiếm Thông Tin Sản Phẩm </a>
        <br>
        <br>
        <table class="table table-dark table-striped">

            <thead>
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
            </thead>
            <tbody>
                <?php foreach ($data as $r) : ?>
                    <tr>
                        <td><?php echo $r['ten_san_pham'] ?></td>
                        <td><?php echo $r['cau_hinh'] ?></td>
                        <td><?php echo $r['cam_truoc'] ?></td>
                        <td><?php echo $r['cam_sau'] ?></td>
                        <td><?php echo $r['ram'] ?></td>
                        <td><?php echo $r['dung_luong'] ?></td>
                        <td><?php echo $r['giam_gia'] ?></td>
                        <td><a href="http://localhost/doan-mvc/DetailController/UpdateDetail?id=<?php echo $r['ma_san_pham'] ?>" class="btn btn-info">Sửa</a></td>
                        <td><a onclick="return confirm('bạn có muốn xoá thông tin này không ??')" href="http://localhost/doan-mvc/DetailController/DeleteDetail/<?php echo $r['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>
    </div>
</div>