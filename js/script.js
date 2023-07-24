function validateForm() {
  var judul = document.forms["bukuForm"]["judul_buku"].value;
  var pengarang = document.forms["bukuForm"]["pengarang"].value;
  var tahunTerbit = document.forms["bukuForm"]["tahun_terbit"].value;
  var isbn = document.forms["bukuForm"]["isbn"].value;

  if (judul == "") {
    alert("Judul buku harus diisi");
    return false;
  }

  if (pengarang == "") {
    alert("Nama pengarang harus diisi");
    return false;
  }

  if (tahunTerbit == "") {
    alert("Tahun terbit harus diisi");
    return false;
  }

  if (isbn == "") {
    alert("Nomor ISBN harus diisi");
    return false;
  }
}
