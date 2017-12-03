<?php
include 'koneksi.php';
$kategori		= $_POST['kategori'];
$soal			= $_POST['soal'];
$jawabA			= $_POST['jawaban_a'];
$jawabB			= $_POST['jawaban_b'];
$jawabC			= $_POST['jawaban_c'];
$jawabD			= $_POST['jawaban_d'];
$jawab_benar	= $_POST['jawaban_correct'];
$query 			= $conn->query("INSERT INTO soal (kategori, soal, a, b, c, d, benar) values('$kategori','$soal','$jawabA','$jawabB','$jawabC','$jawabD','$jawab_benar')");
if($query)
{
	header("location:choose.php");
}
?>