<div class="main-content">
<?php
    if(isset($_SESSION['cart'])){
        $data = $_SESSION['cart'];
    }
    ?>
    <div class="container">
        <h1 class="post-list-title">
            Thanh toán
        </h1>
        <form action="" method="POST" id='add'>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h5 class="center-align">Thông tin khách hàng</h5>
                    <div class="form-group">
                        <label>Họ tên <span class="red">*</span></label>
                        <input type="text" name="fullname" value="" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>SĐT <span class="red">*</span> </label>
                        <input type="number" min="0" name="mobile" value="" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" min="0" name="email" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ nhận hàng</label>
                        <input type="text" name="address" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ghi chú thêm</label>
                        <textarea name="note" class="form-control" id='note'></textarea>
                    </div>
                    <div class="form-group">
                        <label>Chọn phương thức thanh toán</label> <br/>
                        <input type="radio" name="method" value="0"/> Thanh toán trực tuyến <br/>
                        <input type="radio" name="method" checked value="1"/> COD (dựa vào địa chỉ của bạn) <br/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h5 class="center-align">Thông tin đơn hàng của bạn</h5>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th width="50%">Tên sản phẩm</th>
                            <th width="8%">Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php if($data == null){ ?>
                                <tr> <td colspan="5" align="center"> Không có sản phẩm nào tồn tại trong giỏ hàng của bạn </td></tr>
                            <?php } else{ foreach ($data as $k=>$r) : 
                                if(!$k == null) {?>
                        <tr>
                            <td>
                                <a href="product_detail.html" class="content-product-a">
                                    <img class="product-avatar img-responsive"
                                         src="http://localhost/doan-mvc/admin/assets/image/uploads/<?php echo $r['anh'] ?>" width="60"/>
                                    <span class="content-product">
                                    <?php echo $r['ten_san_pham'] ?>
                                    </span>
                                </a>
                            </td>
                            <td>
                              <span class="product-amount">
                              <?php echo $r['tyt'] ?>
                              </span>
                            </td>
                            <td>
                              <span class="product-price-payment">
                              <?php echo $r['gia'] ?>
                              </span>
                            </td>
                            <td>
                              <span class="product-price-payment">
                              <?php  echo   $r['gia'] * $r['tyt']; ?>
                              </span>
                            </td>
                        </tr>
                        
                        <?php } endforeach; } ?>
                        <tr>
                            <td colspan="5" class="product-total">
                                Tổng giá trị đơn hàng:
                                <span class="product-price">
                                <?php 
                                        $sum = 0;
                                        if($data == null){
                                            echo $sum;
                                        }else{
                                           foreach ($data as $v ):
                                                $sum += $v['tong'];
                                           endforeach;
                                           echo $sum;                                          
                                        }
                                        ?>
                            </span>
                            </td>
                        </tr>
                        <input type="hidden" name='tong' value="<?php echo $sum ?>">
                        </tbody>
                    </table>
                    <input type="submit" name="submit" value="Thanh toán" class="btn btn-primary">
                    <a href="http://localhost/doan-mvc/UserHomeController/Cart" class="btn btn-secondary">Về trang giỏ hàng</a>
                </div>
            </div>

        </form>

    </div>
</div>
