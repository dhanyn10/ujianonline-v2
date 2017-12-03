<style>
.tab-pane{
	max-height:400px;
	overflow:auto;
}
</style>
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#tambahsoal" role="tab" aria-selected="true">tambah soal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#lihatsoal" role="tab" aria-selected="false">lihat soal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#peserta" role="tab" aria-selected="false">peserta</a>
  </li>
</ul>
<div class="tab-content">
	<div class="tab-pane fade show active" id="tambahsoal" role="tabpanel">
		<form action="prosessoal.php" method="post">
			<table class="table table-bordered">
				<tr class="bg-success text-white">
					<th>kolom</th>
					<th>nilai</th>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input class="form-control form-control-sm" type="text" name="kategori" placeholder="Kategori"></td>
				</tr>
				<tr>
					<td>Soal</td>
					<td><input class="form-control form-control-sm" type="text" name="soal" placeholder="tulis soal di sini"></td>
				</tr>
				<tr>
					<td>Jawaban (A)</td>
					<td><input class="form-control form-control-sm" type="text" placeholder="Jawaban A" name="jawaban_a"></td>
				</tr>
				<tr>
					<td>Jawaban (B)</td>
					<td><input class="form-control form-control-sm" type="text" placeholder="Jawaban B" name="jawaban_b"></td>
				</tr>
				<tr>
					<td>Jawaban (C)</td>
					<td><input class="form-control form-control-sm" type="text" placeholder="Jawaban C" name="jawaban_c"></td>
				</tr>
				<tr>
					<td>Jawaban (D)</td>
					<td><input class="form-control form-control-sm" type="text" placeholder="Jawaban D" name="jawaban_d"></td>
				</tr>
				<tr>
					<td>Jawaban (Benar)</td>
					<td>
						<select name="jawaban_correct" class="form-control form-control-sm">
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="d">D</option>
						</select>
					</td>
				</tr>
			</table>
			<button class="btn btn-sm btn-success" type="submit">Kirim</button>
		</form>
	</div>
	<div class="tab-pane fade" id="lihatsoal" role="tabpanel">
	<?php
		$datasoal = $conn->query("SELECT * FROM soal");
		echo "<table class='table table-bordered table-responsive'>".
				"<tr class='bg-success text-white'>".
					"<th>kategori</th>".
					"<th>soal</th>".
					"<th>a</th>".
					"<th>b</th>".
					"<th>c</th>".
					"<th>d</th>".
					"<th>benar</th>".
					"<th>tindakan</th>".
				"</tr>";
		while($row = mysqli_fetch_assoc($datasoal))
		{
				echo "<tr>".
						"<td>".
							$row['kategori'].
						"</td>".
						"<td>".
							$row['soal'].
						"</td>".
						"<td>".
							$row['a'].
						"</td>".
						"<td>".
							$row['b'].
						"</td>".
						"<td>".
							$row['c'].
						"</td>".
						"<td>".
							$row['d'].
						"</td>".
						"<td>".
							$row['benar'].
						"</td>".
						"<td>".
							"<form method='post' action='hapusdata.php'>".
								"<input type='hidden' name='id' value='".$row['no']."'/>".
								"<button type='submit' class='btn btn-danger btn-sm'>hapus</button>".
							"</form>".
						"</td>".
					"<tr>";
		}
		echo "</table>";
	?>
	</div>
	<div class="tab-pane fade" id="peserta" role="tabpanel">
	<?php
		$datanilai = $conn->query("SELECT * FROM nilai");
		echo "<table class='table table-bordered'>".
				"<tr class='bg-success text-white'>".
					"<th>nama</th>".
					"<th>kategori</th>".
					"<th>nilai</th>".
				"</tr>";
		while($row = mysqli_fetch_assoc($datanilai))
		{
				echo "<tr>".
						"<td>".
							$row['nama'].
						"</td>".
						"<td>".
							$row['kategori'].
						"</td>".
						"<td>".
							$row['nilai'].
						"</td>".
					"<tr>";
		}
		echo "</table>";
	?>
	</div>
</div>
