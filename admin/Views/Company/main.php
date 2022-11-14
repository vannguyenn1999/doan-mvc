<div class="container">
    <div class="product">
     <h1>Danh Sách Hãng Điện Thoại </h1>

     <a href="<?php echo DIR_HTTP ?>/CompanyController/AddCompany" class="btn btn-success" id="a_func"><i class="fa-solid fa-circle-plus"></i> Thêm Hãng</a>
     <br>
     <br>
     <table class="table table-dark table-hover">
       <tr>
         <th>Tên Nhãn Hiệu</th>
         <th>Thông Tin</th>
         <th>Ngày Tạo</th>
         <th colspan="2">Action</th>
       </tr>
       <?php foreach ($data as $company) : ?>
         <tr>
           <td><?php echo $company['ten_nhan_hieu'] ?></td>
           <td><?php echo $company['thong_tin'] ?></td>
           <td><?php echo $company['create_at'] ?></td>
           <td><a href="<?php echo DIR_HTTP ?>/CompanyController/UpdateCompany?id=<?php echo $company['ten_nhan_hieu'] ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
           <td><a onclick="return confirm('bạn có muốn xoá hãng này không ??')" href="<?php echo DIR_HTTP ?>/CompanyController/DeleteCompany/<?php echo $company['ten_nhan_hieu'] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>

         </tr>
       <?php endforeach; ?>
     </table>
   </div>
   </div>