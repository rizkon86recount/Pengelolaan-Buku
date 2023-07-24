<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gorengan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4 font-weight-bold">DAFTAR BUKU</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>JUDUL BUKU</th>
                    <th>PENGARANG</th>
                    <th>TAHUN TERBIT</th>
                    <th>ISBN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $buku = mysqli_query($koneksi, "SELECT * from buku");
                $no = 1;
                foreach ($buku as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['judul'] . "</td>
                    <td>" . $row['pengarang'] . "</td>
                    <td>" . $row['tahun_terbit'] . "</td>
                    <td>" . $row['isbn'] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='form-edit.php?idbuku=$row[idbuku]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?idbuku=$row[idbuku]'>Delete</a>
                    </td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="form-input.php" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Tambah Data</a>
    </div>
</body>
</html>
