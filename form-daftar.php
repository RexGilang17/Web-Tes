<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    $cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'")
        or die(mysqli_error($koneksi));
    if (mysqli_num_rows($cek) == 0) {
        $sql = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama_lengkap, jurusan, email, tempat_lahir, alamat) 
        VALUES ('$nim', '$nama_lengkap', '$jurusan', '$email', '$tempat_lahir', '$alamat')") or
            die(mysqli_error($koneksi));
        if ($sql) {
            echo '<script> alert("Berhasilkan Menambahkan Data.");
        document.location="proses_pendaftaran.php";</script>';
        } else {
            echo '<div class= "alert alert-warning">Gagal Melakukan Proses Tambah Data.</div>';
        }
    } else {
        echo '<div class= "alert alert-warning">Gagal, NIM Sudah Terdaftar.</div>';
    }
}