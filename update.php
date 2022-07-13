<?php

include'koneksi.php';
// menyimpan data kedalam variabel

$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$kelas         = $_POST['kelas'];
$id = $_POST['id'];
// query SQL untuk insert data
$query="UPDATE mahasiswas SET nim='$nim',nama='$nama',kelas='$kelas' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman <index class="php"></index>
header("location:index.php");
?>
Footer
© 2022 GitHub, Inc.
