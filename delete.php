<?php
include 'koneksi.php';
$idbuku = $_GET['idbuku'];

$query = "DELETE from buku WHERE idbuku =$idbuku";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("Location: index.php");
?>