<form action="prosessoal.php" method="post">
	<table class="table table-bordered">
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