<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $tempat_lahir = $_POST['tempat_lahir'];
    // buat query update
    $sql = "UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama_lengkap', 
alamat='$alamat', jurusan='$jurusan', email='$email', tempat_lahir='$tempat_lahir', alamat='$alamat', WHERE nim=$nim";
    $query = mysqli_query($koneksi, $sql);
    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}