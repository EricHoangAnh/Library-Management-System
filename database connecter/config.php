<?php
  $connect = mysqli_connect ('localhost', 'root','', 'quanlythuvien');
  if($connect){
    mysqli_query($connect, "SET NAME 'UTF8'");
  }
  else{
    echo "kết nối thất bại";
  }
?>