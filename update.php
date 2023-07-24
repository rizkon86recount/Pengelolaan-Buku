<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel
$idbuku          = $_POST['idbuku'];
$judul_buku      = $_POST['judul_buku'];
$pengarang       = $_POST['pengarang'];
$tahun_terbit    = $_POST['tahun_terbit'];
$isbn            = $_POST['isbn'];
// query SQL untuk insert data
$query="UPDATE buku SET judul='$judul_buku',pengarang='$pengarang',tahun_terbit='$tahun_terbit',isbn='$isbn' where idbuku='$idbuku'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>