<?php
 require_once 'database connecter/config.php';
 if(isset($_GET['id'])){
     $id = $_GET['id'];
 }
 $sql = "SELECT * FROM sach WHERE id_sach='$id'";
 $query = mysqli_query($connect, $sql);
 $row= mysqli_fetch_assoc($query);
?>
<?php
if(isset($_POST['sua'])) {
    $id_sach = $_POST['id_sach'];
    $ten_sach = $_POST['ten_sach'];

    $anhbia = $_FILES['anhbia']['name'];
    $anhbia_tmp = $_FILES['anhbia']['tmp_name'];

    $the_loai = $_POST['the_loai'];
    $mo_ta_ngan = $_POST['mo_ta_ngan'];
    $so_luong = $_POST['so_luong'];
    $vi_tri = $_POST['vi_tri'];
    // fix data
    $sql= "UPDATE sach 
    SET id_sach='$id_sach', ten_sach='$ten_sach', anhbia='$anhbia', the_loai='$the_loai', mo_ta_ngan='$mo_ta_ngan', so_luong='$so_luong', vi_tri='$vi_tri' 
    WHERE id_sach ='$id'";
    $query= mysqli_query($connect, $sql);
    move_uploaded_file($anhbia_tmp, 'assets1/image/'.$anhbia);
    header('location: index1.php?page_layout=quanlysach');}
?>
<form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">ID sách</label>
                    <input type="text" name="id_sach" class="form-control" value="<?php echo $row['id_sach']?>" required> 
                </div>
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input type="text" name="ten_sach" class="form-control" value="<?php echo $row['ten_sach']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh bìa sách</label>
                    <input type="file" name="anhbia" value="<?php echo $row['anhbia']?>" >
                </div>
                <div class="form-group">
                    <label for="">Thể loại</label>
                    <input type="text" name="the_loai" class="form-control" value="<?php echo $row['the_loai']?>"  required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <input type="text" name="mo_ta_ngan" class="form-control" value="<?php echo $row['mo_ta_ngan']?>" >
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="so_luong" class="form-control" value="<?php echo $row['so_luong']?>" >
                </div>
                <div class="form-group">
                    <label for="">Vị trí</label>
                    <input type="text" name="vi_tri" class="form-control" value="<?php echo $row['vi_tri']?>" >
                </div>
                <button name="sua" class="btn btn-success" type="submit">Lưu</button>
            </form>