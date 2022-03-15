<?php
 session_start();
 if(isset($_SESSION['email'])){
     unset($_SESSION['email']);
 }
 if(isset($_SESSION['mssv'])){
    unset($_SESSION['mssv']);
}
 
 header('location: dangnhap.php')
?>