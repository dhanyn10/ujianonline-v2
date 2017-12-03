<?php
include("koneksi.php");
$username   = $_POST['username'];
$pass       = $_POST['password'];
$nama       = $_POST['nama'];
$kelas      = $_POST['kelas'];
$nim        = $_POST['nim'];
$sql        = $conn->query("SELECT * FROM user WHERE username = '$username'");
if(mysqli_num_rows($sql)>0) {
    echo "Username Sudah Terdaftar!";
    echo "<a href='daftar.php'>&amp;amp;laquo; Back</a>";
}
else{
    if($username == null || $pass == null) {
        echo "Masih ada data yang kosong!";
        echo "<a href='daftar.php'>&amp;amp;laquo; Back</a>";
    } else {	
        $simpan = $conn->query("INSERT INTO user (username, password, nama, kelas, nim, batas) VALUES('$username', '$pass','$nama', '$kelas', '$nim', '1')");
        if($simpan) {
            echo "Pendaftaran Sukses";
        }else{
        echo "Proses Gagal!";
        }
    }
}
?>
<script>
setTimeout(() => {
   window.location = "login.php";
}, 1000);
</script>