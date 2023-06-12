<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){ //jika button daftar di klik

    // ambil data dari formulir
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $noisbn = $_POST['noisbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahunterbit = $_POST['tahunterbit'];
    $penerbit = $_POST['penerbit'];

    // buat query
    $sql = "INSERT INTO peminjam ( kategori, noisbn, judul, pengarang, tahunterbit, penerbit) VALUE ( '$kategori', '$noisbn', '$judul', '$pengarang', '$tahunterbit', '$penerbit')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: berhasil_login.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: berhasil_login.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>