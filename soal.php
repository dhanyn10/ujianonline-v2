
	<tr>
		<td>
			Kerjakan Soal dengan Benar !!!!
		</td>
	</tr>
		<tr>
		<td>
			<p id="waktu"></p>
		</td>
	</tr>

<form action="prosesnilai.php" method="POST">

<?php
$matkul = $_GET['matkul'];
include("koneksi.php");
$query = mysqli_query($conn, "SELECT * from $matkul");
$no = 1;
echo "<input type=hidden value=$matkul name=matkul>";
echo "<input type=hidden id=timer name=timer>";
while($data = mysqli_fetch_array($query))
{
	echo "<tr>
	<td colspan=4>$data[no]. $data[soal]</td>
	</tr>
	<tr>
	<td bgcolor=#eee><input type=radio name=$data[no] value=a>$data[a]</td>
	</tr>
	<tr>
	<td bgcolor=#eee><input type=radio name=$data[no] value=b>$data[b]</td>
	</tr>
	<tr>
	<td bgcolor=#eee><input type=radio name=$data[no] value=c>$data[c]</td>
	</tr>
	<tr>
	<td bgcolor=#eee><input type=radio name=$data[no] value=d>$data[d]</td>
	</tr>";
	$no++;
}
?>
<tr>
	<th>
		<input type="submit" value="Submit">
	</th>
</tr>
</form>
	<script>
	var waktu = document.getElementById("waktu");
	var menit = <?php echo json_encode($data[waktu]); ?>;
	var int = 1;
	var minut = 0;
	var myVar = setInterval(function(){
		waktu.innerText = "Waktu Pengerjaan  "+minut+":"+int;
		int++;
		if(int == 60)
		{
			minut++;
			int=0;
		}
		if (minut == 30 && int == 1)
		{
			clearInterval(myVar)
			alert("Waktu Pengerjaan Selesai Submit Otomatis")
		}
document.getElementById("timer").value = minut+":"+int
	},1000)
</script>