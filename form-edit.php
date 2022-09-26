<?php
include("config.php");
// kalau tidak ada id di query string
if (!isset($_GET['nim'])) {
    header('Location: index.php');
}
//ambil id dari query string
$id = $_GET['nim'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="nim" value="<?php echo $siswa['nim'] ?>" />
            <p>
                <label for="nama">Nama: </label>
                <input type="number" name="nim" placeholder="nim" value="<?php echo $siswa['nim'] ?>" />
            </p>
            <p>
                <label for="nama_lengkap">nama_lengkap: </label>
                <textarea name="nama_lengkap"><?php echo $siswa['nama_lengkap'] ?></textarea>
            </p>
            <p>
                <label for="alamat">alamat: </label>
                <input type="text" name="alamat" placeholder="alamat" value="<?php echo $siswa['alamat'] ?>" />
            </p>
            <p>
                <label for="email">email: </label>
                <input type="text" name="email" placeholder="email" value="<?php echo $siswa['email'] ?>" />
            </p>
            <p>
                <label for="tempat_lahir">tempat_lahir: </label>
                <input type="text" name="tempat_lahir" placeholder="tempat_lahir"
                    value="<?php echo $siswa['tempat_lahir'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>

</html>