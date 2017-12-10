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
		<div class="container tengah col-md-6 ml-auto mr-auto">
			<div class="card">
				<div class="card-header bg-success text-white">
					Ujian Online
					<span class="badge bg-dark float-right">developer version</span>
				</div>
				<div class="card-body">
					<div class="container">
						<form action="proseslogin.php" method="post">
							<div class="form-group row">
								<div class="col-md-4">
									Username
								</div>
								<div class="col-md-8">
									<input class="form-control" type="text" name="username" placeholder="Username . . ." required/>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-4">
									Password
								</div>
								<div class="col-md-8">
									<input class="form-control" type="password" placeholder="Password . . ." name="password" required/>
								</div>
							</div>
							<div class="form-group row">
								<button type="submit" class="btn btn-sm btn-secondary">Login</button> 
								<span class="ml-auto">Belum punya akun?<a href="daftar.php">Daftar</a></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>