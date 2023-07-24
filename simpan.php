<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$judul_buku             = $_POST['judul_buku'];
$pengarang              = $_POST['pengarang'];
$tahun_terbit           = $_POST['tahun_terbit'];
$isbn                   = $_POST['isbn'];
//query SQL untuk insert data
$query = "INSERT INTO buku (judul, pengarang, tahun_terbit, isbn) 
          VALUES ('$judul_buku', '$pengarang', '$tahun_terbit', '$isbn')";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("Location: index.php");
?>