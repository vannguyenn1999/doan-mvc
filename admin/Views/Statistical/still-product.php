<div class="container">
    <div class="product">
        <h1>Danh Sách Sản Phẩm Còn Lại </h1>
        <br>
        <br>
        <table class="table table-dark table-hover">
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Ảnh</th>
                <th>Số Lượng</th>
                <th>Action</th>
            </tr>
            <?php foreach ($data['result'] as $product) : ?>
                <tr>
                    <td><?php echo $product['ma_san_pham'] ?></td>
                    <td><?php echo $product['ten_san_pham'] ?></td>
                    <td><?php echo "<img src='" . DIR_HTTP . "/admin/assets/image/uploads/" . $product['anh'] . "'  width='150' height='150'>" ?></td>
                    <td><?php echo $product['so_luong'] ?></td>
                    <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $product['ma_san_pham'] ?>"><i class="fa-solid fa-square-plus fa-2x"></td>
                    <!-- The Modal -->
                    <div class="modal" id="myModal<?php echo $product['ma_san_pham'] ?>">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $product['ten_san_pham'] ?></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <?php $product['ma_san_pham'] ?>
                                            <input type="hidden" name="masp" value="<?php echo $product['ma_san_pham'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số Lượng</label>
                                            <input type="number" name="sl" class="form-control" placeholder="Mời Bạn Nhập Số Lượng">
                                            <?php
                                            if (isset($data['error']) && !empty($data['error'])) {
                                                echo '<label class="err">' . $data['error'] . '</label>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </tr>
            <?php endforeach; ?>
        </table>




    </div>
    <nav aria-label="Page navigation example">
        <ul style="text-align: center;" class="pagination">
            <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/StatisticalController/StillProduct?trang=<?php echo ($trang - 1) ?>">Sau</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/StatisticalController/StillProduct?trang=1">1</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/StatisticalController/StillProduct?trang=2">2</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/StatisticalController/StillProduct?trang=3">3</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/StatisticalController/StillProduct?trang=4">4</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/StatisticalController/StillProduct?trang=<?php echo ($trang + 1) ?>">Tiếp</a></li>
        </ul>
    </nav>
</div>

<!-- <script>
    $(document).ready(function() {
      $('button[type=button]').click(function() {
        alert('hi');
      })
    });
</script> -->