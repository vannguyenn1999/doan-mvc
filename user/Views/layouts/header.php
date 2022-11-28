<a href="#" class="scrollup"></a>
<div class="header-top nopc">
    <div class="container">
        <div class="row">
            <div class=" col-md-4 col-sm-4 col-xs-12">
                <a class="info-contact" href="tel:0528448515">
                    <i class="fas fa-phone-alt"></i> 0528448515
                </a>
                <a class="info-contact" href="mailto:mid0203@gmail.com">
                    <i class="far fa-envelope"></i> miss0203@gmail.com
                </a>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <ul class="header-navigation" data-show-menu-on-mobile="">
                    <li>
                        <a href="<?php echo DIR_HTTP ?>/UserHomeController/Contact" class="material-button submenu-toggle">Liên hệ</a>
                    </li>
                    <li>
                        <a href="#" class="link-icon-laguage material-button submenu-toggle">
                            <img src="<?php echo DIR_HTTP ?>/user/assets/images/icon-flag-vn.png" class="icon-language">
                        </a>
                        <a href="#" class="link-icon-laguage material-button submenu-toggle">
                            <img src="<?php echo DIR_HTTP ?>/user/assets/images/icon-flag-en.png" class="icon-language">
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo DIR_HTTP ?>/UserHomeController/Cart" class="cart-link">
                            <i class="fa fa-cart-plus"></i>
                            <span class="cart-amount">
                                <?php if (isset($_SESSION['cart'])) {
                                    echo count($_SESSION['cart']);
                                } else {
                                    echo '0';
                                } ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<span class="ajax-message"></span>
<!-- header start -->
<header class="header">

    <div class="header-wrapper container">
        <!--sidebar menu toggler start -->
        <div class="toggle-sidebar material-button">
            <i class="material-icons">&#xE5D2;</i>
        </div>
        <!--sidebar menu toggler end -->

        <!--logo start -->
        <div class="logo-box">
            <h1>
                <a href="" class="logo"></a>
            </h1>
        </div>
        <!--logo end -->

        <div class="header-menu">

            <!-- header left menu start -->
            <ul class="header-navigation" data-show-menu-on-mobile>
                <li>
                    <a href="<?php echo DIR_HTTP ?>" class="home-link material-button submenu-toggle">
                        <img src="<?php echo DIR_HTTP ?>/user/assets/images/logo.webp" alt="" height="50px" width="50px" /></a>
                    </a>
                </li>
                <li>
                    <a href="<?php echo DIR_HTTP ?>" class="material-button submenu-toggle">Trang chủ</a>
                </li>

                <li>
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Product" class="material-button submenu-toggle">Sản phẩm</a>
                </li>
                <li>
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Cart" class="material-button submenu-toggle">Giỏ hàng</a>
                </li>
                <li>
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Service" class="material-button submenu-toggle">Dịch Vụ</a>
                </li>
                <li>
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Quality" class="material-button submenu-toggle">Chất Lượng</a>
                </li>
                <li>
                    <form action="" method="get" style="display: flex;">
                        <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." class="form-control"/>
                        <!--
                        Khi phương thức của form là GET, bắt buộc phải thêm 2 input ẩn với type=hidden,
                         để giữ lại giá trị của 2 tham số controller và action sau khi submit form,
                         theo như cách sau:
                         -->
                        <input type="hidden" name="controller" value="Product" />
                        <input type="hidden" name="action" value="search" />
                        <button type="button" name="submit" class="btn btn-success"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </li>

            </ul>
            <!-- header left menu end -->
        </div>
        <div class="header-right with-seperator">
            <!-- header right menu start -->
            <ul class="header-navigation">
                <li>
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Cart" class="">
                        <i class="fa fa-cart-plus"></i>
                        <span class="cart-amount-mobile">
                            <?php if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo '0';
                            } ?>
                        </span>

                    </a>
                </li>
            </ul>
            <!-- header right menu end -->

        </div>
    </div>
</header>
<!-- header end -->

<!-- Left sidebar menu start -->
<div class="sidebar">
    <div class="sidebar-wrapper">

        <!-- side menu logo start -->
        <div class="sidebar-logo">
            <a href="#"></a>
            <div class="sidebar-toggle-button">
                <i class="material-icons">&#xE317;</i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- mobile menu start -->
        <div id="mobileMenu">
            <div class="sidebar-seperate"></div>
        </div>
        <!-- mobile menu end -->

        <!-- sidebar menu start -->
        <ul class="sidebar-menu">
            <li>
                <a href="<?php echo DIR_HTTP ?>" class="material-button submenu-toggle">Trang chủ</a>
            </li>
            <li>
                <a href="<?php echo DIR_HTTP ?>/UserHomeController/Product" class="material-button submenu-toggle">Sản phẩm</a>
            </li>
            <li>
                <a href="<?php echo DIR_HTTP ?>/UserHomeController/Cart" class="material-button submenu-toggle">Giỏ Hàng</a>
            </li>
            <li>
                <a href="<?php echo DIR_HTTP ?>/UserHomeController/Service" class="material-button submenu-toggle">Dịch Vụ</a>
            </li>
            <li>
                <a href="<?php echo DIR_HTTP ?>/UserHomeController/Quality" class="material-button submenu-toggle">Chất Lượng</a>
            </li>

        </ul>
        <!-- sidebar menu end -->
        <div class="sidebar-seperate"></div>
        <!-- sidebar menu end -->
    </div>
</div>