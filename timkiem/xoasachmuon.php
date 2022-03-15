<?php
require_once 'database connecter/config.php';

 if (isset($_GET['id'])){
  $id = $_GET['id'];
}
$sql= "DELETE FROM sach WHERE id_sach = '$id'";
$query= mysqli_query($connect, $sql);
header('location: index2.php?page_layout=giomuon');
?>