<?php
include("koneksi.php");
session_start();
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$hasil = mysqli_fetch_assoc($cekuser);
if(count($cekuser) < 1)
{
	echo "Username Belum Terdaftar!";
	echo "<a href='login.php'>Back</a>";
}
else
{
	if($username == $hasil['username'])
	{
		if($pass == $hasil['password'])
		{
			if($username == 'admin')
			{
				$_SESSION['lokasi']		= 'dasbor';
				$_SESSION['username']	= $username;
				header('location:choose.php');
			}
			else
			{
				$_SESSION['lokasi']		= 'matkul';
				$_SESSION['username']	= $username;
				header('location:choose.php');
			}
		}
		else
		{
			echo "password salah";
		}
	}
	else
	{
		echo "username salah";
	}
}
?>