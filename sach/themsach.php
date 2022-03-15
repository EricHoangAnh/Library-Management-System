<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<?php
  require_once 'database connecter/config.php';?>
 <?php 
  if(isset($_POST['sbm'])) {
    $id_sach = $_POST['id_sach'];
    $ten_sach = $_POST['ten_sach'];

    $anhbia = $_FILES['anhbia']['name'];
    $anhbia_tmp = $_FILES['anhbia']['tmp_name'];

    $the_loai = $_POST['the_loai'];
    $mo_ta_ngan = $_POST['mo_ta_ngan'];
    $so_luong = $_POST['so_luong'];
    $vi_tri = $_POST['vi_tri'];
    // insert data
    $sql= "INSERT INTO sach (id_sach, ten_sach, anhbia, the_loai, mo_ta_ngan, so_luong, vi_tri) 
    VALUES ('$id_sach', '$ten_sach', '$anhbia', '$the_loai', '$mo_ta_ngan', '$so_luong', '$vi_tri')";
    $query= mysqli_query($connect, $sql);
    move_uploaded_file($anhbia_tmp, 'assets1/image/'.$anhbia);
    header('location: index1.php?page_layout=quanlysach');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sách mới</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">ID sách</label>
                    <input type="text" name="id_sach" class="form-control" required> 
                </div>
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input type="text" name="ten_sach" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh bìa sách</label>
                    <input type="file" name="anhbia">
                </div>
                <div class="form-group">
                    <label for="">Thể loại</label>
                    <input type="text" name="the_loai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <input type="text" name="mo_ta_ngan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="so_luong" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Vị trí</label>
                    <input type="text" name="vi_tri" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>