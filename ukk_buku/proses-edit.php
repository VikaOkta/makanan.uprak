<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $noisbn = $_POST['noisbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahunterbit = $_POST['tahunterbit'];
    $penerbit = $_POST['penerbit'];

    // buat query update
    $sql = "UPDATE peminjam SET kategori='$kategori', noisbn='$noisbn', judul='$judul', pengarang='$pengarang', tahunterbit='$tahunterbit' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>