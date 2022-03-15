<?php
 require_once 'database connecter/config.php';
 $sql= "SELECT * FROM doc_gia inner join muontrasach on doc_gia.id_docgia=muontrasach.id_docgia ORDER BY id_muon";
 $query=mysqli_query($connect, $sql);
?>
<div class="card-header">
    <h2>Dữ liệu độc giả</h2>
    <a class="btn btn-primary" href="index1.php?page_layout=themdocgia">Thêm độc giả mới</a>
    </div>
    <div class="card-body">
     <table class="table" style="width: 100%;">
         <thead class="thead-dark"> 
             <tr>
                 <th>ID Mượn</th>
                 <th>ID Độc giả</th>
                 <th>Tên độc giả</th>
                 <th>Email</th>
                 <th>Số điện thoại</th>
                 <th>Sách mượn</th>
                 <th>Ngày mượn</th>
                 <th>Hạn Trả</th>
                 <th>Sửa</th>
                 <th>Xóa</th>
             </tr>
         </thead>
        <tbody>
        <?php
               while ($row=mysqli_fetch_assoc($query)){?>
         <tr>     
                 <td><?php echo $row['id_muon'] ?></td>
                 <td><?php echo $row['id_docgia'] ?></td>
                 <td><?php echo $row['ten_docgia'] ?></td>
                 <td><?php echo $row['email'] ?> </td>
                 <td><?php echo $row['sdt'] ?></td>
                 <td><?php echo $row['id_sach'] ?></td>
                 <td><?php echo $row['ngay_muon'] ?></td>
                 <td><?php echo $row['han_tra'] ?></td>
                 <td><a href="index1.php?page_layout=suadocgia&id=<?php echo $row['id_docgia']; ?>">Sửa</a></td>
                 <td><a onclick="return del('<?php echo $row['ten_docgia']?>')" href="index1.php?page_layout=xoadocgia&id_muon=<?php echo $row['id_muon']; ?>&id_docgia=<?php echo $row['id_docgia']; ?>">Xóa</a></td>
                 
        </tr>
    <?php } ?>
        </tbody>
</table>
<script>
    function del(name){
        return confirm("Bạn muốn xóa độc giả "+ name +"?");
    }
</script>