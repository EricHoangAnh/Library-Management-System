<?php
require_once 'database connecter/config.php';

 if (isset($_GET['id_muon']) && isset($_GET['id_docgia'])) {
  $id_muon = $_GET['id_muon'];
  $id_docgia=$_GET['id_docgia'];
  
  // $sql_truycap="SELECT id_docgia FROM muontrasach WHERE id_muon = '$id'"

$sql_docgia= "DELETE FROM doc_gia WHERE id_docgia = '$id_docgia'";
$sql_muontrasach= "DELETE FROM muontrasach WHERE id_muon = '$id_muon'";
$query_docgia= mysqli_query($connect, $sql_docgia);
$query_muontrasach= mysqli_query($connect, $sql_muontrasach);
header('location: index1.php?page_layout=quanlydocgia');}
?>