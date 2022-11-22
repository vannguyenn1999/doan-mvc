<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Hoá Đơn</title>
    <link rel="stylesheet" href="<?php echo DIR_HTTP ?>/admin/assets/css/print.css">
</head>

<body onload="window.print();">
    <div id="page" class="page">
        <br />
        <div class="title">
            HÓA ĐƠN THANH TOÁN
            <br />
            -------oOo-------
        </div>
        <br />
        <br />
        <div class="header-table">
            <div class="header-left">
                <h6><i>Tên Khách Hàng : <?php echo $data[0]['ten_nguoi_dat'] ?></i></h6>
            </div>
            <div class="header-right">
                <h6><i>Ngày Thanh Toán : <?php echo $data[0]['create_at'] ?></i></h6>
            </div>
            <div class="header-right">
                <h6><i>Mã Đơn Hàng : <?php echo $data[0]['ma_don_hang'] ?></i></h6>
            </div>
            <div class="header-right">
                <h6><i>Phương Thức Thanh Toán : <?php echo $data[0]['phuong_thuc'] ?></i></h6>
            </div>
            <div class="header-right">
                <h6><i>Số Điện Thoại Khách Hàng : <?php echo $data[0]['sdt_nguoi_nhan'] ?></i></h6>
            </div>
        </div>
        <br>
        <h4 style="text-align: center;"><b>Chi Tiết Hoá Đơn</b></h4>
        <hr>
        <br>
        
        <table class="TableData">
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Đơn giá</th>
                <th>Số Lượng</th>
                <th>Thành tiền</th>
            </tr>
            <?php
            $i = 1;
            foreach ($data as $item) :
            ?>
                <tr style="text-align: center;">
                    <td><?php echo $i++  ?></td>
                    <td style="text-align: left; padding-left:10px"><?php echo $item['ten_san_pham'] ?></td>
                    <td><?php echo number_format($item['gia']) ?> </td>
                    <td><?php echo $item['so_luong'] ?></td>
                    <td><?php echo number_format( $item['thanh_tien']) ?> </td>
                </tr>
            <?php endforeach ?>

        </table>
        <br>
        <h6 style="text-align: right;"><b>Tổng : <?php echo number_format($data[0]['tong']) ?> đ</b></h6>
        <h6><i>Ngày In Hoá Đơn : <?php echo date('d-m-Y h:i:s'); ?></i></h6>
        <div class="footer-left">Hà Nội, ngày <?php echo date('d') ?> tháng <?php echo date('m') ?> năm <?php echo date('Y') ?><br />
            Khách hàng </div>
        <div class="footer-right">Hà Nội, ngày <?php echo date('d') ?> tháng <?php echo date('m') ?> năm <?php echo date('Y') ?><br />
            Nhân viên </div>
    </div>
</body>

</html>