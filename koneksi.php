<?php
// $servername  = "sql12.freemysqlhosting.net";
// $user        = "sql12208396";
// $password    = "l4a8LWaqRp";
// $db          = "sql12208396";

$servername = "localhost";
$user       = "root";
$password   = "";
$db         = "ujian";

$conn= mysqli_connect($servername, $user, $password, $db);
?>
<style>
body{
    background:url('testonline.jpg');
    background-position:fixed;
    background-size:cover;
}
.tengah{
    top:50%;
    transform:translate(0, -50%);
}
</style>