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
	<div class="tab-pane fade" id="tambahsoal" role="tabpanel">
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
		$datasoal = $conn->query("SELECT * FROM soal order by kategori");
		while($row = mysqli_fetch_assoc($datasoal))
		{
			?>
			<div class="card">
				<div class="card-body">
					<h6><?php echo $row['kategori']?></h6>
					<p><?php echo $row['soal']?></p>
					<table class="table table-bordered">
						<tr>
							<td class="col-3">Jawab A</td>
							<td class="col-9"><?php echo $row['a']?></td>
						</tr>
						<tr>
							<td class="col-3">Jawab B</td>
							<td class="col-9"><?php echo $row['b']?></td>
						</tr>
						<tr>
							<td class="col-3">Jawab C</td>
							<td class="col-9"><?php echo $row['c']?></td>
						</tr>
						<tr>
							<td class="col-3">Jawab D</td>
							<td class="col-9"><?php echo $row['d']?></td>
						</tr>
						<tr>
							<td class="col-3">Jawab Benar</td>
							<td class="col-9"><?php echo $row['benar']?></td>
						</tr>
					</table>
					<div class="row">
						<div class="col-md-2 ml-auto">
							<div class="row">
								<div class="col-6">
									<form method='post' action='hapusdata.php'>
										<input type='hidden' name='id' value='".$row['no']."'/>
										<button type='submit' class='btn btn-danger btn-sm' title='hapus'><i class='fa fa-trash'></i></button>
									</form>
								</div>
								<div class="col-6">
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubah_<?php echo $row['no'];?>">
										<i class="fa fa-pencil-square"></i>
									</button>
									<div class="modal fade" id="ubah_<?php echo $row['no'];?>" tabindex="-1" role="dialog"aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Ubah Soal</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method='post' action='ubahsoal.php'>
													<div class="modal-body">
														<input type='hidden' name='ubahsoal'/>
														<input type='hidden' name='id' value='<?php echo $row['no']?>'/>
														<div class="form-group row">
															<div class="col-md-4">
																kategori
															</div>
															<div class="col-md-8">
																<input class='form-control form-control-sm' type='text' name='kategori' placeholder='kategori' value='<?php echo $row['kategori']?>' maxlength='30'/>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-4">
																soal
															</div>
															<div class="col-md-8">
																<textarea class='form-control form-control-sm' type='text' name='soal' placeholder='soal' value="<?php echo $row['soal']?>" rows="4" maxlength='1000'><?php echo $row['soal']?></textarea>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-4">
																a
															</div>
															<div class="col-md-8">
																<input class='form-control form-control-sm' type='text' name='a'value="<?php echo $row['a']?>" maxlength='50'/>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-4">
																b
															</div>
															<div class="col-md-8">
																<input class='form-control form-control-sm' type='text' name='b' value="<?php echo $row['b']?>" maxlength='50'/>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-4">
																c
															</div>
															<div class="col-md-8">
																<input class='form-control form-control-sm' type='text' name='c' value="<?php echo $row['c']?>" maxlength='50'/>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-4">
																d
															</div>
															<div class="col-md-8">
																<input class='form-control form-control-sm' type='text' name='d' value="<?php echo $row['d']?>" maxlength='50'/>
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-4">
																benar
															</div>
															<div class="col-md-8">				
															<select name="benar" class="form-control form-control-sm">
																<option value="a">A</option>
																<option value="b">B</option>
																<option value="c">C</option>
																<option value="d">D</option>
															</select>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-sm btn-light">ubah</button>
														<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">batal</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
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
