<?php
    $nim =  $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "dblatihan";

    $koneksi = new mysqli($server,$username,$password,$db);

    if($koneksi->connect_error)
    {
        die("Koneksi error: ".$koneksi->connect_error);
    }

    $sql = "INSERT INTO mahasiswas (nim,nama,kelas) VALUES ('".$nim."','".$nama."','".$kelas."')";

    if($koneksi->query($sql) === TRUE)
    {
        echo "Data berhasil disimpan.";
    } else {
        echo "Data gagal disimpan.";
        echo "<br>";
        echo "Error: ".$koneksi->error;
    }

    $koneksi->close();
    header("location:index.php");
?>
