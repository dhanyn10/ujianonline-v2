<?php
include("koneksi.php");
session_start();
if(isset($_POST['matkul']))
{
    $matkul = $_POST['matkul'];
    $query  = $conn->query("SELECT * from soal where kategori='$matkul'");

    $skor   = 0;

    $nomor  = 0;
    $jawab  = '';
    while($row = mysqli_fetch_assoc($query))
    {
        $tambahskor = false;
        foreach($row as $key => $value)
        {
            if($key == 'benar')
            {
                $jawab = $value;
            }
            if($key == 'no')
            {
                $nomor = $value;
            }
            if($tambahskor == false)
            {   
                foreach($_POST as $pkey => $pvalue)
                {
                    if($nomor == $pkey && $jawab == $pvalue)
                    {
                        $tambahskor = true;
                    }
                }
            }
        }
        if($tambahskor == true)
        {
            $skor++;
        }
        $jawab = '';
    }
    $nama = $_SESSION['username'];
    $conn->query("INSERT INTO nilai(nama, kategori, nilai) VALUES('$nama','$matkul', $skor)");
    $skor = ($skor / $_POST['jumlahsoal']) * 100;

    $menit = 29-$_POST['menit'];
    $detik = 60-$_POST['detik'];
    $_SESSION['skor']   = $skor;
    $_SESSION['menit']  = $menit;
    $_SESSION['detik']  = $detik;
    $_SESSION['lokasi'] = 'hasil';
    header('location:choose.php');
}
?>