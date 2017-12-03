<?php session_start();
if(isset($_SESSION['username']))
{
	header('location:index.php');
}
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ujian Online</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container col-md-6 ml-auto mr-auto">
			<div class="card">
				<div class="card-header bg-success text-white">
					Ujian Online
					<span class="badge bg-dark float-right">developer version</span>
				</div>
				<div class="card-body">
					<div class="container">
						<h3>Daftar</h3>
						<form action="prosesdaftar.php" method="post">
							<table class="table table-bordered">
								<tr>
									<td>Username</td>
									<td><input class="form-control" type="text" value="" name="username" placeholder="username . . ."></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input class="form-control" type="text" value="" name="password" placeholder="password . . ."></td>
								</tr>
								<tr>
									<td>Nama</td>
									<td><input  class="form-control"type="text" value="" name="nama" placeholder="nama . . ."></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td><input class="form-control" type="text" value="" name="kelas" placeholder="kelas . . ."></td>
								</tr>
								<tr>
									<td>NIM</td>
									<td><input class="form-control" type="text" value="" name="nim" placeholder="nim . . ."></td>
								</tr>
							</table>
							<div class="form-group">
								<input class="btn btn-sm btn-success" type="submit" value="Daftar"/>
							</div>
						</form>
						Sudah Punya akun ? <a href="index.php"><b>Login</b></a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
