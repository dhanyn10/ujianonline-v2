<!DOCTYPE html>
<html>
	<head>
		<title>Pilih Soal</title>
		<link rel="stylesheet" href="style.css">
		<style>
			.bungkus{
				background:white;
				width:700px;
				margin:0 auto;
				padding:0 20px;
			}
		</style>
		<?php session_start();
			include('koneksi.php');
			if(!(isset($_SESSION['username'])))
			{
				header("location:login.php");
			}
		?>
	</head>
	<body>
		<div class="bungkus">
			<center>
				<h2>Ujian Online Lala</h2>
			</center>
			<p>Selamat datang <?php echo $_SESSION['username'];?><a href="logout.php">Logout</a></p>
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
					Nilai yang kamu dapat : <?php echo $_SESSION['skor']?><br/>
					waktu pengerjaan : <?php echo $_SESSION['menit'].":".$_SESSION['detik']?><br/>
					<td>Terima Kasih Telah Mengikuti Ujian Online Ini !!</td>
					<?php
				}else if($_SESSION["username"] != "admin" && $_SESSION['lokasi'] == 'matkul')
				{ ?>
			Pilih Mata Kuliah Yang Ingin Di Ujikan<br/>
			Waktu Pengerjaan Soal 30 Menit<br/>
			<form method="post" action="choose.php">
				<select name="matkul">
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
				<button type="submit">Submit</button>
			</form>
			<?php } ?>
		</div>
	</body>
</html>