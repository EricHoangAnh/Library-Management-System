<?php
 require_once 'database connecter/config.php';
 if(isset($_GET['id'])){
     $id = $_GET['id'];
 }
 $sql_docgia = "SELECT * FROM doc_gia WHERE id_docgia='$id'";
 $sql_muontrasach= "SELECT * FROM muontrasach WHERE id_docgia='$id'";
 $query_docgia = mysqli_query($connect, $sql_docgia);
 $query_muontrasach = mysqli_query($connect, $sql_muontrasach);
 $row_docgia= mysqli_fetch_assoc($query_docgia);
 $row_muontrasach= mysqli_fetch_assoc($query_muontrasach);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<?php
  require_once 'database connecter/config.php';?>
 <?php 
  if(isset($_POST['sua'])) {
    $id_muon = $_POST['id_muon'];
    $id_docgia = $_POST['id_docgia'];
    $ten_docgia = $_POST['ten_docgia'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $so_luong = $_POST['so_luong'];
    $ngay_muon = $_POST['ngay_muon'];
    $id_sach = $_POST['id_sach'];
    $han_tra = $_POST['han_tra'];
    // fix data
    $sql_docgia= "UPDATE doc_gia 
    SET id_docgia='$id_docgia', ten_docgia='$ten_docgia', email='$email', sdt='$sdt' 
    WHERE id_docgia ='$id'";

    $sql_muontrasach= "UPDATE muontrasach
    SET id_muon='$id_muon', id_docgia='$id_docgia', id_sach='$id_sach', ngay_muon='$ngay_muon', han_tra='$han_tra' 
    WHERE id_docgia ='$id'";
    
    $query_docgia= mysqli_query($connect, $sql_docgia);
    $query_muontrasach= mysqli_query($connect, $sql_muontrasach);
    header('location: index1.php?page_layout=quanlydocgia');
}
?>
<form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">ID Mượn</label>
                    <input type="text" name="id_muon" class="form-control" value="<?php echo $row_muontrasach['id_muon']?>" required> 
                </div>
                <div class="form-group">
                    <label for="">ID Độc giả</label>
                    <input type="text" name="id_docgia" class="form-control" value="<?php echo $row_docgia['id_docgia']?>" required> 
                </div>
                <div class="form-group">
                    <label for="">Tên độc giả</label>
                    <input type="text" name="ten_docgia" class="form-control" value="<?php echo $row_docgia['ten_docgia']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row_docgia['email']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" value="<?php echo $row_docgia['sdt']?>" >
                </div>
                <div class="form-group">
                    <label for="">Sách mượn</label>
                    <input type="text" name="id_sach" class="form-control"  value="<?php echo $row_muontrasach['id_sach']?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày mượn</label>
                    <input type="date" name="ngay_muon" class="form-control"  value="<?php echo $row_muontrasach['ngay_muon']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Hạn trả</label>
                    <input type="date" name="han_tra" class="form-control"  value="<?php echo $row_muontrasach['han_tra']?>" required>
                </div>
                <button name="sua" class="btn btn-success" type="submit">Lưu</button>
</form>