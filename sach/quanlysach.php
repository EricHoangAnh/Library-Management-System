<?php
 require_once 'database connecter/config.php';
 $sql="SELECT * FROM sach ";
 $query= mysqli_query($connect, $sql);
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
    <h2>Dữ liệu sách</h2>
    <a class="btn btn-primary" href="index1.php?page_layout=themsach">Thêm sách mới</a>
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
                 <th>Sửa</th>
                 <th>Xóa</th>
             </tr>
         </thead>
         <tbody>
             <?php
               while ($row=mysqli_fetch_assoc($query)){?>
         <tr>
                 <td><?php echo $row['id_sach'] ?></td>
                 <td><?php echo $row['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row['the_loai'] ?></td>
                 <td><?php echo $row['mo_ta_ngan'] ?></td>
                 <td><?php echo $row['so_luong'] ?></td>
                 <td><?php echo $row['vi_tri'] ?></td>
                 <td><a href="index1.php?page_layout=suasach&id=<?php echo $row['id_sach']; ?>">Sửa</a></td>
                 <td><a onclick="return del('<?php echo $row['ten_sach']?>')" href="index1.php?page_layout=xoasach&id=<?php echo $row['id_sach']; ?>">Xóa</a></td>
                 
        </tr>
    <?php } ?>
    
         </tbody>
     </table>
    </div>
<script>
    function del(name){
        return confirm("Bạn muốn xóa "+ name +"?");
    }
</script>