<?php
 require_once 'database connecter/config.php';
 $sql_menu="SELECT * FROM sach";
 $query_menu= mysqli_query($connect, $sql_menu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets1/style1.css">
    <link rel="stylesheet" href="assets1/themify-icons-font/themify-icons/themify-icons.css">
    <title>Trang chủ</title>
</head>
<body>
    <div id="header">
        <img src="assets1/image/book.jpg" alt="">
        <div class="web-title">
            <a href="">Hệ thống quản lý thư viện ABooK</a>
            <p href="">Kho tàng tri thức của bạn</p>
        </div>
    </div>
    <div id="nav-bar">
            <ul class="list">
                <li><a href="index2.php?page_layout=danhmuc">
                    DANH MỤC SÁCH 
                </a>
            </li>
                <li><a href="index2.php?page_layout=timkiemsach">
                    TÌM KIẾM SÁCH
                </a></li>
                <li><a href="index2.php?page_layout=giomuon">
                    GIỎ MƯỢN
                </a></li>
                <li><a href="dangnhap.php">
                    ĐĂNG XUẤT
                </a></li>
            </ul>
    </div>

<?php
    if (isset($_GET['page_layout'])){
        switch ($_GET['page_layout']) {
            case 'danhmuc':
                require_once 'timkiem/danhmuc.php';
                break;
            case 'giomuon':
                require_once 'timkiem/giomuon.php';
                break;
            case 'timkiemsach':
                require_once 'timkiem/timkiemsach.php';
                break;    
            case 'xoasachmuon':
                require_once 'timkiem/xoasachmuon.php';
                break;
                
            default:
                require_once 'timkiem/danhmuc.php';
                break;
        }
    }   
?>

</body>
</html>