<?php
include("koneksi.php");
$matkul = $_GET['matkul'];
$cekmatkul = mysqli_query($conn,"SELECT * FROM soal WHERE kategori = '$matkul'");
if($cekmatkul)
{
	header("location:choose.php?matkul=$matkul");
}
?>