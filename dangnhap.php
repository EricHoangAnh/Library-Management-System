<?php 
     require_once '<database connecter/config.php';
     $sql="SELECT ten_dangnhap, matkhau FROM login ";
     $query=mysqli_query($connect, $sql);
     session_start();
     if ( isset($_POST ['dangnhap']) ){
        $ten_dangnhap=$_POST['email'];
        $matkhau=$_POST['password'];
        $mssv=$_POST['mssv'];
        if ($ten_dangnhap=='admin' && $matkhau=='123456'){
            header('location:index1.php?page_layout=quanlysach');
     }  if($mssv!=''){
            header('location:index2.php?page_layout=danhmuc');
     }
        else{
        echo  "<script> alert('Sai tên đăng nhập hoặc mật khẩu')</script>" ;
     }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets1/style1.css">
    <link rel="stylesheet" href="assets1/themify-icons-font/themify-icons/themify-icons.css">
    <title>Hệ thống quản lý thư viện ABooK</title>
</head>
<body>
    <div id="header">
        <img src="assets1/image/book.jpg" alt="">
        <div class="web-title">
            <a href="">Hệ thống quản lý thư viện ABooK</a>
            <p href="">Kho tàng tri thức của bạn</p>
        </div>
    </div>
  <form action="dangnhap.php" method="post">
    <div id="content">
       <div id="login-form">
           <h2>ĐĂNG NHẬP</h2>
           <div class="login-space">
               <h4>Dành cho thủ thư</h4>
               <br>
               <input type="text" name="email" placeholder="Tên đăng nhập">
               <br>
               <input type="password" name="password" placeholder="Mật khẩu">
               <br>
               <button type="submit" name="dangnhap">Login</button>
               <br>
               <h4>Dành cho độc giả</h4>
                   <input type="text" name="mssv" placeholder="Mã độc giả">
                   <br>
                       <button type="submit" name="dangnhap">Login</button>
           </div>
       </div>
</div>
</form>  
<div id="footer">
</div>
</div>
</body>
</html>