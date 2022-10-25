<div class="container">
    <div class="product">
        <h1>Sửa Hãng Điện Thoại</h1>
        <table class="table table-dark table-hover">
            <form action="" method="POST" id="add" >
                <div class="form-group">
                    <label for="masp">Tên Hãng Sản Phẩm</label>
                    <h2><?php echo $data['ten_nhan_hieu'] ?></h2>
                </div>
                
                <div class="form-group">
                    <label for="masp">Thông Hãng Tin Sản Phẩm</label>
                    <textarea name="thongtin" id="add" rows="5" cols="40" class="form-control"><?php echo isset($_POST['thongtin']) ? $_POST['thongtin'] : $data['thong_tin']  ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Thêm Hâng Sản Phẩm</button>
                    <button type="reset" class="btn btn-primary">Làm Mới</button>
                    <a class="btn btn-primary" href="http://localhost/doan-mvc/CompanyController/Index" role="button">Trở Lại</a>

                </div>
            </form>
        </table>
    </div>
</div>