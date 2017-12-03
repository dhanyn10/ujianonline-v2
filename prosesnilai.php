<?php
include("koneksi.php");
$matkul = $_POST['matkul'];
$timer = $_POST['timer'];
$a = '1';
$n = 0;
$jawaban = mysqli_query($conn, "SELECT * from $matkul");
while($data = mysqli_fetch_array($jawaban))
{
	if ($a == $data['no'])
		{
			if ($_POST[$a] == $data['benar'])
				{
					$n++;
				}
		}
$a++;
}
header("location:choose.php?matkul=hasil&hasil=$n&timer=$timer")
?>