<?php
include 'koneksi.php';
$id = $_GET['idbuku'];
$buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$id'");
$row = mysqli_fetch_array($buku);

function active_radio_button($value, $input) {
    //apabila value dari radio sama dengan yang di input
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update</title>
</head>
<body>
    <div class="container mt-4">
        <form method="post" action="update.php" name="bukuForm" onsubmit="return validateForm()">
            <input type="hidden" value="<?= $row['idbuku']; ?>" name="idbuku">
            <div class="form-group row">
                <label for="judulBuku" class="col-sm-2 col-form-label">JUDUL BUKU</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $row['judul']; ?>" name="judul_buku" class="form-control" id="judulBuku">
                </div>
            </div>
            <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">PENGARANG</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $row['pengarang']; ?>" name="pengarang" class="form-control" id="pengarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="tahunTerbit" class="col-sm-2 col-form-label">TAHUN TERBIT</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $row['tahun_terbit']; ?>" name="tahun_terbit" class="form-control" id="tahunTerbit">
                </div>
            </div>
            <div class="form-group row">
                <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $row['isbn']; ?>" name="isbn" class="form-control" id="isbn">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" value="simpan" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    <!-- Load Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js" ></script>
</body>
</html>
