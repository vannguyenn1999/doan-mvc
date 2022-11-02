<div class="main-content">
    <div class="product-wrap">

        <!-- Sản Phẩm -->
        <div class="product container">
            <h1 class="post-list-title">
                <a href="#" class="link-category-item">Sản phẩm mới nhất</a>
            </h1>
            <div class="link-secondary-wrap row">
                <?php foreach ($data as $product) : ?>
                    <div class="service-link col-md-3 col-sm-6 col-xs-12">
                        <a href="http://localhost/doan-mvc/UserHomeController/Detail?id=<?php echo $product['ma_san_pham'] ?>">
                            <img class="secondary-img img-responsive" title=" <?php echo $product['ten_san_pham'] ?>" src="http://localhost/doan-mvc/admin/assets/image/uploads/<?php echo $product['anh'] ?>" alt=" <?php echo $product['ten_san_pham'] ?>" />
                            <span class="shop-title">
                                <?php echo $product['ten_san_pham'] ?>
                            </span>
                        </a>
                        <span class="shop-price">
                            <?php echo $product['gia'] ?>
                        </span>
                        <span data-id="92090" class="add-to-cart">Thêm vào giỏ</span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Slide -->
        <div class="news-wrap">
            <div class="news container">
                <h1 class="post-list-title">
                    <a href="/news.html" class="link-category-item">Khuyễn Mãi Nhất</a>
                </h1>
                <div class="row">
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12 category-two-item"> -->
                    <!-- <div class="main-slideshow"> -->
                    <div class="main-slideshow-content">
                        <div class="slideshow-wrapper">
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/1.jpg" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/2.png" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/3.jpg" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/4.jpg" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/5.png" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/6.png" />
                            </div>

                            <!-- /// -->

                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/1.jpg" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/2.png" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/3.jpg" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/4.jpg" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/5.png" />
                            </div>
                            <div class="slide">
                                <img id="slide-img" src="http://localhost/doan-mvc/user/assets/images/km/6.png" />
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>

                </div>
            </div>
        </div>

        <!-- Thương Hiệu -->
        <div class="news-wrap">
            <div class="news container">
                <h1 class="post-list-title">
                    <a href="" class="link-category-item">Thương Hiệu Nổi Bật</a>
                </h1>
                <div class="row">
                    <div class="main-ads-banner_1">
                        <img src="http://localhost/doan-mvc/user/assets/images/km/7.png" alt="" />
                    </div>
                    <div class="main-ads-banner_1">
                        <img src="http://localhost/doan-mvc/user/assets/images/km/8.png" alt="" />
                    </div>
                    <div class="main-ads-banner_1">
                        <img src="http://localhost/doan-mvc/user/assets/images/km/9.png" alt="" />
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>