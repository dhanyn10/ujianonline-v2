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
        //no 9
        //benar a
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
                foreach($_POST as $pkey => $pvalue) //9 a
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
    $jawaban    = $conn->query("SELECT * from soal where kategori='$matkul'");
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