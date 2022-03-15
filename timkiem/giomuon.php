
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
    <!-- Giỏ mượn -->
    <h2>Giỏ mượn của bạn</h2>
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
                 <th>Xóa</th>
                 <th></th>
             </tr>
         </thead>
         <tbody>
             <?php
               require_once 'database connecter/config.php';
               if(isset($_POST['id']) ){
                  $id_sach=$_POST['id'];
                //   $sql= "SELECT * FROM sach WHERE id_sach='$id_sach'";
                $sql= "INSERT INTO giomuon (id_sach, ten_sach, anhbia, the_loai, mo_ta_ngan, so_luong, vi_tri)
                       VALUES ('$id_sach', '$ten_sach', '$anhbia', '$the_loai', '$mo_ta_ngan', '$so_luong', '$vi_tri')";
                  $query= mysqli_query($connect, $sql);
                  while ($row=mysqli_fetch_assoc($query)){?>
         <tr>
                 <td><?php echo $row['id_sach'] ?></td>
                 <td><?php echo $row['ten_sach'] ?></td>
                 <td>
                    <img style="width: 100px;" src="assets1/image/<?php echo $row['anhbia'] ?> " alt=""> </td>
                 <td><?php echo $row['the_loai'] ?></td>
                 <td><?php echo $row['mo_ta_ngan'] ?></td>
                 <td><?php echo $row['so_luong'] ?></td>
                 <td><a onclick="return del('<?php echo $row['ten_sach']?>')" href="index2.php?page_layout=xoasachmuon&id=<?php echo $row['id_sach']; ?>">Xóa</a></td>
    <?php } }?>
    
         </tbody>
     </table>
    </div>
    <script>
    function del(name){
        return confirm("Bạn muốn xóa "+ name +"?");
    }
</script>