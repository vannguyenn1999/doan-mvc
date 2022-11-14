<div class="main-content">
    <div class="container">
        <div class="row">

            <div class="detail-content-wrap con-md-8 col-sm-8 col-xs-12">
                <div class="product-info-wrap">
                    <div class="product-image-info">
                        <img src="<?php echo DIR_HTTP ?>/admin/assets/image/uploads/<?php echo $data['detail']['anh'] ?>" width="260" title="Samsung Note 10">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"> <?php echo $data['detail']['ten_san_pham'] ?></h3>
                        <div class="product-price">
                            <?php echo number_format($data['detail']['gia']) ?> đ
                        </div>
                        <div class="product-cart">
                            <a href="<?php echo DIR_HTTP ?>/UserHomeController/Cart?id=<?php echo $data['detail']['ma_san_pham'] ?>" class="">
                                <span data-id="92084" class="add-to-cart-now">
                                <i class="fa fa-cart-plus"></i> Thêm vào giỏ</span>
                            </a>
                        </div>


                    </div>
                </div>

                <!--Timeline items end -->
                <div class="detail-content-wrap">
                    <div class="detail-description">
                        <div class="description-productdetail">
                            <p style="font-size: 30px;"> <b>Thông Tin Chi Tiết</b> </p>
                            <p><i class="fa-solid fa-mobile-screen-button"></i> <?php echo $data['detail']['cau_hinh'] ?></p>
                            <p><i class="fa-solid fa-camera"></i> <?php echo  $data['detail']['cam_sau'] ?></p>
                            <p><i class="fa-solid fa-camera-rotate"></i> <?php echo  $data['detail']['cam_truoc'] ?></p>
                            <p><i class="fa-solid fa-microchip"></i> <?php echo  $data['detail']['ram'] ?></p>
                            <p><i class="fa-sharp fa-solid fa-memory"></i> <?php echo  $data['detail']['dung_luong'] ?></p>
                        </div>
                    </div>
                    <div class="detail-summary">
                        <strong><?php echo $data['detail']['thong_tin'] ?></strong>
                    </div>

                </div>

            </div>

            <div class="news-relative-wrap col-md-4 col-sm-4 col-xs-12">
                <h3 class="link-category-item">Sản phẩm khác</h3>
                <ul class="news-relative">
                    <?php foreach ($data['more'] as $more) : ?>
                        <li>
                            <a href='<?php echo DIR_HTTP ?>/UserHomeController/Detail?id=<?php echo $more['ma_san_pham'] ?>' class="news-relative-link">
                                <span class="news-relative-img">
                                    <img src="<?php echo DIR_HTTP ?>/admin/assets/image/uploads/<?php echo $more['anh'] ?>" alt="no-image" title="SamSung Note 10" class="detail-relative-img" />
                                </span>
                                <span class="detail-relative-content">
                                    <?php echo $more['ten_san_pham'] ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>