<div class="main-content">
    <?php
    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";
    if(isset($_SESSION['cart'])){
        $data = $_SESSION['cart'];
    }
    echo count($data);
    ?>
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
                            <?php if($data == null){ ?>
                                <tr> <td colspan="5" align="center"> Không có sản phẩm nào tồn tại trong giỏ hàng của bạn </td></tr>
                            <?php } else{ foreach ($data as $k=>$r) : 
                                if(!$k == null) {?>
                                <tr>
                                    <td>
                                        <a href="" class="content-product-a">
                                            <img class="product-avatar img-responsive" src="http://localhost/doan-mvc/admin/assets/image/uploads/<?php echo $r['anh'] ?>" height="80">
                                            <span class="content-product">
                                                <?php echo $r['ten_san_pham'] ?>
                                            </span>
                                        </a>
                                    </td>
                                    <td>
                                        <input type="number" min="0" max="<?php echo $r['so_luong'] ?>" name="sl" class="product-amount form-control" value="<?php echo $r['tyt'] ?>">
                                    
                                    </td>
                                    <td>
                                        <?php echo $r['gia'] ?>
                                    </td>
                                    <td>
                                        <?php  echo   $r['gia'] * $r['tyt']; ?>
                                    </td>
                                    <td>
                                        <a class="content-product-a" href="http://localhost/doan-mvc/UserHomeController/Remove?id=<?php echo $r['ma_san_pham'] ?>">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } endforeach; } ?>
                            <tr>
                               
                                <td colspan="5" style="text-align: right">
                                    Tổng giá trị đơn hàng:

                                    <span class="product-price">
                                        <?php 
                                        foreach ($data as $k=>$r) : 
                                        for ($i=0;$i < count($data);$i++){
                                            $sum = $r['tong'];
                                            $sum += $r['tong'];
                                        }
                                    endforeach;
                                        echo $sum ?>
                                       
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