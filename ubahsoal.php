<?php
include('koneksi.php');
if(isset($_POST['ubahsoal']))
{
    $id         = $_POST['id'];
    $kategori   = $_POST['kategori'];
    $soal       = $_POST['soal'];
    $ja         = $_POST['a'];
    $jb         = $_POST['b'];
    $jc         = $_POST['c'];
    $jd         = $_POST['d'];
    $benar      = $_POST['benar'];

    $perbarui   = $conn->query("UPDATE `soal` SET kategori='$kategori', soal='$soal', a='$ja', b='$jb', c='$jc', d='$jd', benar='$benar' WHERE no=$id");
    if($perbarui)
    {
        echo "berhasil memperbarui data";
        ?>
        <script>
        setTimeout(() => {
            window.location = "choose.php";
        }, 1000);
        </script>
        <?php
    }
    else
    {
        echo "gagal memperbarui data";
        ?>
        <script>
        setTimeout(() => {
            window.location = "choose.php";
        }, 1000);
        </script>
        <?php
    }
}
else
{
    header("location:index.php");
}
?>