<?php
include("koneksi.php");
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $hapus = $conn->query("DELETE FROM soal where no='$id'");
    if($hapus)
    {
        echo "berhasil menghapus soal";
    }
    else
    {
        echo "gagal menghapus soal";
    }
}
else
{
    header("location:choose.php");
}
?>
<script>
setTimeout(() => {
    window.location = "choose.php";
}, 1000);
</script>