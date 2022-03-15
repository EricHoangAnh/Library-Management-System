<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<?php
  require_once 'database connecter/config.php';?>
 <?php 
  if(isset($_POST['sbm'])) {
    $id_muon = $_POST['id_muon'];
    $id_docgia = $_POST['id_docgia'];
    $ten_docgia = $_POST['ten_docgia'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $so_luong = $_POST['so_luong'];
    $ngay_muon = $_POST['ngay_muon'];
    $id_sach = $_POST['id_sach'];
    $han_tra = $_POST['han_tra'];
    // insert data
    $sql_docgia= "INSERT INTO doc_gia (id_docgia, ten_docgia, email, sdt) 
    VALUES ('$id_docgia', '$ten_docgia', '$email', '$sdt')";

    $sql_muontrasach= "INSERT INTO muontrasach (id_muon, id_docgia, id_sach, ngay_muon, han_tra) 
    VALUES ('$id_muon', '$id_docgia', '$id_sach', '$ngay_muon', '$han_tra')";
    // 
    $query_docgia= mysqli_query($connect, $sql_docgia);
    $query_muontrasach= mysqli_query($connect, $sql_muontrasach);
    header('location: index1.php?page_layout=quanlydocgia');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm độc giả mới</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">ID Mượn</label>
                    <input type="text" name="id_muon" class="form-control" required> 
                </div>
                <div class="form-group">
                    <label for="">ID Độc giả</label>
                    <input type="text" name="id_docgia" class="form-control" required> 
                </div>
                <div class="form-group">
                    <label for="">Tên độc giả</label>
                    <input type="text" name="ten_docgia" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sách mượn</label>
                    <input type="text" name="id_sach" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ngày mượn</label>
                    <input type="date" name="ngay_muon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Hạn trả</label>
                    <input type="date" name="han_tra" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>