<form action="prosessoal.php" method="post">
	<table>
		<tr>
			<td>Kategori</td>
			<td><input type="text" name="kategori" placeholder="Kategori"></td>
		</tr>
		<tr>
			<td>Soal</td>
			<td><input type="text" name="soal" placeholder="tulis soal di sini"></td>
		</tr>
		<tr>
			<td>Jawaban (A)</td>
			<td><input type="text" placeholder="Jawaban A" name="jawaban_a"></td>
		</tr>
		<tr>
			<td>Jawaban (B)</td>
			<td><input type="text" placeholder="Jawaban B" name="jawaban_b"></td>
		</tr>
		<tr>
			<td>Jawaban (C)</td>
			<td><input type="text" placeholder="Jawaban C" name="jawaban_c"></td>
		</tr>
		<tr>
			<td>Jawaban (D)</td>
			<td><input type="text" placeholder="Jawaban D" name="jawaban_d"></td>
		</tr>
		<tr>
			<td>Jawaban (Benar)</td>
			<td><input type="text" placeholder="Jawaban Benar" name="jawaban_correct"></td>
		</tr>
	</table>
	<input type="submit" value="Input"/>
</form>