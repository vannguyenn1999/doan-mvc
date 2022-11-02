<div class="main-content">
    <div class="container">
        <h1 class="post-list-title">
            Sản Phẩm
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
                            <?php echo $product['gia'] ?> đ
                        </span>
                        <span data-id="92090" class="add-to-cart">Thêm vào giỏ</span>
                    </div>
                <?php endforeach; ?>
            </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>