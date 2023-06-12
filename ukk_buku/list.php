<?php 

    include("config.php"); 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Peminjaman Buku | Perpus Asik</title>
    </head>

    <body>
        <div class="container">
            <h3>Daftar yang sudah meminjam</h3>

            <div class="tambah">
                <a href="form-daftar.php">[+] Tambah Baru</a>
            </div>

            <br>
            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>No ISBN</th>
                            <th>Judul buku</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Penerbit</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM peminjam";
                        $query = mysqli_query($db, $sql);

                        while($ukk = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$ukk['id']."</td>";
                            echo "<td>".$ukk['kategori']."</td>";
                            echo "<td>".$ukk['noisbn']."</td>";
                            echo "<td>".$ukk['judul']."</td>";
                            echo "<td>".$ukk['pengarang']."</td>";
                            echo "<td>".$ukk['tahunterbit']."</td>";
                            echo "<td>".$ukk['penerbit']."</td>";

                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$ukk['id']."'>Edit</a> / ";
                            echo "<a href='hapus.php?id=".$ukk['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>

            <a href="berhasil_login.php">kembali</a>
        </div>
    </body>

    <style>
        body {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(rgba(194, 103, 103, 0.5), rgba(58, 32, 127, 0.5)), url(images/bg5.jpg);
            background-position: center;
            background-size: cover;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .container{
            width: 700px;
            min-height: 100px;
            background: #FFF;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
            position: relative;
            margin: 100px auto;
            text-align: center;
        }    
        a{
            text-decoration: none;
            color: #765bf0;
            font-size: 20px;
        }  
        h3{
            color: #000;
            font-family: 'poppin';
            font-weight: 400;
            font-size: 32px;
        }
        .tambah{
            top: -20px;
            position: relative;
        }
        table {
            position: relative;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</html>