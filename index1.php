<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets1/style1.css">
    <link rel="stylesheet" href="assets1/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
                <li><a href="index1.php?page_layout=quanlydocgia">
                    QUẢN LÝ ĐỘC GIẢ 
                </a>
            </li>
                <li><a href="index1.php?page_layout=quanlysach">
                    QUẢN LÝ SÁCH
                </a></li>
                <li><a href="index1.php?page_layout=timkiem">
                    TÌM KIẾM SÁCH
                </a></li>
                <li><a href="dangxuat.php">
                    ĐĂNG XUẤT
                </a></li>
            </ul>
    </div>
<?php
    if (isset($_GET['page_layout'])){
        switch ($_GET['page_layout']) {
            case 'quanlysach':
                require_once 'sach/quanlysach.php';
                break;
            case 'themsach':
                require_once 'sach/themsach.php';
                break;
            case 'xoasach':
                require_once 'sach/xoasach.php';
                break;    
            case 'suasach':
                require_once 'sach/suasach.php';
                break;
            case 'quanlydocgia':
                require_once 'docgia/quanlydocgia.php';
                break;
            case 'suadocgia':
                require_once 'docgia/suadocgia.php';
                break;
            case 'themdocgia':
                require_once 'docgia/themdocgia.php';
                break;
            case 'xoadocgia':
                require_once 'docgia/xoadocgia.php';
                break;
            case 'timkiem':
                require_once 'sach/timkiem.php';
                break;    
                
            default:
                require_once 'sach/quanlysach.php';
                break;
        }
    }   
?>

