<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pengelolaan Buku</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h2 class="mb-4">Form Pengelolaan Buku</h2>
    <form method="post" action="simpan.php" name="bukuForm" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="judul">Judul Buku:</label>
        <input type="text" class="form-control" name="judul_buku" placeholder="Masukkan judul buku">
      </div>
      <div class="form-group">
        <label for="pengarang">Pengarang:</label>
        <input type="text" class="form-control" name="pengarang" placeholder="Masukkan nama pengarang">
      </div>
      <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" class="form-control" name="tahun_terbit" placeholder="Tahun terbit buku">
      </div>
      <div class="form-group">
        <label for="isbn">ISBN:</label>
        <input type="text" class="form-control" name="isbn" placeholder="Nomor ISBN buku">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Link to Bootstrap JS and jQuery (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/script.js" ></script>
</body>
</html>