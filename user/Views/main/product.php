
<div class="main-content">
    <div class="container">
        <h1 class="post-list-title">
            Sản Phẩm
        </h1>
        <div class="link-secondary-wrap row">
            <?php foreach ($data as $product) : ?>
                <div class="service-link col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Detail?id=<?php echo $product['ma_san_pham'] ?>">
                        <img class="secondary-img img-responsive" title=" <?php echo $product['ten_san_pham'] ?>" src="<?php echo DIR_HTTP ?>/admin/assets/image/uploads/<?php echo $product['anh'] ?>" alt=" <?php echo $product['ten_san_pham'] ?>" />
                        <span class="shop-title">
                            <?php echo $product['ten_san_pham'] ?>
                        </span>
                    </a>
                    <span class="shop-price">
                        <?php echo number_format($product['gia']) ?> đ
                    </span>
                    <!--  class="add-to-cart -->
                    <a href="<?php echo DIR_HTTP ?>/UserHomeController/Cart?id=<?php echo $product['ma_san_pham'] ?>" class="">
                        <span data-id="92090" class="add-to-cart-now"  >Thêm vào giỏ</span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/UserHomeController/Product?trang=<?php echo ($trang - 1) ?>">Sau</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/UserHomeController/Product?trang=1">1</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/UserHomeController/Product?trang=2">2</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/UserHomeController/Product?trang=3">3</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo DIR_HTTP ?>/UserHomeController/Product?trang=<?php echo ($trang +1 ) ?>">Tiếp</a></li>
            </ul>
        </nav>
    </div>
</div>