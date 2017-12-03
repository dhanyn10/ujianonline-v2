<?php session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<style>
		.bungkus{
			background:white;
			width:700px;
			margin:0 auto;
			padding:0 20px;
		}
		</style>
		<div class="bungkus">
			<h3>Daftar</h3>
			<form action="prosesdaftar.php" method="post">
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" value="" name="username" placeholder="username . . ."></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" value="" name="password" placeholder="password . . ."></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" value="" name="nama" placeholder="nama . . ."></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td><input type="text" value="" name="kelas" placeholder="kelas . . ."></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td><input type="text" value="" name="nim" placeholder="nim . . ."></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Daftar"> &nbsp; <input type="reset"></td>
					</tr>
				</table>
			</form>
			Sudah Punya akun ? <a href="index.php"><b>Login</b></a>
		</div>
	</body>
</html>
