
<div class="main-content">
    <div class="container">
        <h1 class="post-list-title">
            Giỏ hàng của bạn
        </h1>
        <div class="main-content-wrapper">
            <div class="main">
                <form action="" method="post">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th width="40%">Tên sản phẩm</th>
                                <th width="12%">Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                            <?php foreach($data as $r) : ?>
                            <tr>
                                <td>
                                    <a href="product.html" class="content-product-a">
                                        <img class="product-avatar img-responsive" src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png" height="80">
                                        <span class="content-product">
                                            <?php echo $r['TenDT'] ?>
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <input type="number" min="0" name="92084" class="product-amount form-control" value="<?php echo $r['Amount'] ?>">
                                </td>
                                <td>
                                <?php echo $r['Gia']?>
                                </td>
                                <td>
                                <?php echo $r['Gia'] * $r['Amount'] ?>
                                </td>
                                <td>
                                    <a class="content-product-a" href="">
                                    <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                           
                            <tr>
                                <?php for($i=0;$i<count($data);$i++){
                                    $sum = 0;
                                    $sum += $data[$i]['Gia']; }?>
                                <td colspan="5" style="text-align: right">
                                    Tổng giá trị đơn hàng:

                                    <span class="product-price">
                                        <?php echo $sum ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="product-payment">
                                    <input type="submit" name="submit" value="Cập nhật lại giá" class="btn btn-primary">
                                    <a href="http://localhost/doan-mvc/UserHomeController/Payment" class="btn btn-success">Đến trang thanh toán</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>