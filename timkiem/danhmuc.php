<?php
require_once 'database connecter/config.php';
$sql_giaotrinh="SELECT * FROM sach WHERE the_loai='Giáo trình'";
$sql_coso="SELECT * FROM sach WHERE the_loai='Cơ sở ngành'";
$sql_ngoaingu="SELECT * FROM sach WHERE the_loai='Sách ngoại ngữ'";
$sql_thamkhao="SELECT * FROM sach WHERE the_loai='Sách tham khảo'";
$sql_kynang="SELECT * FROM sach WHERE the_loai='Sách kỹ năng'";
$sql_tailieu="SELECT * FROM sach WHERE the_loai='Tài liệu khác'";
$query_giaotrinh= mysqli_query($connect, $sql_giaotrinh);
$query_coso= mysqli_query($connect, $sql_coso);
$query_ngoaingu= mysqli_query($connect, $sql_ngoaingu);
$query_thamkhao= mysqli_query($connect, $sql_thamkhao);
$query_kynang= mysqli_query($connect, $sql_kynang);
$query_tailieu= mysqli_query($connect, $sql_tailieu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets1/style1.css">
    <link rel="stylesheet" href="assets1/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="card-header">
    <!-- Giáo trình -->
    <h2>Giáo trình đại cương</h2>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID sách</th>
                 <th>Tên sách</th>
                 <th>Ảnh bìa sách</th>
                 <th>Thể loại</th>
                 <th>Mô tả ngắn</th>
                 <th>Số lượng</th>
                 <th>Vị trí</th>
                 <th>Mượn</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row_giaotrinh=mysqli_fetch_assoc($query_giaotrinh)){?>
         <tr>
                 <td><?php echo $row_giaotrinh['id_sach'] ?></td>
                 <td><?php echo $row_giaotrinh['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row_giaotrinh['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row_giaotrinh['the_loai'] ?></td>
                 <td><?php echo $row_giaotrinh['mo_ta_ngan'] ?></td>
                 <td><?php echo $row_giaotrinh['so_luong'] ?></td>
                 <td><?php echo $row_giaotrinh['vi_tri'] ?></td>
                 <td><a onclick="return del('<?php echo $row_giaotrinh['id_sach']?>')" href="index2.php?page_layout=giomuon&id=<?php echo $row_giaotrinh['id_sach']; ?>">Thêm vào giỏ</a></td>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
<!--  -->
<!-- Cơ sở ngành -->
<div class="card-header">
    <h2>Cơ sở ngành</h2>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID sách</th>
                 <th>Tên sách</th>
                 <th>Ảnh bìa sách</th>
                 <th>Thể loại</th>
                 <th>Mô tả ngắn</th>
                 <th>Số lượng</th>
                 <th>Vị trí</th>
                 <th>Mượn</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row_coso=mysqli_fetch_assoc($query_coso)){?>
         <tr>
                 <td><?php echo $row_coso['id_sach'] ?></td>
                 <td><?php echo $row_coso['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row_coso['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row_coso['the_loai'] ?></td>
                 <td><?php echo $row_coso['mo_ta_ngan'] ?></td>
                 <td><?php echo $row_coso['so_luong'] ?></td>
                 <td><?php echo $row_coso['vi_tri'] ?></td>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
    <!--  -->
    <!-- Ngoại ngữ -->
<div class="card-header">
    <h2>Sách ngoại ngữ</h2>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID sách</th>
                 <th>Tên sách</th>
                 <th>Ảnh bìa sách</th>
                 <th>Thể loại</th>
                 <th>Mô tả ngắn</th>
                 <th>Số lượng</th>
                 <th>Vị trí</th> 
                 <th>Mượn</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row_ngoaingu=mysqli_fetch_assoc($query_ngoaingu)){?>
         <tr>
                 <td><?php echo $row_ngoaingu['id_sach'] ?></td>
                 <td><?php echo $row_ngoaingu['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row_ngoaingu['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row_ngoaingu['the_loai'] ?></td>
                 <td><?php echo $row_ngoaingu['mo_ta_ngan'] ?></td>
                 <td><?php echo $row_ngoaingu['so_luong'] ?></td>
                 <td><?php echo $row_ngoaingu['vi_tri'] ?></td>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
    <!--  -->
       <!-- Sách tham khảo -->
<div class="card-header">
    <h2>Sách tham khảo</h2>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID sách</th>
                 <th>Tên sách</th>
                 <th>Ảnh bìa sách</th>
                 <th>Thể loại</th>
                 <th>Mô tả ngắn</th>
                 <th>Số lượng</th>
                 <th>Vị trí</th>
                 <th>Mượn</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row_thamkhao=mysqli_fetch_assoc($query_thamkhao)){?>
         <tr>
                 <td><?php echo $row_thamkhao['id_sach'] ?></td>
                 <td><?php echo $row_thamkhao['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row_thamkhao['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row_thamkhao['the_loai'] ?></td>
                 <td><?php echo $row_thamkhao['mo_ta_ngan'] ?></td>
                 <td><?php echo $row_thamkhao['so_luong'] ?></td>
                 <td><?php echo $row_thamkhao['vi_tri'] ?></td>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
    <!--  -->
       <!-- Sách kỹ năng -->
<div class="card-header">
    <h2>Sách kỹ năng</h2>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID sách</th>
                 <th>Tên sách</th>
                 <th>Ảnh bìa sách</th>
                 <th>Thể loại</th>
                 <th>Mô tả ngắn</th>
                 <th>Số lượng</th>
                 <th>Vị trí</th>
                 <th>Mượn</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row_kynang=mysqli_fetch_assoc($query_kynang)){?>
         <tr>
                 <td><?php echo $row_kynang['id_sach'] ?></td>
                 <td><?php echo $row_kynang['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row_kynang['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row_kynang['the_loai'] ?></td>
                 <td><?php echo $row_kynang['mo_ta_ngan'] ?></td>
                 <td><?php echo $row_kynang['so_luong'] ?></td>
                 <td><?php echo $row_kynang['vi_tri'] ?></td>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
    <!--  -->
       <!-- Tài liệu khác -->
<div class="card-header">
    <h2>Tài liệu khác</h2>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID sách</th>
                 <th>Tên sách</th>
                 <th>Ảnh bìa sách</th>
                 <th>Thể loại</th>
                 <th>Mô tả ngắn</th>
                 <th>Số lượng</th>
                 <th>Vị trí</th>
                 <th>Mượn</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row_tailieu=mysqli_fetch_assoc($query_tailieu)){?>
         <tr>
                 <td><?php echo $row_tailieu['id_sach'] ?></td>
                 <td><?php echo $row_tailieu['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row_tailieu['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row_tailieu['the_loai'] ?></td>
                 <td><?php echo $row_tailieu['mo_ta_ngan'] ?></td>
                 <td><?php echo $row_tailieu['so_luong'] ?></td>
                 <td><?php echo $row_tailieu['vi_tri'] ?></td>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
    <!--  -->