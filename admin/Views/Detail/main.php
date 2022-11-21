<div class="container">
    <div class="product">
        <br>
        <h1>Danh Sách Thông Tin Sản Phẩm</h1>
        <a href="<?php echo DIR_HTTP ?>/DetailController/AddDetail" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Thông Tin Sản Phẩm</a>
        <a href="<?php echo DIR_HTTP ?>/DetailController/SearchDetail" class="btn btn-success" id="a_func"> <i class="fa fa-search"> </i> Tìm Kiếm Thông Tin Sản Phẩm </a>
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
                    <TH>NGÀY TẠO</TH>
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
                        <!-- <td><?php echo $r['giam_gia'] ?></td> -->
                        <td><?php echo $r['create_at'] ?></td>
                        <td><a href="<?php echo DIR_HTTP ?>/DetailController/UpdateDetail?id=<?php echo $r['ma_san_pham'] ?>" class="btn btn-info">Sửa</a></td>
                        <td><a onclick="return confirm('bạn có muốn xoá thông tin này không ??')" href="<?php echo DIR_HTTP ?>/DetailController/DeleteDetail/<?php echo $r['ma_san_pham'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=<?php echo ($trang - 1) ?>">Sau</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=1">1</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=2">2</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=3">3</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=4">4</a></li>
                <!-- <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=5">5</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/DetailController/Index?trang=6">6</a></li> -->
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/UserHomeController/Product?trang=<?php echo ($trang +1 ) ?>">Tiếp</a></li>
            </ul>
        </nav>
    </div>
</div>