<?php session_start();
	require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container col-md-6 ml-auto mr-auto">
			<div class="card">
				<div class="card-header bg-success text-white">Ujian Online<span class="badge bg-dark float-right">developer version</span></div>
				<div class="card-body">
					<div class="container">
						<div class="col-lg-12">
							<a class="text-muted float-right" href="logout.php">Logout</a>
						</div>
						<h4>Selamat datang <?php echo $_SESSION['username'];?></h4>
						<?php
							if($_SESSION["username"] == "admin")
							{
								include('admin.php');
							}
							else if($_SESSION["username"] != "admin" && isset($_POST['matkul']))
							{
								include("soalmatkul.php");
							}
							else if($_SESSION["username"] != "admin" && $_SESSION['lokasi'] == 'hasil')
							{
						?>
						<table class="table table-bordered">
							<tr>
								<td>Nilai yang kamu dapat</td>
								<td><?php echo $_SESSION['skor']?></td>
							</tr>
							<tr>
								<td>Waktu Pengerjaan</td>
								<td><?php echo $_SESSION['menit']?>:<?php echo $_SESSION['detik']?></td>
							</tr>
						</table>
						<td>Terima Kasih Telah Mengikuti Ujian Online Ini !!</td>
						<?php }else if($_SESSION["username"] != "admin" && $_SESSION['lokasi'] == 'matkul') { ?>

						Pilih Mata Kuliah Yang Ingin Di Ujikan<br/>
						Waktu Pengerjaan Soal 30 Menit<br/>
						<form method="post" action="choose.php">
							<div class="form-group row">
								<div class="col-md-9">
									<select name="matkul" class="form-control form-control-sm">
										<?php
											$data = $conn->query("SELECT * FROM soal");
											$arraykategori = array();
											$a = 0;
											foreach($data as $data)
											{
												$arraykategori[$a] = $data['kategori'];
												$a++;
											}
											$arraykategori = array_unique($arraykategori);
											foreach($arraykategori as $arraykategori)
											{
											echo '<option value="'.$arraykategori.'">'.$arraykategori.'</option>';
											}
										?>
									</select>
								</div>
								<div class="col-md-3">
									<button class="btn btn-sm btn-light" type="submit">Submit</button>
								</div>
							</div>
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>