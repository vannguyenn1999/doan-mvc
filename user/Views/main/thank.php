
<div class="main-content">
    <div class="container">
        <h3>Cảm ơn bạn đã đặt hàng, <b><?php echo $result['ten_nguoi_dat'] ?></b></h3>
        <p>
            Mã đơn hàng của bạn: <b>#<?php echo $result['ma_don_hang'] ?></b>
        </p>
        <p>
            Số tiền cần thanh toán: <b> <?php echo number_format($result['tong']) ?> đ</b>
        </p>
        <div>
            <p>
                - Để thanh toán đơn hàng, bạn hãy chuyển khoản theo thông tin sau:
                <br>
                <b>
                    TECHCOMBANK NGUYEN HOA VAN <br>
                    0203200328091999 <br>
                    Chi nhành Hà Nội <br>
                </b>
                Nội dung chuyển khoản: Thanh toán đơn hàng #<?php echo $result['ma_don_hang'] ?>
            </p>
            <p>
                - Hoặc bạn có thể liên hệ trực tiếp với chúng tôi qua số điện thoại:
                <a href="tel:0528448515">0528448515</a>
            </p>
        </div>
        <h4>Thông tin người mua hàng</h4>
        <table border="1" cellpadding="8" cellspacing="0">
            <tbody>
                <tr>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td><?php echo $result['ten_nguoi_dat'] ?></td>
                    <td><?php echo $result['sdt_nguoi_nhan'] ?></td>
                    <td><?php echo $result['email_nguoi_nhan'] ?></td>
                    <td><?php echo $result['dc_nguoi_nhan'] ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <h4>Thông tin đơn hàng</h4>
        <table border="1" cellpadding="8" cellspacing="0">
            <tbody>
                <tr>
                    <th width="40%">Tên sản phẩm</th>
                    <th width="12%">Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
                <?php if($detail == null){ ?>
                                <tr> <td colspan="5" align="center"> Không có sản phẩm nào tồn tại trong giỏ hàng của bạn </td></tr>
                            <?php } else{ foreach ($detail as $v) : ?>
                                
                    <tr>
                        <td>
                            <a href="" class="content-product-a">
                                <img class="product-avatar img-responsive" src="http://localhost/doan-mvc/admin/assets/image/uploads/<?php echo $v['anh'] ?>" height="80">
                                <span class="content-product">
                                    <?php echo $v['ten_san_pham'] ?>
                                </span>
                            </a>
                        </td>
                        <td>
                            <?php echo $v['so_luong'] ?>
                        </td>
                        <td>
                        <?php  echo number_format($v['gia']); ?> đ 
                        </td>
                        <td>
                        <?php  echo number_format($v['gia'] * $v['so_luong']); ?> đ
                        </td>
                    </tr>
                    <?php  endforeach; } ?>
                <tr>
                    <td colspan="5" style="text-align: right">
                        Tổng giá trị đơn hàng:
                        <span class="product-price">
                            <?php
                            $sum = 0;
                            if ($detail == null) {
                                echo $sum;
                            } else {
                                foreach ($detail as $v) :
                                    $sum += $v['thanh_tien'];
                                endforeach;
                                echo number_format($sum) . ' đ';
                            }
                            ?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>